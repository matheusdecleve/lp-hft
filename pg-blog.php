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
            <div class="col-12 col-md-6">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
        <div class="row">
            <?php $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',   
            );
            $post_query = new WP_Query($args);

            if($post_query->have_posts() ) {
                while($post_query->have_posts() ) {
                $post_query->the_post(); ?>

                    <div class="col-12 col-md-3 mb-lg-5 wow animate__animated animate__fadeInUp">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <small class="d-block my-2"><?php echo get_the_date( 'j \d\e F \d\e Y' ); ?></small>
                        <h3><?php the_title(); ?></h3>
                        <a href="<?php the_permalink(); ?>" class="btn-primary btn-md">LER MAIS</a>
                    </div>
                <?php }
            } ?>                    
        </div> 
    </div>
</section>

<?php if( have_rows('big_number','option') ) { 
    include get_template_directory() . '/components/section-big-numbers.php';
} ?>

<?php get_footer(); ?>