<?php

//////////////////////////////////////// Posts ////////////////////////////////////////

function gp_posts($atts, $content = null) {
	extract(shortcode_atts(array(
		'content' => 'post',
		'cats' => '',
		'ids' => '',
		'images' => 'true',
		'image_width' => '200',
		'image_height' => '150',
		'image_wrap' => 'true',
		'hard_crop' => 'true',
		'cols' => '1',
		'per_page' => '5',
		'link' => 'both',
		'orderby' => 'date',
		'order' => 'desc',
		'offset' => '0',
		'content_display' => 'excerpt',
		'excerpt_length' => '700',
		'title' => 'true',
		'title_size' => '',
		'title_font' => '',
		'meta' => 'true',
		'meta_author' => 'true',
		'meta_date' => 'true',
		'meta_cats' => 'true',
		'meta_comments' => 'true',
		'meta_tags' => 'true',
		'read_more' => 'true',
		'pagination' => 'true',
		'preload' => 'false',
		'spacing' => 'spacing-normal',
		'header' => ''
	),$atts));


	require(gp_inc . 'options.php'); global $gp_settings, $dirname;


	// Unique Name
	
	STATIC $i = 0;
	$i++;
	$name = 'posts'.$i;


	// IDs
	
	if($ids) { 
		$ids = explode(',', $ids);
	} else {
		$ids = null;
	}
	
	
	// Title Size
	
	$title_weight = '';
	if($title_size != "") {
		if(preg_match('/^1[0-4]$/', $title_size)) {
			$title_weight = 'font-weight: bold; ';				
		}
	}
	if($title_size != "") {
		if(preg_match('/%/', $title_size) OR preg_match('/em/', $title_size) OR preg_match('/px/', $title_size)) {
			$title_size = 'font-size: '.$title_size.'; ';				
		} else {
			$title_size = 'font-size: '.$title_size.'px; ';		
		}
	} else {
		$title_size = "";
	}
	
	
	// Title Font
	
	if($title_font != "") {
		$title_font = 'font-family: '.$title_font.'; ';		
	} else {
		$title_font = "";
	}
	
	
	// Preload
	
	if($preload == "true") {
		$preload = " preload ";
	} else {
		$preload = "";
	}
	
	
	// Pagination	
	
	if (get_query_var('paged')) {
		$paged = get_query_var('paged');
	} elseif (get_query_var('page')) {
		$paged = get_query_var('page');
	} else {
		$paged = 1;
	}
	
	
	// Post Query
		
	$args=array(
	'post_type' => explode(',', $content),
	'post_status' => 'publish',
	'cat' => $cats,
	'post__in' => $ids,
	'paged' => $paged,
	'ignore_sticky_posts' => 0,
	'orderby' => $orderby,
	'order' => $order,
	'posts_per_page' => $per_page,
	'offset' => $offset
	);

	$featured_query = new wp_query($args); $counter = "";
	
	ob_start(); ?>
	
	
	<!-- BEGIN HEADER -->
	
	<?php if($header) { ?><h3 class="post-header"><?php echo $header; ?></h3><?php } ?>
	
	<!-- BEND HEADER -->
	
	
	<!-- BEGIN POST WRAPPER -->
	
	<div class="post-wrapper <?php echo $name.' '.$spacing; ?>">
	
		<?php while ($featured_query->have_posts()) : $featured_query->the_post(); $counter = $counter + 1;
		
		
		// Image Dimensions
		
		if(get_post_meta(get_the_ID(), '_'.$dirname.'_thumbnail_width', true) && get_post_meta(get_the_ID(), '_'.$dirname.'_thumbnail_width', true)) {
			$thumbnail_width = get_post_meta(get_the_ID(), '_'.$dirname.'_thumbnail_width', true);
		} else {
			$thumbnail_width = $image_width;
		}
		if(get_post_meta(get_the_ID(), '_'.$dirname.'_thumbnail_height', true) != "") {
			$thumbnail_height = get_post_meta(get_the_ID(), '_'.$dirname.'_thumbnail_height', true);
		} else {
			$thumbnail_height = $image_height;
		}
		
		
		// Columns
		
		if($counter %$cols == 1) {
			$first_column = " first-column ";
		} else {
			$first_column = "";
		}
	
		if($cols > 1) {
			$columns = " post-columns ";
		} else {
			$columns = "";
		}
		
		$col_width = (100 - (($cols -1) * 4)) / $cols;
		
		?>
	
			
			<!-- BEGIN POST -->
			
			<div <?php post_class('post-loop'.$preload.$first_column.$columns); ?> style="width: <?php echo $col_width; ?>%;">
						
				
				<!-- BEGIN IMAGE -->
				
				<?php if(has_post_thumbnail() && $images == "true") { ?>	
							
					<div class="post-thumbnail<?php if($image_wrap == "true") { ?> wrap<?php } ?>">
				
						<?php if(($link == "image" OR $link == "both") && get_post_meta(get_the_ID(), '_'.$dirname.'_link_type', true) != "None") { ?>
							<a href="<?php if(get_post_meta(get_the_ID(), '_'.$dirname.'_link_type', true) == "Lightbox Video") { ?>file=<?php echo get_post_meta(get_the_ID(), '_'.$dirname.'_custom_url', true); } elseif(get_post_meta(get_the_ID(), '_'.$dirname.'_link_type', true) == "Lightbox Image") { if(get_post_meta(get_the_ID(), '_'.$dirname.'_custom_url', true)) { echo get_post_meta(get_the_ID(), '_'.$dirname.'_custom_url', true); } else { echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); }} else { if(get_post_meta(get_the_ID(), '_'.$dirname.'_custom_url', true)) { echo get_post_meta(get_the_ID(), '_'.$dirname.'_custom_url', true); } else { the_permalink(); }} ?>"<?php if(get_post_meta(get_the_ID(), '_'.$dirname.'_link_type', true) != "Page") { ?> rel="prettyPhoto[<?php echo $name; the_ID(); ?>]"<?php } ?>>
						<?php } ?>

							<?php $image = aq_resize(wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())), $thumbnail_width, $thumbnail_height, $hard_crop, false, true); ?>
							<?php if(get_option($dirname.'_retina') == "0") { $retina = aq_resize(wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())), $thumbnail_width*2, $thumbnail_height*2, $hard_crop, false, true); } else { $retina = ""; } ?>
							<img src="<?php echo $image[0]; ?>" data-rel="<?php echo $retina[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php if(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)) { echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); } else { echo get_the_title(); } ?>" class="wp-post-image" />
						
						<?php if(($link == "image" OR $link == "both") && get_post_meta(get_the_ID(), '_'.$dirname.'_link_type', true) != "None") { ?></a><?php } ?>
						
					</div>					
									
					<?php if($image_wrap == "false") { ?><div class="clear"></div><?php } ?>
				
				<?php } ?>
				
				<!-- END IMAGE -->
				
				
				<!-- BEGIN LIGHTBOX IMAGES -->
				
				<?php if(get_post_meta(get_the_ID(), '_'.$dirname.'_link_type', true) == "Lightbox Image" OR get_post_meta(get_the_ID(), '_'.$dirname.'_link_type', true) == "Lightbox Video") { ?>
				
					<?php $args = array('post_type' => 'attachment', 'post_parent' => get_the_ID(), 'numberposts' => -1, 'orderby' => 'menu_order', 'order' => 'asc', 'post__not_in'	=> array(get_post_thumbnail_id())); $attachments = get_children($args); if($attachments) { foreach ($attachments as $attachment) { ?>
				
						<a href="<?php if(get_post_meta($attachment->ID, '_'.$dirname.'_lightbox_url', true)) { ?>file=<?php echo get_post_meta($attachment->ID, '_'.$dirname.'_lightbox_url', true); } else { echo wp_get_attachment_url($attachment->ID); } ?>" rel="prettyPhoto[<?php echo $name; the_ID(); ?>]" title="<?php echo $attachment->post_content; ?>" style="display: none;"><img src="" alt="<?php echo $attachment->post_title; ?>"></a>
				
					<?php }} ?>
				
				<?php } ?>
								
				<!-- END LIGHTBOX MIAGES -->
				
				
				<!-- BEGIN POST TEXT -->
				
				<div class="post-text">
				
				
					<!-- BEGIN TITLE -->
					
					<?php if($title == "true") { ?><h2 style="<?php echo $title_size.$title_font.$title_weight; ?>"><?php if($link == "title" OR $link == "both") { ?><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php } ?><?php the_title(); ?><?php if($link == "title" OR $link == "both") { ?></a><?php } ?></h2><?php } ?>
					
					<!-- END TITLE -->
					
					
					<!-- BEGIN POST META -->
	
					<?php if($meta == "true" && ($meta_date == "true" OR $meta_author == "true" OR $meta_cats == "true" OR $meta_comments == "true")) { ?>
						
						<div class="post-meta">
						
							<?php if($meta_author == "true") { ?><span><i class="icon-user"></i><?php the_author_posts_link(); ?></span><?php } ?>
							
							<?php if($meta_date == "true") { ?><span><i class="icon-calendar"></i><?php the_time(get_option('date_format')); ?></span><?php } ?>
							
							<?php if($meta_cats == "true") { ?><span><i class="icon-folder-open"></i><?php the_category(', '); ?></span><?php } ?>
							
							<?php if($meta_comments == "true" && comments_open()) { ?><span><i class="icon-comments"></i><?php comments_popup_link(__('0', 'gp_lang'), __('1', 'gp_lang'), __('%', 'gp_lang'), 'comments-link', ''); ?></span><?php } ?>
						
						</div>
					
					<?php } ?>
					
					<!-- END POST META -->
					
					
					<!-- BEGIN POST CONTENT -->
					
					<?php if($content_display == "full") { ?>
						
						<?php global $more; $more = 0; the_content('&raquo;'); ?>
					
					<?php } else { ?>
						
						<?php if($excerpt_length != "0") { ?><p><?php echo excerpt($excerpt_length); ?><?php if($read_more == "true") { ?> <a href="<?php the_permalink(); ?>" class="read-more" title="<?php the_title(); ?>"> &raquo;</a><?php } ?></p><?php } ?>
					
					<?php } ?>
					
					<!-- END POST CONTENT -->
					
					
					<!-- BEGIN POST TAGS -->
					
					<?php if($meta == "true" && $meta_tags == "true") { ?>
						<?php the_tags('<div class="post-meta post-tags"><span><i class="icon-tags"></i>', ', ', '</span></div>'); ?>
					<?php } ?>
					
					<!-- END POST TAGS -->
					
					
					<!-- END POST CONTENT -->
					
					
				</div>
				
				<!-- END POST TEXT -->
				
	
			</div>
			
			<!-- END POST -->
			
				
			<?php if($cols > 1 && $counter %$cols == 0) { ?><div class="clear"></div><?php } ?>
			
			
		<?php endwhile; ?>
		
		
		<?php if($pagination == "true") { ?>
			<?php gp_pagination($featured_query->max_num_pages); ?>
			<div class="clear"></div>
		<?php } ?>
		

	</div>
	
	<!-- END POST WRAPPER -->
	

<?php
	
	$output_string = ob_get_contents();
	ob_end_clean(); 
	
	wp_reset_query();
	
	return $output_string;

}

add_shortcode("posts", "gp_posts");

?>