<?php require(gp_inc . 'options.php'); global $gp_settings; ?>


<?php if($gp_settings['layout'] == "sb-left" OR $gp_settings['layout'] == "sb-both") { ?>

	
	<!-- BEGIN SIDEBAR -->
		
	<div id="sidebar-left" class="sidebar">
			
			
		<?php if(is_active_sidebar($gp_settings['sidebar_left'])) { ?>
	
			
			<!-- BEGIN SELECTED WIDGETS -->

			<?php dynamic_sidebar($gp_settings['sidebar_left']); ?>

			<!-- END SELECTED WIDGETS -->	
			
			
		<?php } ?>
		
		
	</div>
	
	<!-- END SIDEBAR -->
	
	
<?php } ?>	