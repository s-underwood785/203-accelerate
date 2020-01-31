<?php
/**
 * The template for displaying the About page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<!-- SERVICES -->

  <section>
    <div class="about-container">
      <h2 class="about-service-into">Our Services</h2>
      <p class="about-service-intro">We take pride in our clients and the content we create for them.
      </br>Here's a brief overview of our offered servies</p>

      <?php $iconfirst = 'yes'; ?>
      <?php query_posts('post_type=services'); ?>
      <?php while (have_posts()) : the_post();
        $icon = get_field("icon");
        $size = "thumbnail";
      ?>

     <?php
     if ($iconfirst === 'yes') { ?>
       <div class="about-icon-first-section">
         <div class="about-icon-left">
           <?php echo wp_get_attachment_image($icon, $size); ?>
         </div>
         <div class="about-content-right">
           <h3><?php the_title(); ?></h3>
           <?php the_content(); ?>
           <?php $iconfirst = "no"; ?>
         </div>
       </div>
     <?php } else { ?>
       <div class="about-desc-first-section">
         <div class="about-content-left">
           <h3><?php the_title(); ?></h3>
           <?php the_content(); ?>
         </div>
         <div class="about-icon-right">
           <?php echo wp_get_attachment_image($icon, $size); ?>
           <?php $iconfirst = 'yes'; ?>
         </div>
       </div>
     <?php } ?>

   <?php endwhile; ?>

   <?php wp_reset_query(); ?>

  </div>
</section>

<?php get_footer(); ?>
