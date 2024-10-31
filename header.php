<!DOCTYPE html> 
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<script src="https://cdn.tailwindcss.com"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( get_theme_mod( 'theme-toggle', 'on' ) == 'on' ): ?>
	<script>
		document.body.classList.add(localStorage.getItem('theme') || 'light');
	</script>
<?php endif; ?>

<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<a class="skip-link screen-reader-text" href="#page"><?php _e( 'Skip to content', 'clearer' ); ?></a>

<div class="wrapper-outer">

	<header id="header" class="nav-menu-dropdown-left pt-10">
		<div class="top-banner absolute left-0 flex items-center justify-center w-full fixed top-0 z-10">
			<a class="text-center text-white  hover:text-white" target="_blank" href="https://guitarrarockonline.com.br/pv-c00-guitarra-rock-academy/">
				🎸 Quer se tornar um <strong>MESTRE</strong> da <strong>GUITARRA</strong>? Clique <strong>AQUI</strong> e descubra <strong>COMO</strong>! 🎸
			</a>
		</div>
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