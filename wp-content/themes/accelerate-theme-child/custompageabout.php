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
	    <div class="our-services">
		<h6>Our Services</h6>
		<p>We take pride in our clients and the content we create for them.<br>
		Here's a brief overview of our offered services.</p>
	    </div>
	    
		<div class="about-services"> <!-- was a ul -->
			<?php query_posts('posts_per_page=5&post_type=our_services'); ?>
			<?php while ( have_posts() ) : the_post();
				$service_description = get_field('service_description');
				$icon = get_field('icon');
				$size = "small";	
			?>
			
			    <article class="case-study clearfix">
				<div class="our-services-sidebar "> <!-- was aside -->
					<div class="about-services">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
					</div>
				
					<div class="our-services-images">
					    <a href="<?php the_permalink(); ?>">
					    
						<?php if(image_1) { ?>	
							<?php echo wp_get_attachment_image( $icon, $size ); ?>
						<?php } ?>
						
					    </a>
					</div>
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
