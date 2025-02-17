<?php /* Template Name: Homepage */
get_header('basic');
$theParent = wp_get_post_parent_id(get_the_ID());
?>

<main id="main-content" class="content">
  <?php the_content(); ?>
</main>

<?php get_footer(); ?>
