<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mekanews_Lite
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<style>

:root { font-size: 14px; }
@media (min-width: 350px) { :root { font-size: 16px; } }
@media (min-width: 640px) { :root { font-size: 18px; } }
@media (min-width: 1440px) { :root { font-size: 20px; } }

section {
position: relative;
z-index: 1;
width: 18.5rem;
}

.links {
line-height: 1.125rem;
}

.links {
display: flex;
justify-content: space-between;
width: 100%;
height: auto;
}

.link {
display: flex;
align-items: center;
justify-content: center;
flex-direction: column;
width: 8.75rem;
height: 3.5rem;
border: 1px solid #3A5685;
border-radius: 2px;
color: white;
text-decoration: none;
text-align: center;
transition: border-color .100s ease, background-color .100s ease;
}

.link:hover {
border-color: #647899;
background: rgba(255,255,255,.06);
}

.link.primary {
border: none;
background-image: linear-gradient(-180deg, #2796F8 0%, #206EFF 100%);
}

.link.primary:hover {
border: none;
background: linear-gradient(-180deg, #4DA7F7 0%, #3577F3 100%);
}

.small {
font-size: .75rem;
}



body:not(.iOS) #lines * {
mix-blend-mode: lighten;
}

#fills * {
opacity: 0;
mix-blend-mode: lighten;
}

#line-i-1 {
transform-origin: 30em 8em;
}

.fireworks {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
cursor: pointer;
}

footer {
opacity: 0;
color: #96A9C3;
}

footer a {
color: #96A9C3;
text-decoration: none;
}

footer a:hover {
color: #FFF;
text-decoration: underline;
}

</style>
<body <?php body_class(); ?>>
<canvas class="fireworks"></canvas>

<script src="http://www.geroro.com/wp-content/themes/mekanews-lite/js/anime.js"></script>
<script>
var iOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);
var ff = navigator.userAgent.indexOf('Firefox') > 0;
var tap = ('ontouchstart' in window || navigator.msMaxTouchPoints) ? 'touchstart' : 'mousedown';
if (iOS) document.body.classList.add('iOS');

var fireworks = (function() {

  var getFontSize = function() {
	return parseFloat(getComputedStyle(document.documentElement).fontSize);
  }

  var canvas = document.querySelector('.fireworks');
  var ctx = canvas.getContext('2d');
  var numberOfParticules = 24;
  var distance = 200;
  var x = 0;
  var y = 0;
  var animations = [];

  var setCanvasSize = function() {
	canvas.width = window.innerWidth;
	canvas.height = window.innerHeight;
  }

  var updateCoords = function(e) {
	x = e.clientX || e.touches[0].clientX;
	y = e.clientY || e.touches[0].clientY;
  }

  var colors = ['#FF324A', '#31FFA6', '#206EFF', '#FFFF99'];

  var createCircle = function(x,y) {
	var p = {};
	p.x = x;
	p.y = y;
	p.color = colors[anime.random(0, colors.length - 1)];
	p.color = '#FFF';
	p.radius = 0;
	p.alpha = 1;
	p.lineWidth = 6;
	p.draw = function() {
	  ctx.globalAlpha = p.alpha;
	  ctx.beginPath();
	  ctx.arc(p.x, p.y, p.radius, 0, 2 * Math.PI, true);
	  ctx.lineWidth = p.lineWidth;
	  ctx.strokeStyle = p.color;
	  ctx.stroke();
	  ctx.globalAlpha = 1;
	}
	return p;
  }

  var createParticule = function(x,y) {
	var p = {};
	p.x = x;
	p.y = y;
	p.color = colors[anime.random(0, colors.length - 1)];
	p.radius = anime.random(getFontSize(), getFontSize() * 2);
	p.draw = function() {
	  ctx.beginPath();
	  ctx.arc(p.x, p.y, p.radius, 0, 2 * Math.PI, true);
	  ctx.fillStyle = p.color;
	  ctx.fill();
	}
	return p;
  }

  var createParticles = function(x,y) {
	var particules = [];
	for (var i = 0; i < numberOfParticules; i++) {
	  var p = createParticule(x, y);
	  particules.push(p);
	}
	return particules;
  }

  var removeAnimation = function(animation) {
	var index = animations.indexOf(animation);
	if (index > -1) animations.splice(index, 1);
  }

  var animateParticules = function(x, y) {
	setCanvasSize();
	var particules = createParticles(x, y);
	var circle = createCircle(x, y);
	var particulesAnimation = anime({
	  targets: particules,
	  x: function(p) { return p.x + anime.random(-distance, distance); },
	  y: function(p) { return p.y + anime.random(-distance, distance); },
	  radius: 0,
	  duration: function() { return anime.random(1200, 1800); },
	  easing: 'easeOutExpo',
	  complete: removeAnimation
	});
	var circleAnimation = anime({
	  targets: circle,
	  radius: function() { return anime.random(getFontSize() * 8.75, getFontSize() * 11.25); },
	  lineWidth: 0,
	  alpha: {
		value: 0,
		easing: 'linear',
		duration: function() { return anime.random(400, 600); }
	  },
	  duration: function() { return anime.random(1200, 1800); },
	  easing: 'easeOutExpo',
	  complete: removeAnimation
	});
	animations.push(particulesAnimation);
	animations.push(circleAnimation);
  }

  var mainLoop = anime({
	duration: Infinity,
	update: function() {
	  ctx.clearRect(0, 0, canvas.width, canvas.height);
	  animations.forEach(function(anim) {
		anim.animatables.forEach(function(animatable) {
		  animatable.target.draw();
		});
	  });
	}
  });

  document.addEventListener(tap, function(e) {
	updateCoords(e);
	animateParticules(x, y);
	ga('send', 'event', 'Fireworks', 'Click');
  }, false);

  window.addEventListener('resize', setCanvasSize, false);

  return {
	boom: animateParticules
  }

})();

</script>
<div id="page" class="site-container">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'mekanews-lite' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<?php if ( has_nav_menu( 'top-menu' ) || has_nav_menu( 'social-menu' ) ) : ?>			
				<div class="top-bar">
					<div class="inner clearfix">
						<div class="left-top-nav primary-navigation">
							<?php if ( has_nav_menu( 'top-menu' ) ) : ?>
															
								<?php wp_nav_menu( array( 
										'theme_location' => 'top-menu',
										'menu_id' => 'top-menu',
										'menu_class' => 'top-menu',
										'container'      => ''								
									 ) ); ?>

								<?php endif; ?>

						</div><!-- primary-navigation -->
						<div class="top-nav-right">
							<div class="top-search">
							 	<a id="trigger-overlay">
							 		<i class="fa fa-search"></i>
							 	</a>
							 	<div class="overlay overlay-slideleft">
							 		<div class="search-row">
							 			<a ahref="#" class="overlay-close"><i class="fa fa-times"></i></a>
										<form method="get" id="searchform" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" _lpchecked="1">
										<input type="text" name="s" id="s" value="<?php echo get_search_query(); ?>" placeholder="<?php esc_html_e('Search ...', 'mekanews-lite'); ?>" />
										</form>
							 		</div>							 		
							 	</div>
							</div><!-- .top-search -->							

						</div><!-- .top-nav-left -->						

					</div><!-- inner -->
				</div><!-- top-bar -->
		<?php endif; ?>

		<div class="site-branding">
			<div class="inner clearfix">				
				<?php mekanews_lite_header_title() ?>
				<?php //mekanews_lite_ads_header() ?>
				<?php if ( is_active_sidebar( 'header-widget' ) ) : ?>
					<div class="ads-728x90 ads-top">
						<?php dynamic_sidebar( 'header-widget' ); ?>
					</div>
				<?php endif; ?>
						
			</div><!-- inner -->
		</div><!-- site-branding -->
		
		<?php if( has_nav_menu('primary'))  : ?>
			
				<div class="menu-container">
					<div class="inner clearfix">
						<nav id="site-navigation" class="secondary-navigation" role="navigation">
							<span class="mobile-only mobile-menu menu-toggle" aria-controls="menu-main-menu" aria-expanded="false">Menu</span>
						
							<?php wp_nav_menu( array( 
											'theme_location' => 'primary',
											'menu_id' => 'menu-main-menu',
											'container'      => '',
											

							) ); ?>
							
						</nav><!-- #site-navigation -->						
					</div><!-- inner -->
				</div>
				<div id="catcher"></div>
		<?php endif; ?>				
		

	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="inner clearfix">
