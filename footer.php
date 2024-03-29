    <footer class="footer bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="<?php echo THEME_URL ?>assets/img/logo.png" width="280" alt="Logo HFTS" loading="lazy">
                    <small class="d-block mt-4"><?php echo Date('Y'); ?> Danilo Broker - Todos os direitos reservados.</small>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>  
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js"></script>

    <?php if(get_field('link_wpp','option')) : ?>
         <a href="<?php the_field('link_wpp','option'); ?>" target="_blank" class="whatsapp-btn">
            <img src="<?php the_field('img_wpp','option'); ?>" alt="Entre em contato" loading="lazy">
        </a>
    <?php endif; ?>

    <?php the_field('code_footer','option'); ?>

    <?php wp_footer(); ?>

</body>
</html>
