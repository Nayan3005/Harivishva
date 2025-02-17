<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <a id='skip-nav' class='screenreader-text' href='#main-content'>
            Skip to Content
        </a>

        <header id="site-header">
            <div class="container">
                <div class="header-mobile">
                    <a href="<?php echo site_url(''); ?>" id="logo">
                        <img class="logo" src="<?php echo get_theme_file_uri() ?>/img/logo.png" alt="Harivishva Logo" />
                        <?php if (is_active_sidebar('header_project_name')) : ?>
                            <?php dynamic_sidebar('header_project_name'); ?>
                        <?php endif; ?>
                    </a>

                    <nav id="menu" class="menu collapse">
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'main-menu',
                            'menu_class'     => 'nav-menu',
                            'container'      => false,
                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'fallback_cb'    => false,
                        ]);
                        ?>
                    </nav>

                    <div class="header-contact">
                        <a href="tel:+919999999999" class="contact-number">
                            <img src="<?php echo get_theme_file_uri(); ?>/img/union.png" alt="Phone"> +91 9999 999 999
                        </a>
                        <a href="<?php echo site_url('/contact'); ?>" class="enquire-button">Enquire Now</a>
                    </div>


                    <button id="menu-toggle" class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-expanded="false" aria-controls="menu">
                        <div class="closed">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                        <div class="open">
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                    </button>
                </div>
            </div>
        </header>
