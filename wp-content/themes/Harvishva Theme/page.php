<?php get_header('basic'); ?>
<?php
$page_header = get_field('page_header');
$header_image = get_field('header_image');
$page_blurb = get_field('page_blurb');
?>
  <main id="main-content">
	  
      <?php the_content(); ?>
  </main>
<?php get_footer(); ?>