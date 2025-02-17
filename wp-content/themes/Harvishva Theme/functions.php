<?php


/* Theme Features */
function theme_features() {
    add_theme_support('title-tag');
    add_theme_support( 'align-wide');
    add_theme_support( 'disable-custom-font-sizes' );
    add_theme_support( 'disable-custom-colors' );
    add_theme_support( 'disable-custom-gradients' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'css/editor.css' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_post_type_support( 'page', 'excerpt' );
    register_nav_menu('main-menu', 'Main Menu');
}
add_action('after_setup_theme', 'theme_features');

/* Sidebar Nav */
function wpb_list_child_pages() { 

    global $post; 
    
    if ( is_page() && $post->post_parent )
    
    $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
    else
    $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
    
    if ( $childpages ) {
    
    $string = '<ul class="wpb_page_list">' . $childpages . '</ul>';
    }
    
    return $string;
    
    }
    
add_shortcode('wpb_childpages', 'wpb_list_child_pages');


/* Create Breadcrumbs */
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

/* Add Styles to Paragraphs */
if ( function_exists( 'register_block_style' ) ) {
    register_block_style(
        'core/paragraph',
        array(
            'name'         => 'lead',
            'label'        => __( 'Lead', 'textdomain' ),
            'is_default'   => false,
            'inline_style' => '.lead',
        )
    );
}
/* Add Styles to Paragraphs */
if ( function_exists( 'register_block_style' ) ) {
    register_block_style(
        'core/paragraph',
        array(
            'name'         => 'preheader',
            'label'        => __( 'Preheader', 'textdomain' ),
            'is_default'   => false,
            'inline_style' => '.preheader',
        )
    );
}
$theme_inc_dir = 'inc';
$theme_includes = array(
    '/acf-blocks.php',                          // Register Blocks 
    '/nav-walker.php',                          // Register Menu Walkers 
    '/enqueue.php',                             // Enqueue scripts and styles.
    '/theme-functions.php',                     // Contains the additonal codes for theme
    '/widgets.php'                             // Contains the Widgets
);

foreach ( $theme_includes as $file ) {
	require_once get_theme_file_path( $theme_inc_dir . $file );
}