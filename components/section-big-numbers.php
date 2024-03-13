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