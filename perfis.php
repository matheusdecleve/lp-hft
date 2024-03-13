<?php
// Template Name: Perfis
get_header();
?>

    <div class="header-hero half">
        <div class="slide" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h1><?php the_field('hero_title'); ?></h1>
                        <p class="lead"><?php the_field('hero_description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-default">
        <div class="container">
            <div class="row section-title">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="row products">

                <?php $args = array(
                    'post_type' => 'perfis'
                );

                $post_query = new WP_Query($args);

                if($post_query->have_posts() ) {
                    while($post_query->have_posts() ) {
                    $post_query->the_post(); ?>

                        <div class="col-12 col-md-4 product-item">
                            <div class="box-padding">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="w-100">
                                <b><?php the_title(); ?></b>
                                <p><?php the_field('small_description'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">VER MAIS</a>
                            </div>
                        </div>

                    <?php }
                } ?>
            </div>
        </div>
    </section>

    <?php if( have_rows('big_number','option') ) { ?>
        <section class="section-default section-bignumbers bg-col" id="<?php the_field('bignumbers_id','option'); ?>" style="background-image:url('<?php the_field('bignumbers_bg_img','option'); ?>');background-color:<?php the_field('bignumbers_bg_color','option'); ?>">
            <div class="container">
                <div class="row text-center">
                    <?php while ( have_rows('big_number','option') ) : the_row(); ?>
                        <div class="col-12 col-md">
                            <h2 style="color:<?php the_field('bignumbers_text_color','option'); ?>"><?php the_sub_field('bignumber_number','option'); ?></h2>
                            <p style="color:<?php the_field('bignumbers_text_color','option'); ?>"><?php the_sub_field('bignumber_description','option'); ?></p>                                
                        </div>
                    <?php endwhile; ?>                    
                </div>
            </div>
        </section>
    <?php } ?>

<?php get_footer(); ?>