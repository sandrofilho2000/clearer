<!DOCTYPE html> 
<html class="no-js" <?php language_attributes(); ?>>

<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4YKE4SJQ9P"></script>
<meta name="google-adsense-account" content="ca-pub-4746860193894843">
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-4YKE4SJQ9P');
	</script>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TRVHH9BH');</script>
<!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<script src="https://cdn.tailwindcss.com"></script>
	<meta name="google-site-verification" content="wNwL0Xvk9uYyzmWSk-Ewbx_Jt3tTEi2911JTMCF1FZs" />
	<!-- Google tag (gtag.js) -->

<?php wp_head(); ?>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRVHH9BH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php if ( get_theme_mod( 'theme-toggle', 'on' ) == 'on' ): ?>
	<script>
		document.body.classList.add(localStorage.getItem('theme') || 'light');
	</script>
<?php endif; ?>

<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<a class="skip-link screen-reader-text" href="#page"><?php _e( 'Skip to content', 'clearer' ); ?></a>

<div class="wrapper-outer">

	<header id="header" class="nav-menu-dropdown-left pt-10">
	<?php
		$args = array(
			'post_type'      => 'anuncio_topbar',
			'posts_per_page' => -1, 
		);

		$query = new WP_Query($args);

		if ($query->have_posts()) {
			echo '<div class="top-banner slick-top-banner absolute left-0 flex text-center text-white hover:text-white items-center justify-center w-full fixed top-0 z-10">';
			while ($query->have_posts()) {
				$query->the_post();

				echo the_content();

			}
			echo '</div>';
		}

		// Reset post data
		wp_reset_postdata();
		?>
		<div class="wrapper-inner group">
			<?php echo clearer_site_title(); ?>
			<?php if ( display_header_text() == true ): ?>
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			<?php endif; ?>
			
			<?php if ( has_nav_menu('header') ): ?>
				<div id="wrap-nav-header" class="wrap-nav">
					<?php \Clearer\Nav::nav_menu(array('theme_location'=>'header','menu_id' => 'nav-header','fallback_cb'=> false)); ?>
				</div>
			<?php endif; ?>
			

			
		</div>
		<?php if ( get_theme_mod( 'featured-search', 'on' ) == 'on' ): ?>
		<div id="subheader">
			<div class="wrapper-inner">
				<?php get_search_form(); ?>
			</div>
		</div>
		<?php if ( has_nav_menu('mobile') ): ?>
			<button class="menu-mobile-toggle" aria-controls="primary-menu" aria-expanded="false">
				<span class="screen-reader-text">Expand Menu</span><div class="menu-toggle-icon"><span></span><span></span><span></span></div>			
			</button>			
		<?php endif; ?>

	<?php endif; ?>
	</header><!--/#header-->
	<?php if (has_nav_menu('mobile')): ?>
		<div id="wrap-nav-mobile" class="wrap-nav">
			<?php clearer_custom_nav_menu('mobile'); ?>
		</div>
	<?php endif; ?>

	
	<?php if ( get_header_image() ) : ?>
		<div class="site-header">
			<a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
				<img class="site-image" src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
			</a>
		</div>
	<?php endif; ?>

	<div class="wrapper-inner">
	
		<?php get_template_part('inc/blog-header'); ?>
		
		<div class="main group" id="page">