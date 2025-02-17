<?php
/* Widgets  */
function theme_widgets_init() {

    register_sidebar( array(
	'name'          => 'Footer Lead Text',
	'id'            => 'footer_lead_text',
        'before_widget' => '',
        'after_widget' => '',
    ) );
    register_sidebar( array(
		'name'          => 'Header Project Name',
		'id'            => 'header_project_name',
        'before_widget' => '',
        'after_widget' => '',
	) );
    register_sidebar(array(
        'name'          => 'Footer Column 1',
        'id'            => 'footer-1',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => 'Footer Column 2',
        'id'            => 'footer-2',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => 'Footer Column 3',
        'id'            => 'footer-3',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => 'Footer Column 4',
        'id'            => 'footer-4',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}
add_action( 'widgets_init', 'theme_widgets_init' );