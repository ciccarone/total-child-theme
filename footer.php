<?php
/**
 * The template for displaying the footer.
 *
 * @package TotalTheme
 * @subpackage Templates
 * @version 5.0
 */

defined( 'ABSPATH' ) || exit;

?>

			<?php // wpex_hook_main_bottom(); ?>

		</main>

		<?php // wpex_hook_main_after(); ?>

		<?php // wpex_hook_wrap_bottom(); ?>
    <?php if (get_field('show_footer_cta')): ?>
      <div class="vc_section full full--bg full--blue cta"><div class="vc_row wpb_row vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-3/5"><div class="vc_column-inner"><div class="wpb_wrapper">
        <div class="wpb_text_column wpb_content_element ">
          <div class="wpb_wrapper">
            <p style="text-align: center; margin-top: 0;">Cruise Often, Cruise Fun, Cruise Safe.<br />Subscribe for boating stories, tips & reviews.</p>

          </div>
        </div>
      </div></div></div><div class="wpb_column vc_column_container vc_col-sm-2/5"><div class="vc_column-inner"><div class="wpb_wrapper">
        <div class="wpb_text_column wpb_content_element ">
          <div class="wpb_wrapper">
            <p><a class="button button--blue" href="/subscribe">Subscribe</a></p>

          </div>
        </div>
      </div></div></div></div></div>
    <?php endif; ?>

    <div class="new-footer">
      <div class="inner">
        <div class="new-footer__menu">
          <?php
          wp_nav_menu( array(
              'theme_location' => 'footer_menu',
              'container_class' => 'custom-menu-class' ) );
          ?>
        </div>
        <div class="new-footer__logo">
          <img src="/wp-content/uploads/2021/04/cruising-calypso-brand.png" alt="">
        </div>
        <div class="new-footer__social">
          <a href="#">
            <img src="/wp-content/uploads/2021/04/fb.png" alt="">
          </a>
          <a href="#">
            <img src="/wp-content/uploads/2021/04/ig.png" alt="">
          </a>
          <a href="#">
            <img src="/wp-content/uploads/2021/04/yt.png" alt="">
          </a>
        </div>
        <div class="new-footer__copyright">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        </div>
      </div>
    </div>
	</div>

	<?php wpex_hook_wrap_after(); ?>

</div>

<?php wpex_outer_wrap_after(); ?>

<?php wp_footer(); ?>

</body>
</html>
