<?php
/**
 * @package CustomPermalinks\Admin
 */

class Custom_Permalinks_Admin {

	/**
	 * Initializes WordPress hooks
	 */
	function __construct() {
		add_action( 'admin_menu', array( $this, 'custom_permalinks_menu' ) );
	}

	/**
	 * Added Pages in Menu for Settings
	 */
	public function custom_permalinks_menu() {
		add_menu_page( 'PostTypes Permalinks', 'Custom Permalinks', 'administrator', 'custom-permalinks-post-permalinks', array( $this,'custom_permalinks_post_permalinks' ), 'dashicons-admin-links' );
		add_submenu_page( 'custom-permalinks-post-permalinks', 'PostTypes Permalinks', 'PostTypes Permalinks', 'administrator', 'custom-permalinks-post-permalinks', array( $this, 'custom_permalinks_post_permalinks' ) );
		add_submenu_page( 'custom-permalinks-post-permalinks', 'Category Permalinks', 'Category Permalinks', 'administrator', 'custom-permalinks-category-permalinks', array( $this, 'custom_permalinks_category_permalinks' ) );
	}

	/**
	 * Shows all the Permalinks created by using this Plugin with Pager and Search Functionality of Posts/Pages
	 */
	public function custom_permalinks_post_permalinks() {
		global $wpdb;
		$filter_options   = '';
		$filter_permalink = '';
		$search_permalink = '';
		$html             = '';
		$error            = '';

		// Handle Bulk Operations
		if ( ( isset( $_POST['action'] ) && $_POST['action'] == 'delete' )
			|| ( isset( $_POST['action2'] ) && $_POST['action2'] == 'delete' )
			&& isset( $_POST['permalink'] ) && ! empty( $_POST['permalink'] ) ) {
			$post_ids = implode( ',', $_POST['permalink'] );
			if ( preg_match( '/^\d+(?:,\d+)*$/', $post_ids ) ) {
				$wpdb->query( "DELETE FROM $wpdb->postmeta WHERE post_id IN ($post_ids) AND meta_key = 'custom_permalink'" );
			} else {
				$error = '<div id="message" class="error"><p>' . __( 'There is some error to proceed your request. Please retry with your request or contact to the plugin author.', 'custom-permalinks' ) . '</p></div>';
			}
		}
		$html .= '<div class="wrap">
									<h1 class="wp-heading-inline">' . __( 'PostTypes Permalinks', 'custom-permalinks' ) . '</h1>';
		$html .= $error;

		$search_value = '';
		if ( isset( $_GET['s'] ) && ! empty( $_GET['s'] ) ) {
			$filter_permalink = 'AND pm.meta_value LIKE "%' . $_GET['s'] . '%"';
			$search_permalink = '&s=' . $_GET['s'] . '';
			$search_value     = ltrim( htmlspecialchars( $_GET['s'] ), '/' );
			$html            .= '<span class="subtitle">Search results for "' . $search_value . '"</span>';
		}
		$page_limit = 'LIMIT 0, 20';
		if ( isset( $_GET['paged'] ) && is_numeric( $_GET['paged'] ) && $_GET['paged'] > 1 ) {
			$pager = 20 * ( $_GET['paged'] - 1 );
			$page_limit = 'LIMIT ' . $pager . ', 20';
		}
		$sorting_by = 'ORDER By p.ID DESC';
		$order_by = 'asc';
		$order_by_class = 'desc';
		if ( isset( $_GET['orderby'] ) && $_GET['orderby'] == 'title' ) {
			$filter_options .= '<input type="hidden" name="orderby" value="title" />';
			if ( isset( $_GET['order'] ) && $_GET['order'] == 'desc' ) {
				$sorting_by      = 'ORDER By p.post_title DESC';
				$order_by        = 'asc';
				$order_by_class  = 'desc';
				$filter_options .= '<input type="hidden" name="order" value="desc" />';
			} else {
				$sorting_by      = 'ORDER By p.post_title';
				$order_by        = 'desc';
				$order_by_class  = 'asc';
				$filter_options .= '<input type="hidden" name="order" value="asc" />';
			}
		}
		$count_query = "SELECT COUNT(p.ID) AS total_permalinks FROM $wpdb->posts AS p LEFT JOIN $wpdb->postmeta AS pm ON (p.ID = pm.post_id) WHERE pm.meta_key = 'custom_permalink' AND pm.meta_value != '' " . $filter_permalink . "";
		$count_posts = $wpdb->get_row( $count_query );

		$html .= '<form action="' . $_SERVER["REQUEST_URI"] . '" method="get">';
		$html .= '<p class="search-box">';
		$html .= '<input type="hidden" name="page" value="custom-permalinks-post-permalinks" />';
		$html .= $filter_options;
		$html .= '<label class="screen-reader-text" for="custom-permalink-search-input">Search Custom Permalink:</label>';
		$html .= '<input type="search" id="custom-permalink-search-input" name="s" value="' . $search_value . '">';
		$html .= '<input type="submit" id="search-submit" class="button" value="Search Permalink"></p>';
		$html .= '</form>';
		$html .= '<form action="' . $_SERVER["REQUEST_URI"] . '" method="post">';
		$html .= '<div class="tablenav top">';
		$html .= '<div class="alignleft actions bulkactions">
									<label for="bulk-action-selector-top" class="screen-reader-text">Select bulk action</label>
										<select name="action" id="bulk-action-selector-top">
												<option value="-1">' . __( "Bulk Actions", "custom-permalinks" ) . '</option>
												<option value="delete">' . __( "Delete Permalinks", "custom-permalinks" ) . '</option>
										</select>
										<input type="submit" id="doaction" class="button action" value="Apply">
							</div>';

		$posts = 0;
		if ( isset( $count_posts->total_permalinks ) && $count_posts->total_permalinks > 0 ) {

			$html .= '<h2 class="screen-reader-text">Custom Permalink navigation</h2>';

			$query = "SELECT p.ID, p.post_title, p.post_type, pm.meta_value FROM $wpdb->posts AS p LEFT JOIN $wpdb->postmeta AS pm ON (p.ID = pm.post_id) WHERE pm.meta_key = 'custom_permalink' AND pm.meta_value != '' " . $filter_permalink . " " . $sorting_by . " " . $page_limit . "";
			$posts = $wpdb->get_results( $query );

			$pagination_html = '';
			$total_pages = ceil( $count_posts->total_permalinks / 20 );
			if ( isset( $_GET['paged'] ) && is_numeric( $_GET['paged'] ) && $_GET['paged'] > 0 ) {
				$pagination_html = $this->custom_permalinks_pager( $count_posts->total_permalinks, $_GET['paged'], $total_pages );
				if ( $_GET['paged'] > $total_pages ) {
					$redirect_uri = explode( '&paged=' . $_GET['paged'] . '', $_SERVER['REQUEST_URI'] );
					header( 'Location: ' . $redirect_uri[0], 301 );
					exit();
				}
			} elseif ( ! isset( $_GET['paged'] ) ) {
				$pagination_html = $this->custom_permalinks_pager( $count_posts->total_permalinks, 1, $total_pages );
			}

			$html .= $pagination_html;
		}
		$table_navigation = $this->custom_permalink_tablenav_posts( $order_by_class, $order_by, $search_permalink );

		$html .= '</div>';
		$html .= '<table class="wp-list-table widefat fixed striped posts">
									<thead>' . $table_navigation . '</thead>
									<tbody>';
		if ( $posts != 0 && ! empty( $posts ) ) {
			foreach ( $posts as $post ) {
				$html .= '<tr valign="top">';
				$html .= '<th scope="row" class="check-column"><input type="checkbox" name="permalink[]" value="' . $post->ID . '" /></th>';
				$html .= '<td><strong><a class="row-title" href="post.php?action=edit&post=' . $post->ID . '">' . $post->post_title . '</a></strong></td>';
				$html .= '<td>' . ucwords( $post->post_type ) . '</td>';
				$html .= '<td><a href="/' . $post->meta_value . '" target="_blank" title="' . __( "Visit " . $post->post_title, "custom-permalinks" ) . '">/' . urldecode( $post->meta_value ) . '</a></td></tr>';
			}
		} else {
			$html .= '<tr class="no-items"><td class="colspanchange" colspan="10">No permalinks found.</td></tr>';
		}
		$html .= '</tbody>
							<tfoot>' . $table_navigation . '</tfoot>
							</table>';

		$html .= '<div class="tablenav bottom">
									<div class="alignleft actions bulkactions">
											<label for="bulk-action-selector-bottom" class="screen-reader-text">Select bulk action</label>
												<select name="action2" id="bulk-action-selector-bottom">
														<option value="-1">' . __( "Bulk Actions", "custom-permalinks" ) . '</option>
														<option value="delete">' . __( "Delete Permalinks", "custom-permalinks" ) . '</option>
												</select>
												<input type="submit" id="doaction2" class="button action" value="Apply">
									</div>
									' . $pagination_html . '
							</div>';
		$html .= '</form>
							</div>';
		echo $html;
	}

	/**
	 * Return the Navigation row HTML same as Default Posts page for PostTypes
	 */
	private function custom_permalink_tablenav_posts( $order_by_class, $order_by, $search_permalink ) {
		$nav = '<tr>
								<td id="cb" class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-1">Select All</label><input id="cb-select-all-1" type="checkbox"></td>
								<th scope="col" id="title" class="manage-column column-title column-primary sortable ' . $order_by_class . '"><a href="/wp-admin/admin.php?page=custom-permalinks-post-permalinks&amp;orderby=title&amp;order=' . $order_by . $search_permalink . '"><span>' . __( "Title", "custom-permalinks" ) . '</span><span class="sorting-indicator"></span></a></th>
								<th scope="col">' . __( "Type", "custom-permalinks" ) . '</th>
								<th scope="col">' . __( "Permalink", "custom-permalinks" ) . '</th>
					 </tr>';
		return $nav;
	}

	/**
	 * Shows all the Permalinks created by using this Plugin with Pager and Search Functionality of Category/Tags
	 */
	public function custom_permalinks_category_permalinks() {

		$search_permalink = '';
		$html             = '';

		// Handle Bulk Operations
		if ( ( isset( $_POST['action'] ) && $_POST['action'] == 'delete' )
			|| ( isset( $_POST['action2'] ) && $_POST['action2'] == 'delete' )
			&& isset( $_POST['permalink'] ) && ! empty( $_POST['permalink'] ) ) {
			$remove_perm = $_POST['permalink'];
				$data = get_option( 'custom_permalink_table' );
				if ( isset( $data ) && is_array( $data ) ) {
					$i = 0;
					foreach ( $data as $link => $info ) {
						if ( in_array( $info['id'], $remove_perm ) ) {
							unset( $data[$link] );
							unset( $remove_perm[$i] );
							if ( ! is_array( $remove_perm ) || empty( $remove_perm ) )
								break;
						}
						$i++;
					}
				}
			 update_option( 'custom_permalink_table', $data );
		}
		$html .= '<div class="wrap">
									<h1 class="wp-heading-inline">' . __( 'Category/Tags Permalinks', 'custom-permalinks' ) . '</h1>';

		$search_value = '';
		if ( isset( $_GET['s'] ) && ! empty( $_GET['s'] ) ) {
			$search_permalink = '&s=' . $_GET['s'] . '';
			$search_value     = ltrim( htmlspecialchars( $_GET['s'] ), '/' );
			$html            .= '<span class="subtitle">Search results for "' . $search_value . '"</span>';
		}
		$pager_offset = '0';
		$page_limit   = 20;
		if ( isset( $_GET['paged'] ) && is_numeric( $_GET['paged'] ) && $_GET['paged'] > 1 ) {
			$pager_offset = 20 * ( $_GET['paged'] - 1 );
			$page_limit = $pager_offset + 20;
		}
		$html .= '<form action="' . $_SERVER["REQUEST_URI"] . '" method="get">';
		$html .= '<p class="search-box">';
		$html .= '<input type="hidden" name="page" value="custom-permalinks-category-permalinks" />';
		$html .= '<label class="screen-reader-text" for="custom-permalink-search-input">Search Custom Permalink:</label>';
		$html .= '<input type="search" id="custom-permalink-search-input" name="s" value="' . $search_value . '">';
		$html .= '<input type="submit" id="search-submit" class="button" value="Search Permalink"></p>';
		$html .= '</form>';
		$html .= '<form action="' . $_SERVER["REQUEST_URI"] . '" method="post">';
		$html .= '<div class="tablenav top">';
		$html .= '<div class="alignleft actions bulkactions">
									<label for="bulk-action-selector-top" class="screen-reader-text">Select bulk action</label>
										<select name="action" id="bulk-action-selector-top">
												<option value="-1">' . __( "Bulk Actions", "custom-permalinks" ) . '</option>
												<option value="delete">' . __( "Delete Permalinks", "custom-permalinks" ) . '</option>
										</select>
										<input type="submit" id="doaction" class="button action" value="Apply">
							</div>';

		$posts           = 0;
		$table           = get_option( 'custom_permalink_table' );
		$count_tags      = count( $table );
		$pagination_html = '';
		if ( isset( $table ) && is_array( $table ) && $count_tags > 0 ) {

			$filtered = array();
			if ( $search_value != '' ) {
				foreach ( $table as $key => $value ) {
					if( preg_match( '/' . $search_value . '/', $key) ) {
						$filtered[$key] = $value;
					}
				}
				$table = $filtered;
				$count_tags = count( $table );
			}

			$html .= '<h2 class="screen-reader-text">Custom Permalink navigation</h2>';

			$total_pages = ceil( $count_tags / 20 );
			if ( isset( $_GET['paged'] ) && is_numeric( $_GET['paged'] ) && $_GET['paged'] > 0 ) {
				$pagination_html = $this->custom_permalinks_pager( $count_tags, $_GET['paged'], $total_pages);
				if ( $_GET['paged'] > $total_pages ) {
					$redirect_uri = explode( '&paged=' . $_GET['paged'] . '', $_SERVER['REQUEST_URI'] );
					header( 'Location: ' . $redirect_uri[0], 301 );
					exit();
				}
			} elseif ( ! isset( $_GET['paged'] ) ) {
				$pagination_html = $this->custom_permalinks_pager( $count_tags, 1, $total_pages );
			}

			$html .= $pagination_html;
		}
		$table_navigation = $this->custom_permalink_tablenav_category( $search_permalink );

		$html .= '</div>';
		$html .= '<table class="wp-list-table widefat fixed striped posts">
									<thead>' . $table_navigation . '</thead>
									<tbody>';

		if ( $table && is_array( $table ) && $count_tags > 0 ) {
			uasort( $table, array( 'Custom_Permalinks_Admin', 'custom_permalinks_sort_array' ) );
			$i = -1;
			foreach ( $table as $permalink => $info ) {
				$i++;
				if ( $i < $pager_offset )
					continue;

				if ( $i >= $page_limit )
					break;

				$type  =  $info['kind'] == 'tag' ? 'post_tag' : 'category';
				$term  =  get_term( $info['id'], $type );
				$html .=  '<tr valign="top">';
				$html .=  '<th scope="row" class="check-column"><input type="checkbox" name="permalink[]" value="' . $info['id'] . '" /></th>';
				$html .=  '<td><strong><a class="row-title" href="edit-tags.php?action=edit&taxonomy=' . $type . '&tag_ID=' . $info['id'] . ' ">' . $term->name . '</a></strong></td>';
				$html .=  '<td>' . ucwords( $info['kind'] ) . '</td>';        
				$html .=  '<td><a href="/' . $permalink . '" target="_blank" title="' . __( "Visit " . $term->name, "custom-permalinks" ) . '">/' . $permalink . '</a></td></tr>';
			}
		} else {
			$html .= '<tr class="no-items"><td class="colspanchange" colspan="10">No permalinks found.</td></tr>';
		}
		$html .= '</tbody>
							<tfoot>' . $table_navigation . '</tfoot>
							</table>';

		$html .= '<div class="tablenav bottom">
									<div class="alignleft actions bulkactions">
											<label for="bulk-action-selector-bottom" class="screen-reader-text">Select bulk action</label>
												<select name="action2" id="bulk-action-selector-bottom">
														<option value="-1">' . __( "Bulk Actions", "custom-permalinks" ) . '</option>
														<option value="delete">' . __( "Delete Permalinks", "custom-permalinks" ) . '</option>
												</select>
												<input type="submit" id="doaction2" class="button action" value="Apply">
									</div>
									' . $pagination_html . '
							</div>';
		$html .= '</form>
							</div>';
		echo $html;
	}

	/**
	 * Sort the terms array in desc order using term id
	 */
	private static function custom_permalinks_sort_array( $a, $b ) {
		return $b['id'] - $a['id'];
	}

	/**
	 * Return the Navigation row HTML same as Default Posts page for Category
	 */
	private function custom_permalink_tablenav_category( $search_permalink ) {
		$nav = '<tr>
								<td id="cb" class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-1">Select All</label><input id="cb-select-all-1" type="checkbox"></td>
								<th scope="col" id="title" class="manage-column column-title column-primary">' . __( "Title", "custom-permalinks" ) . '</th>
								<th scope="col">' . __( "Type", "custom-permalinks" ) . '</th>
								<th scope="col">' . __( "Permalink", "custom-permalinks" )  . '</th>
					 </tr>';
		return $nav;
	}

	/**
	 * Return the Pager HTML
	 */
	private function custom_permalinks_pager( $total_permalinks, $current_pager_value = 1, $total_pager = 0 ) {

		if ( $total_pager == 0 ) return;

		if ( $total_pager == 1 ) {
			$pagination_html = '<div class="tablenav-pages one-page">
															<span class="displaying-num">' . $total_permalinks . ' items</span>
													</div>';
			return $pagination_html;
		}

		$remove_pager_uri = explode( '&paged=' . $current_pager_value . '', $_SERVER['REQUEST_URI'] );
		$pagination_html = '<div class="tablenav-pages">
														<span class="displaying-num">' . $total_permalinks . ' items</span>
														<span class="pagination-links">';

		if ( $current_pager_value == 1 ) {
			$pagination_html .= '<span class="tablenav-pages-navspan" aria-hidden="true">&laquo; </span>
													 <span class="tablenav-pages-navspan" aria-hidden="true">&lsaquo; </span>';
		} else {
			$prev_page = $current_pager_value - 1;
			if ( $prev_page == 1 ) {
				$pagination_html .= '<span class="tablenav-pages-navspan" aria-hidden="true">&laquo;</span>';
			} else {
				$pagination_html .= ' <a href="' . $remove_pager_uri[0] . '&paged=1" title="First page" class="first-page">
															<span class="screen-reader-text">First page</span>
															<span aria-hidden="true">&laquo;</span>
														 </a> ';
			}
			$pagination_html .= ' <a href="' . $remove_pager_uri[0] . '&paged=' . $prev_page . '" title="Previous page" class="prev-page">
															<span class="screen-reader-text">Previous page</span>
															<span aria-hidden="true">&lsaquo;</span>
													 </a> ';
		}

		$pagination_html .=  '<span class="paging-input">
															<label for="current-page-selector" class="screen-reader-text">Current Page</label>
															<input class="current-page" id="current-page-selector" type="text" name="paged" value="' . $current_pager_value . '" size="1" aria-describedby="table-paging" />
															<span class="tablenav-paging-text"> of <span class="total-pages">' . $total_pager . ' </span> </span>
													</span>';

		if ( $current_pager_value == $total_pager ) {
			$pagination_html .= '<span class="tablenav-pages-navspan" aria-hidden="true">&rsaquo; </span>
													 <span class="tablenav-pages-navspan" aria-hidden="true">&raquo; </span>';
		} else {
			$next_page = $current_pager_value + 1;
			$pagination_html .= ' <a href="' . $remove_pager_uri[0] . '&paged=' . $next_page . '" title="Next page" class="next-page">
																<span class="screen-reader-text">Next page</span>
																<span aria-hidden="true">&rsaquo;</span>
														</a> ';
			if ( $total_pager == $next_page) {
				$pagination_html .= '<span class="tablenav-pages-navspan" aria-hidden="true">&raquo;</span>';
			} else {
				$pagination_html .= ' <a href="' . $remove_pager_uri[0] . '&paged=' . $total_pager . '" title="Last page" class="last-page">
																<span class="screen-reader-text">Last page</span>
																<span aria-hidden="true">&raquo;</span>
														 </a> ';
			}

		}
		$pagination_html .= '</span></div>';

		return $pagination_html;
	}

}
