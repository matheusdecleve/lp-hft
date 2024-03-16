
<?php if(get_field('link_wpp','option')) : ?>
    <a href="<?php the_field('link_wpp','option'); ?>" target="_blank" class="whatsapp-btn">
        <img src="<?php the_field('img_wpp','option'); ?>" alt="Entre em contato">
    </a>
<?php endif; ?>

<?php the_field('code_footer','option'); ?>

<?php wp_footer(); ?>

</body>
</html>
