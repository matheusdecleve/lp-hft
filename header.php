<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <title><?php bloginfo('title'); ?></title>

    <meta name="theme-color" content="<?php the_field('primary_color','option'); ?>">
    <meta name="msapplication-TileColor" content="<?php the_field('primary_color','option'); ?>">

    <link rel="canonical" href="<?php bloginfo('url'); ?>" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="<?php the_field('favicon','option'); ?>" type="image/png" />
    <link rel="apple-touch-icon" href="<?php the_field('apple_favicon','option'); ?>" />

    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php bloginfo('title'); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:url" content="<?php bloginfo('url'); ?>" />
    <meta property="og:site_name" content="<?php bloginfo('title'); ?>" />
    <meta property="og:image" content="<?php the_field('screenshot','option'); ?>" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:image:type" content="image/png" />

    <?php wp_head(); ?>

    <style>
        :root {
            --primary-color: <?php the_field('primary_color','option'); ?>;
            --btn-bg: <?php the_field('btn_bg','option'); ?>;
            --btn-text: <?php the_field('btn_text','option'); ?>;
        }
    </style>

    <?php the_field('code_header','option'); ?>
</head>
<body>


    