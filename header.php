<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title(''); ?></title>

    <meta name="author" content="Jack Barham - http://www.jackbarham.com">
    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <script src="//use.typekit.net/nmd7zax.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

    <div class="layout-wrapper">

        <header class="header">
            <div class="layout-inner cf">
                <h1 class="header-logo">Jack Barham</h1>
                <nav class="nav">
                    <ul class="nav-list cf">
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Portfolio</a></li>
                        <li><a href="">Articles</a></li>
                        <li><a href="">Playground</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="layout-content">
            <div class="layout-inner">
