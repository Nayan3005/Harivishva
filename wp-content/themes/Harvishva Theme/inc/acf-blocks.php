<?php

/* ACF Custom Block Registry  */
add_action( 'acf/init', 'hfm_acf_init_blocks' );
function hfm_acf_init_blocks() {

    if ( function_exists( 'acf_register_block_type' ) ) {
        acf_register_block_type(
            array(
                'name'            => 'Hero Header',
                'title'           => 'Hero Header',
                'description'     => 'Hero Header',
                'render_template' => 'blocks/hero-header.php',
                'category'        => 'formatting',
                'align'           => 'full',
                'icon'            => 'schedule',
                'keywords'        => array( 'header', 'hero' ),
                'mode'            => 'preview',
                'supports'		=> [
                    'align'		=> true,
                    'anchor'		=> true,
                    'customClassName'	=> true,
                    'jsx' 		=> true,
                ]
            )
        );
    }


    if ( function_exists( 'acf_register_block_type' ) ) {
        acf_register_block_type(
            array(
                'name'            => 'Image with caption',
                'title'           => 'Image with caption',
                'description'     => 'Image with caption',
                'render_template' => 'blocks/image-caption.php',
                'category'        => 'formatting',
                'icon'            => 'image',
                'keywords'        => array( 'image', 'caption', 'right image'),
                'mode'            => 'preview',
                'supports'		=> [
                    'customClassName'	=> true,
                    'jsx' 		=> true,
                ]
            )
        );
    }
}
