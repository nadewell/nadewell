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
        <nav id="main-navigation" class="site-navbar">
            <?php wp_nav_menu(
                array(
                    'menu'              =>  'primary',
                    'theme_location'    =>  'primary'
                )
            ); ?>
        </nav>
    </header>

    <div class="site-content-contain">
        <div id="content" class="site-content">
            <div class="wrap">
            <header class="page-header">
                <h2 class="page-title"><?php the_title(); ?></h2>
            </header>
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                    