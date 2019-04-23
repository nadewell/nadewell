<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="charset" content="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
    <header id="masthead" class="site-header" role="headerss">
        <div class="site-branding">
            <?php if( has_custom_logo() ): ?>
            <img src="<?php echo wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' )[0]; ?>" alt="<?php bloginfo( 'name' ); ?>">
            <?php else: ?>
            <div class="site-title"><?php bloginfo( 'name' ); ?></div>
            <div class="site-tagline"><?php bloginfo( 'description' ); ?></div>
            <?php endif; ?>
        </div>
        <nav id="main-navigation" class="site-navbar">
            <?php wp_nav_menu(
                array(
                    'menu'              =>  'primary',
                    'theme_location'    =>  'primary'
                )
            ); ?>
        </nav>
        <div class="humburger-container">
            <button type="button" class="hamburger navbar-toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </button>
        </div>
    </header>
                    