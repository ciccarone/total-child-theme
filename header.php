<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package TotalTheme
 * @subpackage Templates
 * @version 5.0
 */

defined( 'ABSPATH' ) || exit;

?><!doctype html>
<html <?php language_attributes(); ?><?php wpex_schema_markup( 'html' ); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<?php wpex_hook_after_body_tag(); // Added before wp_body_open was introduced ?>

	<?php wpex_outer_wrap_before(); ?>

	<div id="outer-wrap" class="wpex-clr">

		<?php wpex_hook_wrap_before(); ?>

		<div id="wrap" class="wpex-clr">

			<?php wpex_hook_wrap_top(); ?>
      <?php
        $hero_image = get_the_post_thumbnail_url();
        if (is_home()) {
          $hero_image = '/wp-content/uploads/2021/04/Maine-Light-house-resize.png';
        } elseif (is_product_category()) {
					$hero_image = '/wp-content/uploads/2021/04/Floating-dock-resize.png';
				} elseif (is_product()) {
					$hero_image = '/wp-content/uploads/2021/04/Floating-dock-resize.png';
				}
      ?>
      <?php if (!is_front_page()): ?>
				<?php
					if (is_product_category()) {
						$title = single_cat_title("", false);
					} elseif(is_product()) {
						$title = "Shop";
					} else {
						$title = get_the_title();
					}

				?>
        <div class="hero" style="background-image: url('<?php echo $hero_image ?>')">
          <div class="hero__inner">
            <h2><?php echo $title ?></h2>
          </div>

        </div>
      <?php endif; ?>

			<?php wpex_hook_main_before(); ?>

			<main id="main" class="site-main wpex-clr"<?php wpex_schema_markup( 'main' ); ?><?php wpex_aria_landmark( 'main' ); ?>>

				<?php wpex_hook_main_top(); ?>
