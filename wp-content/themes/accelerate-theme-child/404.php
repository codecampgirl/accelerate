<?php
/**
 * The custom 404 page file
 *
 * @package WordPress
 * @subpackage Accelerate_Marketing
 * @since Accelerate Marketing 1.1
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
						<h2><?php _e( 'We have been looking left and right, but could not find the page you requested. We promise to do better next time.', 'twentythirteen' ); ?></h2>
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
