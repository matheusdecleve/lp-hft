<?php
// Template Name: Blog
get_header();
?>

    <div class="header-hero half">
        <div class="slide" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <h1><?php the_field('hero_title'); ?></h1>
                        <p class="lead"><?php the_field('hero_description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-default bg-light">
        <div class="container">
            <div class="row section-title d-flex align-items-center">
                <div class="col-12 col-md-8">
                    <h2>Blog</h2>
                </div>                
            </div>
            <div class="row">

            <?php $args = array(
                'post_type' => 'post'
            );

            $post_query = new WP_Query($args);

            if($post_query->have_posts() ) {
                while($post_query->have_posts() ) {
                $post_query->the_post(); ?>

                    <div class="col-12 col-md-4 mb-lg-5">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <small class="d-block my-2"><?php echo get_the_date( 'j \d\e F \d\e Y' ); ?></small>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn-primary btn-md">LER MAIS</a>
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