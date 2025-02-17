<?php
/* Load Theme Files */
function theme_files() {
    wp_enqueue_script('fontawesome', '//kit.fontawesome.com/e52fe1252e.js');
    wp_enqueue_style('adobe-fonts', 'https://use.typekit.net/nlp8ybl.css');
    wp_enqueue_style('icons', get_theme_file_uri('/css/icons.min.css'));
    wp_enqueue_style('main_styles', get_theme_file_uri('/css/app.min.css'));
    wp_enqueue_script('jqueryui', 'https://code.jquery.com/jquery-3.6.3.min.js', array('jquery'), '3.6.3', true);
    wp_enqueue_script('bootstrap', get_theme_file_uri('bootstrap/dist/js/bootstrap.min.js'), array('jquery'), '1.1', true);
    wp_enqueue_script('swiper-scripts', get_theme_file_uri('js/swiper.min.js'), array('jquery'), '1.1', true);
    wp_enqueue_script('custom-scripts', get_theme_file_uri('js/scripts.js'), array('jquery'), '1.1', true);
    wp_deregister_style('classic-theme-styles');
    wp_dequeue_style('classic-theme-styles');
}
add_action('wp_enqueue_scripts', 'theme_files');

/* Load Custom Fonts in Editor */
function load_editor_styles() {
    wp_enqueue_style('typekit', '//use.typekit.net/nlp8ybl.css');
    wp_enqueue_style('icons', get_theme_file_uri('/css/icons.min.css'));
    wp_enqueue_style('edit_styles', get_theme_file_uri('/css/app.edit.min.css'));
    wp_enqueue_style('edit_styles_custom', get_theme_file_uri('/css/custom-editor.css'));
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');
    wp_enqueue_script('fontawesome', '//kit.fontawesome.com/e52fe1252e.js');
    wp_deregister_style('classic-theme-styles');
    wp_dequeue_style('classic-theme-styles');
}
add_action('enqueue_block_editor_assets', 'load_editor_styles');
