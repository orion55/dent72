<?php
/**
 * The base template for displaying 404 pages (not found).
 *
 * @package Dentalcare
 */
?>
<?php get_header( dentalcare_template_base() ); ?>

	<?php dentalcare_site_breadcrumbs(); ?>

	<div <?php dentalcare_content_wrap_class(); ?>>

		<div class="row">

			<div id="primary" <?php dentalcare_primary_content_class(); ?>>

				<main id="main" class="site-main" role="main">

					<?php include dentalcare_template_path(); ?>

				</main><!-- #main -->

			</div><!-- #primary -->

			<?php get_sidebar(); // Loads the sidebar.php. ?>

		</div><!-- .row -->

	</div><!-- .site-content_wrap -->

<?php get_footer( dentalcare_template_base() ); ?>
