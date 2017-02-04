<?php /* Template Name: CustomPageAbout */
/**
 * The template for displaying a custom About page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelereate_Marketing
 * @since Accelerate 1.1
 */
get_header(); ?>

	<section class="about-page">
	    <div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="about-taxi">
				<?php the_content(); ?>
				<!-- <a class="button" href="<?php echo home_url(); ?>/blog">View Our Work</a> -->
			</div>
		<?php endwhile; // end of the loop that displays the header text over the taxi-image. ?>
	    </div><!-- .container -->
	</section>

<div id="primary" class="site-content">
    <div id="content" role="main">

    <section>
	<div class="site-content">
		<div class="our-services"> <!-- displays the intro text -->
		    <?php query_posts('posts_per_page=2&post_type=about_services_intro'); ?>
		    <?php while ( have_posts()) : the_post();
			$services_intro_header = get_field('services_intro_header');
			$services_intro_description = get_field('services_intro_description');
		    ?>
		</div>
			<article class="our-services">
					<div class="our-services">
						<h6><?php the_title(); ?></a></h6>
						<!-- <p><?php // echo $services_intro_header; ?></p>
						<p><?php // echo $services_intro_description; ?></p> -->
						<p><?php the_content(); ?></p>
					</div>
			</article>
		    
		    <?php endwhile; ?>
		    <?php wp_reset_query();  // resets the altered query back to the original ?>
	    
	    
		<div class="services-section"> <!-- displays the services text and icons -->
			<?php query_posts('posts_per_page=4&post_type=our_services'); ?>
			<?php while ( have_posts() ) : the_post();
				// $service_description = get_field('service_description');
				$icon = get_field('icon');
				$size = "full";	
			?>
			
			<article class="individual-services">
					<div class="our-services-images">
					    <a href="<?php the_permalink(); ?>">
					    
						<?php if($icon) { ?>	
							<?php echo wp_get_attachment_image( $icon, $size ); ?>
						<?php } ?>
						
					    </a>
					</div>
					<div class="our-services-description">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<!-- <p><?php //echo $service_description; ?></p> -->
						<p><?php the_content(); ?></p>
					</div>
			</article>
			
			<?php endwhile; ?> 
			<?php wp_reset_query();  // resets the altered query back to the original ?>
		</div>
		
	</div>		
</section>

<section class="contact-container">
    <h4>Interested in working with us?<a class="contact-button" href="http://localhost:8888/accelerate/contact/">Contact Us</a></h4>
</section>

    </div><!-- #content -->
</div><!-- #primary -->


<?php get_footer(); ?>