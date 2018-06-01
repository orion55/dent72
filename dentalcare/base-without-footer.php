<?php
/**
 * The base template.
 *
 * @package Dentalcare
 */
?>
<?php get_header( dentalcare_template_base() ); ?>

	<?php do_action( 'dentalcare_render_widget_area', 'full-width-header-area' ); ?>

	<div <?php dentalcare_content_wrap_class(); ?>>

		<?php do_action( 'dentalcare_render_widget_area', 'before-content-area' ); ?>

		<div class="row">

			<div id="primary" <?php dentalcare_primary_content_class(); ?>>

				<?php do_action( 'dentalcare_render_widget_area', 'before-loop-area' ); ?>

				<main id="main" class="site-main" role="main">

					<?php include dentalcare_template_path(); ?>

				</main><!-- #main -->

				<?php do_action( 'dentalcare_render_widget_area', 'after-loop-area' ); ?>

			</div><!-- #primary -->

			<?php get_sidebar(); // Loads the sidebar.php. ?>

		</div><!-- .row -->

		<?php do_action( 'dentalcare_render_widget_area', 'after-content-area' ); ?>

	</div><!-- .container -->

	<?php do_action( 'dentalcare_render_widget_area', 'after-content-full-width-area' ); ?>

<?php get_footer( dentalcare_template_base() ); ?>
