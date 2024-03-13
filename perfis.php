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
                                <p><?php the_content(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">VER MAIS</a>
                            </div>
                        </div>

                    <?php }
                } ?>
            </div>
        </div>
    </section>

    <section class="section-default section-bignumbers">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-md-3">
                    <h2>+20</h2>
                    <p>colaboradores</p>
                </div>
                <div class="col-12 col-md-3">
                    <h2>+25</h2>
                    <p>anos no mercado</p>
                </div>
                <div class="col-12 col-md-3">
                    <h2>+76000</h2>
                    <p>de equipamentos entregue</p>
                </div>
                <div class="col-12 col-md-3">
                    <h2>+2000m²</h2>
                    <p>de área construida</p>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>