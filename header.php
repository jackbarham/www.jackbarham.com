<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title('-', true, 'right'); ?>Jack Barham</title>

    <meta name="author" content="Jack Barham - http://www.jackbarham.com">
    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

	<script src="https://use.typekit.net/lbb4thj.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

    <div class="layout-wrapper">

        <header class="header">
            <div class="layout-wide cf">
                <h1 class="header-logo"><a href="<?php echo site_url(''); ?>">Jack Barham</a></h1>
                <nav class="nav">
                    <ul class="nav-list cf">
                        <li><a href="<?php echo site_url(''); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
                        <li><a href="<?php echo site_url('/portfolio'); ?>">Portfolio</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="layout-content">