<section class="section-default bg-light">
    <div class="container">
        <div class="row section-title d-flex align-items-center">
            <div class="col-12 col-md-6">
                <b class="subtitle"><?php the_field('blog_subtitle'); ?></b>
                <h2><?php the_field('blog_title'); ?></h2>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-end">
                <a href="<?php bloginfo('url'); ?>/blog" class="btn btn-primary">IR PARA O BLOG</a>
            </div>
        </div>
        <div class="row">
            <?php $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'post_status' => 'publish',   
            );

            $post_query = new WP_Query($args);

            if($post_query->have_posts() ) {
                while($post_query->have_posts() ) {
                $post_query->the_post(); ?>

                    <div class="col-12 col-md-4 mb-lg-5 wow animate__animated animate__fadeInUp">
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