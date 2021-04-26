<?php
/**
 * Page Content
 *
 * @package Total WordPress theme
 * @subpackage Partials
 * @version 5.0
 */

defined( 'ABSPATH' ) || exit;

?>

 <?php if (is_page(145)): ?>

   <?php if (!empty($_POST)): ?>
     <div <?php wpex_page_single_content_class(); ?>><?php the_content(); ?></div>

     <?php else: ?>

       <div class="single-page-content single-content entry wpex-clr"><div class="vc_row wpb_row vc_row-fluid section"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
       	<div class="wpb_text_column wpb_content_element  width--normal">
       		<div class="wpb_wrapper">
       			<h2 style="text-align: center;">Get in touch with us today</h2>
       <p style="text-align: center;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

       		</div>
       	</div>
       </div></div></div></div><div class="vc_section section section--gray"><div class="vc_row wpb_row vc_row-fluid inner"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vcex-module vcex-form-shortcode wpex-form wpex-m-auto wpex-max-w-100"><div role="form" class="wpcf7" id="wpcf7-f137-p133-o1" lang="en-US" dir="ltr">
       <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<?php echo do_shortcode('[contact-form-7 id="137" title="Gated Content"]') ?>
       </div></div></div></div></div></div></div>
       </div>

   <?php endif; ?>

<?php else: ?>
  <div <?php wpex_page_single_content_class(); ?>><?php the_content(); ?></div>

 <?php endif; ?>



<?php
// Page links (for the <!-nextpage-> tag)
wpex_get_template_part( 'link_pages' );
