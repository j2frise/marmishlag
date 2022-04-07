<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Marmislag
 * @since Marmishlag 1.0
 */

$menuLocations = get_nav_menu_locations();
$footerNav = wp_get_nav_menu_items($menuLocations['footer']); 
$linkNav = wp_get_nav_menu_items($menuLocations['social_link']); 


?>
	<footer class="padding-top-100px padding-bottom-70px background-dark">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-12 sm-mb-30px">
					<div class="logo margin-bottom-10px"><img src="<?=get_theme_mod( 'footer_logo' )?>" width="150" alt=""></div>
					<div class="text-grey-2  font-weight-300">
                        Ceci est un projet scolaire worpress à caractère gratuit. Aucun copyright n'est disponible.
                    </div>
					<ul class="list-inline text-left margin-tb-20px margin-lr-0px text-white">
                        <?php foreach ($linkNav as $item) : ?>
						    <li class="list-inline-item"><a class="twitter" href="<?=$item->title?>" target="_blank"><i class="fab fa-<?=$item->title?>"></i></a></li>
                        <?php endforeach; ?>
					</ul>
					<!-- // Social -->
				</div>

				<div class="col-lg-9  col-md-9 col-12 sm-mb-30px">
					<ul class="footer-menu-2 row margin-0px padding-0px list-unstyled">
                        <?php foreach ($footerNav as $item) : ?>
						    <li class="col-3  padding-tb-5px"><a href="<?=$item->url?>" class="text-grey-2"><?=$item->title?></a></li>
                        <?php endforeach; ?>
					</ul>
				</div>

			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>

</body>
</html>
