<?php get_header('basic'); ?>
<?php
$page_header = get_field('page_header');
$header_image = get_field('header_image');
$page_blurb = get_field('page_blurb');
?>
  <main id="main-content">
      <section class="page-header">
        <div class="container">
          <div class="text">
          <?php if ($page_header) { ?>
            <h1><?=$page_header?></h1>
          <?php } ?>
            <?php if ($page_blurb) { ?>
            	<p class="lead"><?=$page_blurb?></p>
            <?php } ?>
	  </div>
        </div>
      </section>
      
   <section>
        <div class="container">
          <hr class="border-top" />
		<?php
		if ( have_posts() ) :
		    while ( have_posts() ) :
		        the_post();
		        // Display the post content or custom template tags
		        the_title();
		        the_content();
		    endwhile;
		else :
		    // Display a message when no posts are found
		    echo 'No posts found.';
		endif;
		?>
	  </div>
      </section>
      
  </main>

<?php get_footer('footer'); ?>