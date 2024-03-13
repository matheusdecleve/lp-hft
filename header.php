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

    <link rel="shortcut icon" href="<?php echo THEME_URL; ?>assets/img/favicon.png" type="image/png" />
    <link rel="apple-touch-icon" href="<?php echo THEME_URL; ?>assets/img/apple-touch-icon.png" />

    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php bloginfo('title'); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:url" content="<?php bloginfo('url'); ?>" />
    <meta property="og:site_name" content="<?php bloginfo('title'); ?>" />
    <meta property="og:image" content="<?php echo THEME_URL; ?>screenshot.png" />
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
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
                <img src="<?php the_field('logo','option'); ?>" class="logo" alt="Logo <?php bloginfo('title'); ?>">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php if( have_rows('item_nav','option') ):
                        while ( have_rows('item_nav','option') ) : the_row();       
                            if(is_front_page()) { ?>
                                <li class="nav-item">
                                    <?php if(get_sub_field('link_class')) { ?>
                                        <a class="nav-link <?php the_sub_field('link_class'); ?>" href="<?php the_sub_field('link_link'); ?>"><?php the_sub_field('link_name'); ?></a>
                                    <?php } else { ?>
                                        <a class="nav-link" href="<?php bloginfo('url'); ?><?php the_sub_field('link_link'); ?>"><?php the_sub_field('link_name'); ?></a>
                                    <?php } ?>
                                </li> 
                            <?php } else { ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php bloginfo('url'); ?><?php the_sub_field('link_link'); ?>"><?php the_sub_field('link_name'); ?></a>
                                </li> 
                            <?php }
                        endwhile; ?>
                    <?php endif; ?>                    
                </ul>
            </div>
        </div>
    </nav>