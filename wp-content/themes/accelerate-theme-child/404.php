<?php
/**
 * The template for displaying the 404 page
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

 $size = "full";
 $penguin = get_field('penguin');

get_header(); ?>

<section class="error-screen-container">
  <div class="error-screen-image">
    <img src="https://cdn.pixabay.com/photo/2013/07/13/11/44/penguin-158551__340.png" alt="Penguin" />
  </div>

  <div class="error-screen-message">
    <h2>We can't find the page you're looking for, so have a staring contest with this penguin instead. We think he likes you.</h2>
    <p>As long as we have you here, feel free to check out our <a href="<?php echo site_url('/blog/') ?>">blog</a>
      or some of our <a href="<?php echo site_url('/case-studies/') ?>">featured work.</a> You'll be glad you did.
    </p>
  </div>
</section>

<?php get_footer(); ?>
