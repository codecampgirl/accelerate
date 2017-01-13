<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<section id="error-page" class="content-404">
		<div class="site-content">
			<!-- <div class="main-content"> -->
				
				<header class="page-header">
					<h1 class="page-title"><?php _e( '<em>Whoops</em> ... Nothing Found Here', 'twentythirteen' ); ?></h1>
				</header>

			<!-- </div> main content -->
			
		</div>
	</section>
		
	<section>
		<div class="site-content">
			<!-- <div class="main-content"> -->
	
				<div class="page-wrapper">
					<div class="page-content">
						<h2><?php _e( 'We have been looking left and right, but could not find what you have been looking for. We promise to do better next time.', 'twentythirteen' ); ?></h2>
						<h3><?php _e( 'Please check out our <a href="http://localhost:8888/accelerate/blog/">blog</a> or some of our <a href="http://localhost:8888/accelerate/case-studies/">featured work</a>.', 'twentythirteen' ); ?></h3>
						<h2><?php _e( 'Maybe try a search?', 'twentythirteen' ); ?></h2>
						<?php get_search_form(); ?>
						
						<p>Or feel free to email us at <a href="mailto:someone@example.com" title="Email Us" >someone@example.com</a>, so we can help you find the information you were looking for.</p>
					</div><!-- .page-content -->
				</div><!-- .page-wrapper -->

			<!-- </div> main content -->
			
		</div>
		
	</section>	
				<div class="clearfix"></div>

	
	<!-- END blog page -->
<?php get_footer();
