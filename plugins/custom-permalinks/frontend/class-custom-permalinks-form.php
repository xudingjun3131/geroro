<?php
/**
 * @package CustomPermalinks\Admin\Form
 */

class Custom_Permalinks_Form {  

	/**
	 * Initialize WordPress Hooks
	 */
	public function init() {

		add_filter( 'get_sample_permalink_html', array( $this, 'custom_permalinks_get_sample_permalink_html' ), 10, 4 );

		add_action( 'save_post', array( $this, 'custom_permalinks_save_post' ), 10, 3 );
		add_action( 'delete_post', array( $this, 'custom_permalinks_delete_permalink' ), 10 );

		add_action( 'edit_tag_form', array( $this, 'custom_permalinks_term_options' ) );
		add_action( 'add_tag_form', array( $this, 'custom_permalinks_term_options' ) );
		add_action( 'edit_category_form', array( $this, 'custom_permalinks_term_options' ) );

		add_action( 'edited_post_tag', array( $this, 'custom_permalinks_save_tag' ) );
		add_action( 'edited_category', array( $this, 'custom_permalinks_save_category' ) );
		add_action( 'create_post_tag', array( $this, 'custom_permalinks_save_tag' ) );
		add_action( 'create_category', array( $this, 'custom_permalinks_save_category' ) );
		add_action( 'delete_post_tag', array( $this, 'custom_permalinks_delete_term' ) );
		add_action( 'delete_post_category', array( $this, 'custom_permalinks_delete_term' ) );
	}

	/**
	 * Save per-post options
	 */
	public function custom_permalinks_save_post( $id ) {
		if ( ! isset( $_REQUEST['custom_permalinks_edit'] ) ) {
			return;
		}

		delete_post_meta( $id, 'custom_permalink' );
		
		require_once( CUSTOM_PERMALINKS_PATH . 'frontend/class-custom-permalinks-frontend.php' );
		$custom_permalinks_frontend = new Custom_Permalinks_Frontend();
		$original_link = $custom_permalinks_frontend->custom_permalinks_original_post_link( $id );
		$permalink_structure = get_option( 'permalink_structure' );

		if ( $_REQUEST['custom_permalink'] && $_REQUEST['custom_permalink'] != $original_link ) {
			add_post_meta( $id, 'custom_permalink',
				str_replace( '%2F', '/',
					urlencode( ltrim( stripcslashes( $_REQUEST['custom_permalink'] ), "/" ) )
				)
			);
		}
	}

	/**
	 * Delete post
	 */
	public function custom_permalinks_delete_permalink( $id ) {
		global $wpdb;
		$wpdb->query( $wpdb->prepare( "DELETE FROM $wpdb->postmeta WHERE meta_key = 'custom_permalink' AND post_id = %d", $id ) );
	}

	/**
	 * Per-post/page options (Wordpress > 2.9)
	 */
	public function custom_permalinks_get_sample_permalink_html( $html, $id, $new_title, $new_slug ) {		
		$permalink = get_post_meta( $id, 'custom_permalink', true );
		$post      = get_post( $id );

		if ( $post->post_type == 'attachment' || $post->ID == get_option( 'page_on_front' ) ) {
			return $html;
		}

    $exclude_post_types = $post->post_type;
    $excluded = apply_filters( 'custom_permalinks_exclude_post_type', $exclude_post_types );
    if ( '__true' === $excluded ) {
			return $html;
		}

    ob_start();

		require_once( CUSTOM_PERMALINKS_PATH . 'frontend/class-custom-permalinks-frontend.php' );
		$custom_permalinks_frontend = new Custom_Permalinks_Frontend();
		if ( $post->post_type == "page" ) {
			$original_page_url = $custom_permalinks_frontend->custom_permalinks_original_page_link( $id );
			$this->custom_permalinks_get_form( $permalink, $original_page_url, false, $post->post_name );
		} else {
			$original_post_url = $custom_permalinks_frontend->custom_permalinks_original_post_link( $id );
			$this->custom_permalinks_get_form( $permalink, $original_post_url, false, $post->post_name );
		}

		$content = ob_get_contents();
		ob_end_clean();

		if ( 'publish' == $post->post_status ) {
			$view_post = 'page' == $post->post_type ? __( 'View Page', 'custom-permalinks' ) : __( 'View Post', 'custom-permalinks' );
		}

		if ( preg_match( "@view-post-btn.*?href='([^']+)'@s", $html, $matches ) ) {
			$permalink = $matches[1];
		} else {
			list( $permalink, $post_name ) = get_sample_permalink( $post->ID, $new_title, $new_slug );
			if ( false !== strpos( $permalink, '%postname%' )
				|| false !== strpos( $permalink, '%pagename%' ) ) {
				$permalink = str_replace( array( '%pagename%','%postname%' ), $post_name, $permalink );
			}
		}

		return '<strong>' . __( 'Permalink:', 'custom-permalinks' ) . "</strong>\n" . $content .
				 ( isset( $view_post ) ? "<span id='view-post-btn'><a href='$permalink' class='button button-small' target='_blank'>$view_post</a></span>\n" : "" );
	}

	/**
	 * Per-post options (Wordpress < 2.9)
	 */
	public function custom_permalinks_post_options() {
		global $post;
		$post_id = $post;
		if ( is_object( $post_id ) ) {
			$post_id = $post_id->ID;
		}

		$permalink = get_post_meta( $post_id, 'custom_permalink', true );
		?>
		<div class="postbox closed">
				<h3><?php _e( 'Custom Permalink', 'custom-permalinks' ) ?></h3>
				<div class="inside">
					<?php
						require_once( CUSTOM_PERMALINKS_PATH . 'frontend/class-custom-permalinks-frontend.php' );
						$custom_permalinks_frontend = new Custom_Permalinks_Frontend();
						$custom_permalinks_frontend->custom_permalinks_get_form( $permalink, $custom_permalinks_frontend->custom_permalinks_original_post_link( $post_id ) ); 
					?>
				</div>
		</div>
		<?php
	}

	/**
	 * Per-page options (Wordpress < 2.9)
	 */
	public function custom_permalinks_page_options() {
		global $post;
		$post_id = $post;
		if (is_object( $post_id ) ) {
			$post_id = $post_id->ID;
		}

		$permalink = get_post_meta( $post_id, 'custom_permalink', true );

		?>
		<div class="postbox closed">
				<h3><?php _e( 'Custom Permalink', 'custom-permalinks' ); ?></h3>
				<div class="inside">
				<?php
					require_once( CUSTOM_PERMALINKS_PATH . 'frontend/class-custom-permalinks-frontend.php' );
					$custom_permalinks_frontend = new Custom_Permalinks_Frontend();
					$page_permalink = $custom_permalinks_frontend->custom_permalinks_original_page_link( $post_id );
					$this->custom_permalinks_get_form( $permalink, $page_permalink );
				?>
				</div>
		</div>
		<?php
	}

	/**
	 * Per-category/tag options
	 */
	public function custom_permalinks_term_options( $object ) {
		if ( is_object( $object ) && isset( $object->term_id ) ) {
			require_once( CUSTOM_PERMALINKS_PATH . 'frontend/class-custom-permalinks-frontend.php' );
			$custom_permalinks_frontend = new Custom_Permalinks_Frontend();
			$permalink = $custom_permalinks_frontend->custom_permalinks_permalink_for_term( $object->term_id );

			if ( $object->term_id ) {				
				if ( $object->taxonomy == 'post_tag' ) {
					$originalPermalink = $custom_permalinks_frontend->custom_permalinks_original_tag_link( $object->term_id );
				} else {
					$originalPermalink = $custom_permalinks_frontend->custom_permalinks_original_category_link( $object->term_id );
				}
			}

			$this->custom_permalinks_get_form( $permalink, $originalPermalink );
		} else {
			$this->custom_permalinks_get_form( '' );
		}

		// Move the save button to above this form
		wp_enqueue_script( 'jquery' );
		?>
		<script type="text/javascript">
		jQuery(document).ready(function() {
				var button = jQuery('#custom_permalink_form').parent().find('.submit');
				button.remove().insertAfter(jQuery('#custom_permalink_form'));
		});
		</script>
		<?php
	}

	/**
	 * Helper function to render form
	 */
	private function custom_permalinks_get_form( $permalink, $original = "", $renderContainers = true, $postname = "" ) {
		?>
		<input value="true" type="hidden" name="custom_permalinks_edit" />
		<input value="<?php echo home_url(); ?>" type="hidden" name="custom_permalinks_home_url" id="custom_permalinks_home_url" />
		<input value="<?php echo htmlspecialchars( urldecode( $permalink ) ); ?>" type="hidden" name="custom_permalink" id="custom_permalink" />

		<?php 
		if ( $renderContainers ) :
		?>
		<table class="form-table" id="custom_permalink_form">
		<tr>
				<th scope="row"><?php _e( 'Custom Permalink', 'custom-permalinks' ); ?></th>
				<td>
		<?php 
		endif;
		if ( $permalink == '' ) {
			$original = $this->custom_permalinks_check_conflicts( $original );
		}
		$post_slug = htmlspecialchars( $permalink ? urldecode( $permalink ) : urldecode( $original ) );
		$original_encoded_url = htmlspecialchars( urldecode( $original ) );
		wp_enqueue_script( 'custom-permalinks-form', plugins_url( '/js/script-form.min.js', __FILE__ ), array(), false, true );
		$postname_html = '';
		if ( isset( $postname ) && $postname != "" ) {
			$postname_html = '<input type="hidden" id="new-post-slug" class="text" value="' . $postname . '" />';
		}
		
		echo home_url() . '/<span id="editable-post-name" title="Click to edit this part of the permalink">' . $postname_html;

		?>
		<input type="text" id="custom-permalinks-post-slug" class="text" value="<?php echo $post_slug; ?>"
		style="width: 250px; <?php if ( !$permalink ) echo 'color: #ddd'; ?>"
		onfocus="if ( this.style.color = '#ddd' ) { this.style.color = '#000'; }"
		onblur="document.getElementById('custom_permalink').value = this.value; if ( this.value == '' || this.value == '<?php echo $original_encoded_url;  ?>' ) { this.value = '<?php echo $original_encoded_url; ?>'; this.style.color = '#ddd'; }" />
		</span>

		<?php if ( $renderContainers ) : ?>
		<br />
		<small><?php _e( 'Leave blank to disable', 'custom-permalinks' ); ?></small>
		</td>
		</tr>
		</table>
		<?php
		endif;
	}

	/**
	 * Save per-tag options
	 */
	public function custom_permalinks_save_tag( $id ) {
		if ( ! isset( $_REQUEST['custom_permalinks_edit'] )
			|| isset( $_REQUEST['post_ID'] ) ) {
			return;
		}
		$newPermalink = ltrim( stripcslashes( $_REQUEST['custom_permalink'] ), "/" );

		require_once( CUSTOM_PERMALINKS_PATH . 'frontend/class-custom-permalinks-frontend.php' );
		$custom_permalinks_frontend = new Custom_Permalinks_Frontend();
		if ( $newPermalink == $custom_permalinks_frontend->custom_permalinks_original_tag_link( $id ) ) {
			return;
		}

		$term = get_term( $id, 'post_tag' );
		$this->custom_permalinks_save_term( $term, str_replace( '%2F', '/', urlencode( $newPermalink ) ) );
	}

	/**
	 * Save per-category options
	 */
	public function custom_permalinks_save_category( $id ) {
		if ( ! isset( $_REQUEST['custom_permalinks_edit'] )
			|| isset( $_REQUEST['post_ID'] ) ) {
			return;
		}
		$newPermalink = ltrim( stripcslashes( $_REQUEST['custom_permalink'] ), "/" );

		require_once( CUSTOM_PERMALINKS_PATH . 'frontend/class-custom-permalinks-frontend.php' );
		$custom_permalinks_frontend = new Custom_Permalinks_Frontend();
		if ( $newPermalink == $custom_permalinks_frontend->custom_permalinks_original_category_link( $id ) ) {
			return;
		}

		$term = get_term( $id, 'category' );
		$this->custom_permalinks_save_term( $term, str_replace( '%2F', '/', urlencode( $newPermalink ) ) );
	}

	/**
	 * Save term (common to tags and categories)
	 */
	public function custom_permalinks_save_term( $term, $permalink ) {

		$this->custom_permalinks_delete_term( $term->term_id );
		$table = get_option( 'custom_permalink_table' );
		if ( $permalink ) {
			$table[$permalink] = array(
				'id' => $term->term_id,
				'kind' => ( $term->taxonomy == 'category' ? 'category' : 'tag' ),
				'slug' => $term->slug
			);
		}

		update_option( 'custom_permalink_table', $table );
	}

	/**
	 * Delete term
	 */
	public function custom_permalinks_delete_term( $id ) {
		$table = get_option( 'custom_permalink_table' );
		if ( $table ) {
			foreach ( $table as $link => $info ) {
				if ( $info['id'] == $id ) {
					unset( $table[$link] );
					break;
				}
			}
		}
		update_option( 'custom_permalink_table', $table );
	}

	/**
	 * Check Conflicts and resolve it (e.g: Polylang)
	 */
	public function custom_permalinks_check_conflicts( $requested_url = '' ) {
		if ( $requested_url == '' ) {
			return;
		}

		// Check if the Polylang Plugin is installed so, make changes in the URL
		if ( defined( 'POLYLANG_VERSION' ) ) {
			$polylang_config = get_option( 'polylang' );
			if ( $polylang_config['force_lang'] == 1 ) {

				if ( strpos( $requested_url, 'language/' ) !== false ) {
					$requested_url = str_replace( "language/", "", $requested_url );
				}

				$remove_lang = ltrim( strstr( $requested_url, '/' ), '/' );
				if ( $remove_lang != '' ) {
					return $remove_lang;
				}
			}
		}
		return $requested_url;
	}

}
