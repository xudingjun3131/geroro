<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mekanews_Lite
 */

?>

		</div><!-- .inner -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="inner clearfix">
				<div class="copyright">
					<div class="copyright" style="height:32px;line-height:32px;">Copyright &copy; <?php echo  date( 'Y' ); ?> 由 Amber 强力驱动  |<a href="http://www.miitbeian.gov.cn" target="_blank">皖ICP备16001968号-2</a></div>
				</div>			
				<?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
					<?php wp_nav_menu( array( 
								'theme_location' => 'footer-menu',
								'menu_id' 		 => 'menu-footer',
								'menu_class' 	 => 'menu-footer',
								'container'      => 'div',
								'container_class' => 'footer-menu-wrapper'
							 ) ); ?>
				<?php endif; ?>
				</div>	
			</div><!-- .inner -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<script type='text/javascript' src='https://dn-staticfile.qbox.me/jquery/2.0.0/jquery.min.js'></script>
<script type="text/javascript" charset="utf-8">
	var bigfa_scroll = {
		drawCircle: function(id, percentage, color) {
			var width = jQuery(id).width();
			var height = jQuery(id).height();
			var radius = parseInt(width / 2.20);
			var position = width;
			var positionBy2 = position / 2;
			var bg = jQuery(id)[0];
			id = id.split("#");
			var ctx = bg.getContext("2d");
			var imd = null;
			var circ = Math.PI * 2;
			var quart = Math.PI / 2;
			ctx.clearRect(0, 0, width, height);
			ctx.beginPath();
			ctx.strokeStyle = color;
			ctx.lineCap = "square";
			ctx.closePath();
			ctx.fill();
			ctx.lineWidth = 3;
			imd = ctx.getImageData(0, 0, position, position);
			var draw = function(current, ctxPass) {
				ctxPass.putImageData(imd, 0, 0);
				ctxPass.beginPath();
				ctxPass.arc(positionBy2, positionBy2, radius, -(quart), ((circ) * current) - quart, false);
				ctxPass.stroke();
			}
			draw(percentage / 100, ctx);
		},
		backToTop: function($this) {
			$this.click(function() {
				jQuery("body,html").animate({
					scrollTop: 0
				},
				800);
				return false;
			});
		},
		scrollHook: function($this, color) {
			color = color ? color: "#000000";
			$this.scroll(function() {
				var docHeight = (jQuery(document).height() - jQuery(window).height()),
				$windowObj = $this,
				$per = jQuery(".per"),
				percentage = 0;
				defaultScroll = $windowObj.scrollTop();
				percentage = parseInt((defaultScroll / docHeight) * 100);
				var backToTop = jQuery("#backtoTop");
				if (backToTop.length > 0) {
					if ($windowObj.scrollTop() > 200) {
						backToTop.addClass("button--show");
					} else {
						backToTop.removeClass("button--show");
					}
					$per.attr("data-percent", percentage);
					bigfa_scroll.drawCircle("#backtoTopCanvas", percentage, color);
				}
	
			});
		}
	}
	
	jQuery(document).ready(function() {
		jQuery("body").append('<div id="backtoTop" data-action="gototop"><canvas id="backtoTopCanvas" width="48" height="48"></canvas><div class="per"></div></div>');
		var T = bigfa_scroll;
		T.backToTop(jQuery("#backtoTop"));
		T.scrollHook(jQuery(window), "#009933");
	});
</script >
<div id="backtoTop" data-action="gototop" ><canvas id="backtoTopCanvas" width="48" height="48"></canvas><div class="per" data-percent="percentage"></div></div>
<!-- <span class="back-to-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></span> -->
</body>
</html>
