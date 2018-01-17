<?php get_header(); global $post, $gp_settings, $dirname; ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


	<!-- BEGIN CONTENT -->
	
	<div id="content">


		<!-- BEGIN IMAGE -->

		<?php if(has_post_thumbnail() && $gp_settings['image_wrap'] == "Disable" && $gp_settings['show_image'] == "Show") { ?>
			<div class="post-thumbnail single-thumbnail">
				<?php $image = aq_resize(wp_get_attachment_url(get_post_thumbnail_id(get_the_id())),  $gp_settings['image_width'], $gp_settings['image_height'], $gp_settings['hard_crop'], false, true); ?>
				<?php if(get_option($dirname.'_retina') == "0") { $retina = aq_resize(wp_get_attachment_url(get_post_thumbnail_id(get_the_id())),  $gp_settings['image_width']*2, $gp_settings['image_height']*2, $gp_settings['hard_crop'], false, true); } else { $retina = ""; } ?>
				<img src="<?php echo $image[0]; ?>" data-rel="<?php echo $retina[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php if(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)) { echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); } else { echo get_the_title(); } ?>" class="wp-post-image" />				
			</div>
		<?php } ?>
		
		<!-- END IMAGE -->
		
		
		<!-- BEGIN PADDER -->
							
		<div class="padder<?php if(has_post_thumbnail() && $gp_settings['image_wrap'] == "Disable" && $gp_settings['show_image'] == "Show") { ?> content-post-thumbnail<?php } ?>">


			<!-- BEGIN TITLE -->

			<?php if($gp_settings['title'] == "Show") { ?><h1 class="page-title"><?php the_title(); ?></h1><?php } ?>
			
			<!-- END TITLE -->


			<!-- BEGIN POST META -->	

			<?php if($gp_settings['meta_date'] == "0" OR $gp_settings['meta_author'] == "0" OR $gp_settings['meta_cats'] == "0" OR $gp_settings['meta_comments'] == "0") { ?>
				
				<div class="post-meta">
					
					<?php if($gp_settings['meta_author'] == "0") { ?><span><i class="icon-user"></i><?php the_author_posts_link(); ?></span><?php } ?>
					
					<?php if($gp_settings['meta_date'] == "0") { ?><span><i class="icon-calendar"></i><?php the_time(get_option('date_format')); ?></span><?php } ?>
					
					<?php if($gp_settings['meta_cats'] == "0" && $post->post_type == "post") { ?><span><i class="icon-folder-open"></i><?php the_category(', '); ?></span><?php } ?>
					
					<?php if($gp_settings['meta_comments'] == "0" && comments_open()) { ?><span><i class="icon-comments"></i><?php comments_popup_link(__('0', 'gp_lang'), __('1', 'gp_lang'), __('%', 'gp_lang'), 'comments-link', ''); ?></span><?php } ?>
					
				</div>
				
			<?php } ?>
			
			<!-- END POST META -->
			
			
			<!-- BEGIN POST CONTENT -->
				
			<?php if($post->post_content) { ?>	
			
				<div id="post-content">
				
				
					<!-- BEGIN IMAGE -->
			
					<?php if(has_post_thumbnail() && $gp_settings['image_wrap'] == "Enable" && $gp_settings['show_image'] == "Show") { ?>
						<div class="post-thumbnail wrap">
							<?php $image = aq_resize(wp_get_attachment_url(get_post_thumbnail_id(get_the_id())),  $gp_settings['image_width'], $gp_settings['image_height'], $gp_settings['hard_crop'], false, true); ?>
							<?php if(get_option($dirname.'_retina') == "0") { $retina = aq_resize(wp_get_attachment_url(get_post_thumbnail_id(get_the_id())),  $gp_settings['image_width']*2, $gp_settings['image_height']*2, $gp_settings['hard_crop'], false, true); } else { $retina = ""; } ?>
							<img src="<?php echo $image[0]; ?>" data-rel="<?php echo $retina[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php if(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)) { echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); } else { echo get_the_title(); } ?>" class="wp-post-image" />			
						</div>
					<?php } ?>
					
					<!-- END IMAGE -->

						
					<?php the_content(__('Read More &raquo;', 'gp_lang')); ?>
					
				</div>
				
			<?php } else { ?>
			
				<?PHP the_content(__('Read More &raquo;', 'gp_lang')); ?>
				
			<?php } ?>
			
			<!-- END POST CONTENT -->
						
			
			<!-- BEGIN POST NAV -->
						
			<?php wp_link_pages('before=<div class="clear"></div><div class="wp-pagenavi post-navi">&pagelink=<span>%</span>&after=</div>'); ?>		
			
			<!-- END POST NAV -->
	
	
			<!-- BEGIN POST TAGS -->
			
			<?php if($gp_settings['meta_tags'] == "0") { ?><?php the_tags('<div class="post-meta post-tags"><span><i class="icon-tags"></i>', ', ', '</span></div>'); ?><?php } ?>
			
			<!-- END POST TAGS -->
			
			
			<!-- BEGIN AUHTOR INFO PANEL -->
			
			<?php if($gp_settings['author_info'] == "0") { ?><?php echo do_shortcode('[author]'); ?><?php } ?>
			
			<!-- END AUTHOR INFO PANEL -->
			
			
			<!-- BEGIN RELATED ITEMS -->
			
			<?php if($gp_settings['related_items'] == "0") { ?>				
				<?php echo do_shortcode('[related_posts id="" cats="" images="true" image_width="'.$gp_settings['related_image_width'].'" image_height="'.$gp_settings['related_image_height'].'" image_wrap="false" cols="4" per_page="4" link="both" orderby="random" order="desc" offset="0" content_display="excerpt" excerpt_length="0" title="true" title_size="12" meta="false" read_more="false" pagination="false" spacing="spacing-small" preload="false"]'); ?>			
			<?php } ?>		
			
			<!-- END RELATED ITEMS -->			
			
			
			<!-- BEGIN COMMENTS -->
			
			<?php comments_template(); ?>
			
			<!-- END COMMENTS -->
			
		
		</div>
		
		<!-- END PADDER -->
			
			
	</div>
	
	<!-- END CONTENT -->
	

<?php endwhile; endif; ?>


<?php get_footer(); ?>