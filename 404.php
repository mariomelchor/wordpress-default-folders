<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dhali
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page', 'feature' ); ?>

<div class="container">
	<div class="row">

	<div id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title text-uppercase"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'dhali' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<div class="well">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'dhali' ); ?></p>


						<?php get_search_form(); ?>
					</div><!-- .well -->

					<div class="row">
						<div class="col-sm-6">

								<?php
									the_widget( 'WP_Widget_Recent_Posts',
										array(
											'number' => 5,
										),
										array(
											'before_title'	=> "<h2 class='widget-title text-uppercase h5'>",
											'after_title'		=> "</h2>",
											'before_widget' => "<div class='panel panel-default'><div class='panel-body'>",
											'after_widget'	=> "</div></div>"
										)
									);

									// Only show the widget if site has multiple categories.
									if ( dhali_categorized_blog() ) :

								 ?>
						</div><!-- .col -->

						<div class="col-sm-6">
							<div class="widget widget_categories">
								<div class='panel panel-default'>
									<div class='panel-body'>
										<h2 class="widget-title text-uppercase h5"><?php esc_html_e( 'Most Used Categories', 'dhali' ); ?></h2>
										<ul>
											<?php
												wp_list_categories( array(
													'orderby'    => 'count',
													'order'      => 'DESC',
													'show_count' => 1,
													'title_li'   => '',
													'number'     => 10,
												) );
											?>
										</ul>
										</div>
									</div>
							</div><!-- .widget -->
						</div><!-- .col -->
					</div><!-- .row -->

					<div class="row">
						<div class="col-sm-6">
							<?php
								endif;

								/* translators: %1$s: smiley */
								$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'dhali' ), convert_smilies( ':)' ) ) . '</p>';

								//the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

								the_widget( 'WP_Widget_Archives',
									array(
										'count'				=> 1,
										'dropdown'		=> 1
									),
									array(
										'before_title'	=> "<h5 class='widget-title text-uppercase'>",
										'after_title'		=> "</h5>$archive_content",
										'before_widget' => "<div class='panel panel-default'><div class='panel-body'>",
										'after_widget'	=> "</div></div>"
									)
								);
							?>
						</div><!-- .col -->

						<div class="col-sm-6">
							<?php
								the_widget( 'WP_Widget_Tag_Cloud',
									array(
										'title'					=> "Tags Used"
									),
									array(
										'before_title'	=> "<h5 class='widget-title text-uppercase'>",
										'after_title'		=> "</h5>",
										'before_widget' => "<div class='panel panel-default'><div class='panel-body'>",
										'after_widget'	=> "</div></div>"
									)
								);
							?>
						</div><!-- .col -->
					</div><!-- .row -->

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer();
