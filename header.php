<?php
if (!defined('ABSPATH'))
    exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <h1><?php bloginfo('name'); ?></h1>
            <?php wp_nav_menu(['theme_location' => 'header_right']); ?>
        </div>
    </header>