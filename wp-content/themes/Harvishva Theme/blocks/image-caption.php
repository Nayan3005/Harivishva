<?php
/* Block Name: Image with caption */


$image = get_field('image');
$caption = get_field('caption');
?>
<figure class="map-img">
    <?php if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    <?php if( !empty( $caption ) ): ?>
        <figcaption><?php echo $caption ?></figcaption>
    <?php endif; ?>
</figure>