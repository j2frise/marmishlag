<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Marmislag
 * @since Marmishlag 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="keywords" content="recettes de cuisine, recettes , cuisine française, cuisine africaine">
	<meta name="description" content="Notez de la bonne cuisine - Template worpress pour la notation de cuisine">
	<link rel="profile" href="https://gmpg.org/xfn/11" />
    <!-- Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800%7CPoppins:100,200,300i,300,400,700,400i,500%7CDancing+Script:700" rel="stylesheet">
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<?php 
		$currentPage = get_query_var('pagename');
		$logo = get_theme_mod( 'custom_logo' );
		$logo_data = wp_get_attachment_image_src( $logo , 'full' );
		$logo_url = $logo_data[0];
		$icon = get_site_icon_url();

		$menuLocations = get_nav_menu_locations();
		$primary_menu = wp_get_nav_menu_items($menuLocations['primary']); 
	?>
	<header class="background-main-color">
		<div class="container">
			<div class="header-output">
				<div class="header-in">

					<div class="row">
						<div class="col-lg-2 col-md-12">
							<a id="logo" href="<?=home_url()?>" class="d-inline-block margin-tb-5px"><img src="<?=$logo_url?>" alt=""></a>
							<a class="mobile-toggle padding-13px background-main-color" href="#"><i class="fas fa-bars"></i></a>
						</div>
						<div class="col-lg-8 col-md-12 position-inherit">
							<ul id="menu-main" class="white-link dropdown-dark text-lg-center nav-menu link-padding-tb-17px">
							<?php foreach($primary_menu as $item): ?>
								<li><a href="<?=$item->url?>"><?=$item->title?></a></li>
							<?php endforeach; ?>
							</ul>
						</div>
						<div class="col-lg-2 col-md-12 d-none d-lg-block">
							<hr class="margin-bottom-0px d-block d-sm-none">
							<a href="<?=get_site_url().'/login'?>" class="text-white ba-2 box-shadow float-right padding-lr-23px padding-tb-15px text-extra-large"><i class="fas fa-plus"></i></a>
							<a href="<?=get_site_url().'/login'?>" class="text-white ba-1 box-shadow float-right padding-lr-23px padding-tb-15px text-extra-large"><i class="far fa-user"></i></a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</header>
	<!-- // Header  -->
	 