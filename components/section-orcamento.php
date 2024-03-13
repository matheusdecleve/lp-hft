<section class="section-default bg-col" id="<?php the_field('id_form',2); ?>" style="background-image:url('<?php the_field('bg_form',2); ?>');background-color:<?php the_field('bg_form_color',2); ?>">
    <div class="container">
        <div class="row section-title">
            <div class="col-12 col-md-8 offset-md-2">
                <b class="subtitle" ><?php the_field('form_subtitle',2); ?></b>
                <h2><?php the_field('form_title',2); ?></h2>                    
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 wow animate__animated animate__fadeInUp">
                <?php echo do_shortcode('[contact-form-7 id="7d178d2" title="Formulário de contato"]'); ?>
            </div>
        </div>
    </div>
</section>