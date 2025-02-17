<?php
/* Block Name: Hero Header */
?>
<?php
$background_image = get_field('background_image');
if (is_array($background_image) && isset($background_image['url'])) {
    $background_url = esc_url($background_image['url']);
} else {
    $background_url = '';
}
?>
<div class="hero-section" style="background-image: url('<?php echo $background_url; ?>');">
    <div class="hero-content">
        <h1><?php the_field('main_title'); ?></h1>
        <h2><?php the_field('subtitle'); ?></h2>
        <p><?php the_field('description'); ?></p>
        <a href="<?php the_field('button_url'); ?>" class="btn">
            <?php the_field('button_text'); ?> →
        </a>
    </div>

    <div class="slider">
        <?php if (have_rows('slider_items')) : ?>
            <?php while (have_rows('slider_items')) : the_row(); ?>
                <div class="slider-item">
                    <span><?php the_sub_field('slider_title'); ?></span>
                    <p><?php the_sub_field('slider_subtitle'); ?></p>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <?php if (get_field('navigation_arrows')) : ?>
        <div class="slider-navigation">
            <button class="prev">←</button>
            <button class="next">→</button>
        </div>
    <?php endif; ?>
</div>
