<?php /* Template Name: 404 */ ?>

<?php get_header('basic'); ?>
<?php
$page_header = get_field('page_header');
$header_image = get_field('header_image');
$page_blurb = get_field('page_blurb');

?>
  <main id="main-content">
      <section class="page-header">
        <figure>
            <?php if ($header_image) { ?>
                <img src="<?=$header_image?>" alt="<?=$header_image['alt']?>"/>
            <?php } else { ?>
                <img src="<?php echo get_theme_file_uri() ?>/img/hero-twinkle.webp" alt="Design Element" />
            <?php } ?>
        </figure>

        <div class="container">
          <div class="text">
                    <h1>Page Not Found</h1>
                    <?php if ($page_blurb) { ?>
                        <p class="lead"><?= $page_blurb ?></p>
                    <?php } ?>
                </div>
            </div>
        
    </section>
    <section>
        <div class="container">
          <hr class="border-top" />
            <div class="is-layout-flex wp-container-6 wp-block-columns">
                <p>The page you requested could not be found at this address.
                    Back to <a href="/">Home</a></p>
            </div>
	  </div>
      </section>
</main>
<?php get_footer(); ?>
