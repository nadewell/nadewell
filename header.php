<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>
    
<header id="masthead" class="site-header">
    <nav id="main-navigation" class="site-navbar">
        <?php wp_nav_menu(
            array(
                'menu'              =>  'primary',
                'theme_location'    =>  'primary'
            )
        ); ?>
    </nav>
</header>