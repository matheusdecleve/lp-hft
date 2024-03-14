<?php get_header(); ?>

    <section class="section-default bg-white single-post">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-12 col-md-5">
                    <div class="border rounded mb-5">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="mb-lg-5 w-100" alt="<?php the_title(); ?>">                    
                    </div>
                </div>         
                <div class="col-12 col-md-5 offset-md-1">
                    <h2><?php the_title(); ?></h2>
                    <span><?php the_field('small_description'); ?></span>
                    <hr />
                    <div class="single-content">
                        <?php the_content(); ?>
                    </div>
                </div>       
            </div>
        </div>
    </section>

    <?php include get_template_directory() . '/components/section-orcamento.php'; ?>

<?php get_footer(); ?>