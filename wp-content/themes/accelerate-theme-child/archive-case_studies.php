<?php
/**
 * The template for displaying the archive of case studies
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate
 * @since Accelerate 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
			    $image_1 = get_field('image_1');
			    $size = "full";
			    $services = get_field('services');
			    $client = get_field('client');
			?>
			
			<article class="case-study clearfix">
					<aside class="case-study-sidebar">
						<h2><a href="<?php the_permalink(); ?>"></a><?php the_title(); ?></a></h2>
						<h5><?php echo $services; ?></h5>
						<h6>Client: <?php echo $client; ?></h6>	
						<?php the_excerpt(); ?>
						
						<p><a href="<?php the_permalink(); ?>">View Project &rsaquo;</a></p>
					</aside>
					
					<div class="case-study-images">
					    <a href="<?php the_permalink(); ?>">
						<?php if(image_1) { ?>	
							<?php echo wp_get_attachment_image( $image_1, $size ); ?>
						<?php } ?>		
					    </a>
					</div>
				</article>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>