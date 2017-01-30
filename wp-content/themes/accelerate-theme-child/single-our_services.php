<?php
/**
 * The template for displaying single About Services pages 
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			
			<?php while ( have_posts() ) : the_post();
			

				$size = "medium";
				$services = get_field('services');
				// $client = get_field('client');
				$link = get_field('site_link');
				$image_1 = // get_field('image_1');
				$image_2 = // get_field('image_2');
				$image_3 = // get_field('image_3');
				$image_4 = // get_field('image_4');
				$icon = get_field('icon'); ?>

				<article class="our-services">
					<aside class="our-services-sidebar">
						<h2><?php the_title(); ?></h2>
						<h5><?php echo $services; ?></h5>
						<!-- <h6>Client: <?php // echo $client; ?></h6> -->
							
						<?php the_content(); ?>
						
						<!-- <p><a href="<?php echo $link; ?>">Site Link</a></p> -->
					</aside>
					<div class="our-services-images">
						<?php if(image_1) { ?>	
							<?php echo wp_get_attachment_image( $icon, $size ); ?>
						<?php } ?>
						<?php // if(image_2) { ?>
							<?php // echo wp_get_attachment_image( $image_2, $size ); ?>
						<?php // } ?>
						<?php // if(image_3) { ?>
							<?php // echo wp_get_attachment_image( $image_3, $size ); ?>
						<?php // } ?>
						<?php // if(image_4) { ?>
							<?php // echo wp_get_attachment_image( $image_4, $size ); ?>
						<?php // } ?>
						
					
					
					</div>
				</article>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>