<section class="section-default">
    <div class="container">
        <div class="row section-title">
            <div class="col-12 col-md-12 text-center">
                <h2><?php the_field('contact_title',2); ?></h2>
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-12 col-md-5">
                <?php if(get_field('endereco','option')) { ?>
                    <div class="icon-contato">
                        <div class="icon-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                        </div>
                        <div class="icon-content">
                            <h4>Endereço</h4>
                            <p><?php the_field('endereco','option'); ?></p>
                        </div>
                    </div>
                <?php } ?>
                <?php if(get_field('telefone','option')) { ?>
                    <div class="icon-contato">
                        <div class="icon-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                            </svg>
                        </div>
                        <div class="icon-content">
                            <h4>Telefone</h4>
                            <p><?php the_field('telefone','option'); ?></p>
                        </div>
                    </div>
                <?php } ?>
                <?php if(get_field('whatsapp','option')) { ?>
                    <div class="icon-contato">
                        <div class="icon-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                            </svg>
                        </div>
                        <div class="icon-content">
                            <h4>WhatsApp</h4>
                            <p><?php the_field('whatsapp','option'); ?></p>
                        </div>
                    </div>
                <?php } ?>
                <?php if(get_field('email','option')) { ?>
                    <div class="icon-contato">
                        <div class="icon-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                            </svg>
                        </div>
                        <div class="icon-content">
                            <h4>E-mail</h4>
                            <p><?php the_field('email','option'); ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php if(get_field('map','option')) { ?>
                <div class="col-12 col-md-6 offset-md-1 wow animate__animated animate__fadeInRight">
                    <?php the_field('map','option'); ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

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

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <img src="<?php the_field('logo','option'); ?>" class="logo" alt="Logo <?php bloginfo('title'); ?>">
            </div>
            <div class="col-12 col-md-3">
                <h5>NAVEGUE</h5>
                <?php if( have_rows('item_footer','option') ):
                    while ( have_rows('item_nav','option') ) : the_row();       
                        if(is_front_page()) { ?>
                            <?php if(get_sub_field('link_class')) { ?>
                                <a class="d-block text-primary <?php the_sub_field('link_class'); ?>" href="<?php the_sub_field('link_link'); ?>"><?php the_sub_field('link_name'); ?></a>
                            <?php } else { ?>
                                <a class="d-block text-primary" href="<?php bloginfo('url'); ?><?php the_sub_field('link_link'); ?>"><?php the_sub_field('link_name'); ?></a>
                            <?php } ?>
                        <?php } else { ?>
                            <a class="d-block text-primary" href="<?php bloginfo('url'); ?><?php the_sub_field('link_link'); ?>"><?php the_sub_field('link_name'); ?></a>
                        <?php }
                    endwhile; ?>
                <?php endif; ?>  
            </div>
            <?php if(get_field('horario','option')) { ?>
                <div class="col-12 col-md-3">
                    <h5>HORÁRIOS<br />DE FUNCIONAMENTO</h5>
                    <p><?php the_field('horario','option'); ?></p>
                </div>
            <?php } ?>
            <div class="col-12 col-md-3">
                <h5>REDES SOCIAIS</h5>
                <?php if(get_field('facebook','option')) { ?>
                    <a href="<?php the_field('facebook','option'); ?>" target="_blank" title="facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                        </svg>
                    </a>
                <?php } ?>
                <?php if(get_field('instagram','option')) { ?>
                    <a href="<?php the_field('instagram','option'); ?>" target="_blank" title="instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                        </svg>
                    </a>
                <?php } ?>
                <?php if(get_field('link_wpp','option')) { ?>
                    <a href="<?php the_field('link_wpp','option'); ?>" target="_blank" title="whatsapp">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                        </svg>
                    </a>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <small>© <?php the_date('Y'); ?> <?php bloginfo('title'); ?> | Todos os Direitos Reservados | Feito por <a
                    href="https://pizzanimarketing.com.br" target="_blank">Pizzani Marketing</a></small>
            </div>                
        </div>
    </div>
</footer>

<a href="<?php the_field('link_wpp','option'); ?>" target="_blank" class="whatsapp-btn">
    <img src="<?php the_field('img_wpp','option'); ?>" alt="Entre em contato">
</a>

<?php wp_footer(); ?>

</body>
</html>
