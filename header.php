<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img class="logo" src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2024/09/logo.png" alt="<?php bloginfo('name'); ?>">
        </a>

        <p><?php bloginfo('description'); ?></p>

        <!-- Navigation Menu -->
        <nav class="mainNav">
            <?php  //wp_nav_menu(array('theme_location' => 'primary')); 
            ?>
            <?php wp_nav_menu(array('theme_location' => 'acmee_main_menu', 'depth => 2')); ?>
        </nav>
    </header>

    