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
    <link href="https://fonts.googleapis.com/css2?family=Tomorrow:wght@400;600&display=swap" rel="stylesheet">

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

    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1833877720412350');
    fbq('track', 'PageView');
    </script>

    <?php wp_head(); ?>

    <style>
        :root {
            --primary-color: <?php the_field('primary_color','option'); ?>;
            --secondary-color: <?php the_field('secondary_color','option'); ?>;
            --btn-bg: <?php the_field('btn_bg','option'); ?>;
            --btn-text: <?php the_field('btn_text','option'); ?>;
        }
    </style>

    <?php the_field('code_header','option'); ?>
</head>
<body>

<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1833877720412350&ev=PageView&noscript=1"
/></noscript>

<div id="bg-noise"></div>   