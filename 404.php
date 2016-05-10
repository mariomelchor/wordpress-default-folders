<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dhali
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<div class="row">
			<main id="main" class="site-main col-sm-12" role="main">

				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title text-uppercase"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'dhali' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">

						<div class="well form-inline">
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
											'before_title'	=> "<div class='panel-heading'><h2 class='widget-title text-uppercase panel-title'>",
											'after_title'		=> "</h2></div>",
											'before_widget' => "<div class='panel panel-default'><div class='panel-body'>",
											'after_widget'	=> "</div></div>"
									));
								?>
							</div><!-- .col -->

							<div class="col-sm-6">
								<div class="widget widget_categories">
									<div class='panel panel-default'>
										<div class='panel-body'>
											<div class='panel-heading'>
												<h2 class="widget-title text-uppercase panel-title"><?php esc_html_e( 'Most Used Categories', 'dhali' ); ?></h2>
											</div>
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
								<div class="widget widget_categories">
									<div class='panel panel-default'>
										<div class='panel-body'>
											<div class='panel-heading'><h2 class="widget-title text-uppercase panel-title"><?php esc_html_e( 'Most Used Categories', 'dhali' ); ?></h2></div>
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

							<div class="col-sm-6">
								<?php
									the_widget( 'WP_Widget_Tag_Cloud',
										array(
											'title'					=> "Tags Used"
										),
										array(
											'before_title'	=> "<div class='panel-heading'><h2 class='widget-title text-uppercase panel-title'>",
											'after_title'		=> "</h2></div>",
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
		</div><!-- .row -->
	</div><!-- #primary -->

<?php get_footer();
