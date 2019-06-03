<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />

	<!-- Imported CSS -->
	<link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" type="text/css" rel="stylesheet">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header id="header">
		<div id="wrapper" class="hfeed">	
			<div id="branding">
				<a href="/"><img alt="Pantry Plus More Logo" title="Pantry Plus More" src="<?php echo get_bloginfo('template_url') ?>/images/logo.png"/></a>
				<!--  <div id="site-title">
					<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
					<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
				</div>
				<div id="site-description"><?php bloginfo( 'description' ); ?></div> -->
			</div>
			<nav id="menu">
				<!--<div id="search"><?php get_search_form(); ?></div> -->
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			</nav>
		</div>
	</header>
	<div id="container">