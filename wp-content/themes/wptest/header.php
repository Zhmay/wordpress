<!doctype html>
<html <?php language_attributes();?>>
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php the_title() ?></title>
        <?php wp_head(); ?>
    </head>
    <body>
    <header>
        <h2>I'm header</h2>
        <div> Name - <?php bloginfo('name');?></div>
        <div>Header description - <?php bloginfo('description');?></div>
        <div>
            <?php wp_nav_menu([
                'theme_location' => 'header',
                'container' => 'false',
                'menu_class' => 'nav-menu',
                'menu_id' => 'header-nav'
            ]) ?>
        </div>
        <hr>
    </header>

    <main>
