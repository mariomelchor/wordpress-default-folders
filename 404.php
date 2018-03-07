<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dhali
 */

get_header(); ?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main col-sm-12" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'dhali' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<div class="well">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'dhali' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .well -->

					<div class="row">
						<?php
							the_widget( 'WP_Widget_Recent_Posts',
								array(
									'number' => 5,
								),
								array(
									'before_title'  => "<div class='panel-heading'><h3 class='panel-title text-uppercase'>",
									'after_title'   => "</h3></div><div class='panel-body'>",
									'before_widget' => "<div class='col-sm-6'><div class='panel panel-default'>",
									'after_widget'  => "</div></div></div>"
							));
						?>

						<?php
							the_widget( 'WP_Widget_Categories',
								array(
									'count' => 1,
								),
								array(
									'before_title'  => "<div class='panel-heading'><h3 class='panel-title text-uppercase'>",
									'after_title'   => "</h3></div><div class='panel-body'>",
									'before_widget' => "<div class='col-sm-6'><div class='panel panel-default'>",
									'after_widget'  => "</div></div></div>"
							));
						?>
        	</div><!-- .row -->

					<div class="row">
						<?php
							the_widget( 'WP_Widget_Archives',
								array(
									'count' => 1,
								),
								array(
									'before_title'  => "<div class='panel-heading'><h3 class='panel-title text-uppercase'>",
									'after_title'   => "</h3></div><div class='panel-body'>",
									'before_widget' => "<div class='col-sm-6'><div class='panel panel-default'>",
									'after_widget'  => "</div></div></div>"
							));
						?>

						<?php
							the_widget( 'WP_Widget_Tag_Cloud',
								array(
									'title' => __('Tags Used'),
								),
								array(
									'before_title'  => "<div class='panel-heading'><h3 class='widget-title text-uppercase panel-title'>",
									'after_title'   => "</h3></div><div class='panel-body'>",
									'before_widget' => "<div class='col-sm-6'><div class='panel panel-default'>",
									'after_widget'  => "</div></div></div>"
							));
						?>
					</div><!-- .row -->

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
