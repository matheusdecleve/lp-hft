<?php get_header(); ?>

    <section class="section-default bg-light single-post">
        <div class="container">
            <div class="row section-title">
                <div class="col-12 col-md-10 offset-md-1">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="mb-lg-5 w-100" alt="<?php the_title(); ?>">
                    <h2><?php the_title(); ?></h2>
                    <small><b>Publicado em:</b> <?php echo get_the_date( 'j \d\e F \d\e Y' ); ?></small>
                    <hr />
                    <div class="single-content">
                        <?php the_content(); ?>
                    </div>
                </div>                
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="<?php bloginfo('url'); ?>/blog" class="btn btn-primary">VOLTAR AO BLOG</a>
                </div>
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