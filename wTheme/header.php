<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woo Theme</title>
    <?php wp_head(); ?>

</head>
<body <?php body_class('test');?>>

<header>
    <div class="w-100 accountBar">
    <div class="container p-0 m-0">
        <div class="row d-flex align-items-center justify-content-between">
            <?php wp_nav_menu(
            array(
                'theme_location' => 'act-menu',
                'menu_class' => 'act-menu'//add classes to elements
            )); ?>
        </div>
    </div>
    </div>
<div class="container">
    <div class="row ">
    <div class="col d-flex align-items-center justify-content-between">
        <span>
            <a href="<?php bloginfo('url'); ?>">
                <img src="<?php bloginfo('template_directory');?>/images/logo.png" class="logo img-fluid">
            </a>
            <p><?php bloginfo('description');?></p>
        </span>
    </div>
    <div class="col-lg">
        <div class="searchBox">
            <?php aws_get_search_form( true ); ?>
        </div>
    </div>
    <div class="col-sm-auto">
    <?php wp_nav_menu(
        array(
            'theme_location' => 'top-menu',
            'menu_class' => 'top-menu'//add classes to elements
        )); ?>
    </div>

    </div>

</div>
</header>

