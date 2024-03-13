<?php get_header(); ?>

    <div class="header-hero">
        <div class="owl-carousel owl-theme owl-header-hero">
            <?php if( have_rows('slide') ):
            $count = 0;
                while ( have_rows('slide') ) : the_row(); ?>                    
                    <div class="slide" style="background-image: url('<?php the_sub_field('img_desktop'); ?>');">
                        <div class="overlay"></div>
                        <div class="container">

                        <?php if($count == 0) { ?>
                            <div class="row wow animate__animated animate__fadeInLeft">
                        <?php } else { ?>
                            <div class="row">
                        <?php } ?>
                                <div class="col-12 col-md-6">
                                    <h1><?php the_sub_field('slide_title'); ?></h1>
                                    <p><?php the_sub_field('slide_description'); ?></p>
                                    <a id="<?php the_field('section_header_id'); ?>" href="<?php the_sub_field('slide_btn_link'); ?>" class="btn btn-primary btn-lg"><?php the_sub_field('slide_btn_text'); ?></a>
                                </div>
                            </div>

                        </div>
                    </div>                    
                <?php $count++ ;endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <section class="section-default section-header bg-light pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 one">
                    <div class="box-padding">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="mb-0"><?php the_field('col1_subtitle'); ?></h3>
                            <?php if(get_field('col1_icon')) { ?>
                                <img src="<?php the_field('col1_icon'); ?>" class="icon-header" />
                            <?php } ?>
                        </div>
                        <p><?php the_field('col1_description'); ?></p>
                        <?php if(get_field('col1_btn_link')) { ?>
                            <a href="<?php the_field('col1_btn_link'); ?>" class="btn btn-primary"><?php the_field('col1_btn_text'); ?></a>
                        <?php } ?>
                    </div>
                    <?php if(get_field('col1_img')) { ?>
                        <img src="<?php the_field('col1_img'); ?>" class="w-100" alt="">
                    <?php } ?>
                    <?php if(get_field('col1_content')) { ?>
                        <div class="box-padding">
                            <?php the_field('col1_content'); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-12 col-md-6 two">
                    <div class="box-padding">
                        <div class="section-title">
                        <?php if(get_field('col2_subtitle')) { ?>
                            <b class="subtitle"><?php the_field('col2_subtitle'); ?></b>
                        <?php } ?>
                            <h2><?php the_field('col2_title'); ?></h2>
                        </div>
                        <?php the_field('col2_content'); ?>
                        <?php if(get_field('col2_btn_link')) { ?>
                            <a href="<?php the_field('col2_btn_link'); ?>" class="btn btn-primary"><?php the_field('col2_btn_text'); ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
    <?php if( have_rows('linhas') ): ?>
        <section class="section-default bg-light pt-0" id="<?php the_field('zigzag_id'); ?>">
            <div class="container">
                <div class="row section-title">
                    <div class="col-12 col-md-6">
                        <b class="subtitle"><?php the_field('zigzag_subtitle'); ?></b>
                        <h2><?php the_field('zigzag_title'); ?></h2>
                    </div>
                </div>

                <?php while ( have_rows('linhas') ) : the_row();
                    if(get_sub_field('zigzag_row_layout') == 'esq') { ?>
                        <div class="row bg-white">
                            <div class="col-12 col-md-6 wow animate__animated animate__fadeInLeft">
                                <div class="box-padding-lg">
                                    <b class="subtitle"><?php the_sub_field('zigzag_row_subtitle'); ?></b>
                                    <h3><?php the_sub_field('zigzag_row_title'); ?></h3>
                                    <?php the_sub_field('zigzag_row_content'); ?>
                                    <?php if(get_sub_field('zigzag_row_btn_link')) { ?>
                                        <a target="_blank" href="<?php the_sub_field('zigzag_row_btn_link'); ?>" class="btn btn-primary"><?php the_sub_field('zigzag_row_btn_text'); ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 bg-col border-rounded-right wow animate__animated animate__fadeInRight" style="background-image:url('<?php the_sub_field('zigzag_row_img'); ?>');"></div>
                        </div>
                    <?php } elseif(get_sub_field('zigzag_row_layout') == 'dir') { ?>
                        <div class="row bg-white">
                            <div class="col-12 col-md-6 bg-col border-rounded-left wow animate__animated animate__fadeInLeft" style="background-image:url('<?php the_sub_field('zigzag_row_img'); ?>');"></div>
                            <div class="col-12 col-md-6 wow animate__animated animate__fadeInRight">
                                <div class="box-padding-lg">
                                    <b class="subtitle"><?php the_sub_field('zigzag_row_subtitle'); ?></b>
                                    <h3><?php the_sub_field('zigzag_row_title'); ?></h3>
                                    <?php the_sub_field('zigzag_row_content'); ?>
                                    <?php if(get_sub_field('zigzag_row_btn_link')) { ?>
                                        <a target="_blank" href="<?php the_sub_field('zigzag_row_btn_link'); ?>" class="btn btn-primary"><?php the_sub_field('zigzag_row_btn_text'); ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>    
                    <?php } ?>
                <?php endwhile; ?>          
            </div>
        </section>
    <?php endif; ?> 

    <?php if( get_field('list_title') ) { ?>
        <section class="section-default bg-col" id="<?php the_field('list_id'); ?>" style="background-image:url('<?php the_field('list_bg_img'); ?>')">
            <div class="container">
                <div class="row text-center section-title">
                    <div class="col-12 col-md-6 offset-md-3">
                        <b class="subtitle"><?php the_field('list_subtitle'); ?></b>
                        <h2><?php the_field('list_title'); ?></h2>
                        <p><?php the_field('list_content'); ?></p>
                    </div>
                </div>
                <?php if( have_rows('item_box') ): ?>
                    <div class="items-wrapper">
                    <?php while ( have_rows('item_box') ) : the_row(); ?>
                        <div class="item-box box-padding wow animate__animated animate__fadeInUp">   
                            <img src="<?php the_sub_field('item_box_icon'); ?>" class="item-box-icon" alt="<?php the_sub_field('item_box_title'); ?> ">
                            <b><?php the_sub_field('item_box_title'); ?> </b>
                            <?php the_sub_field('item_box_content'); ?> 
                        </div>  
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>
    <?php } ?>

    <!-- <section class="section-default bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <b class="subtitle">NOSSOS SERVIÇOS</b>
                    <h2>MANUTENÇÃO PREVENTIVA</h2>
                    <p>A JHM Equipamentos Industriais é estruturada com equipamentos de última geração, pessoal
                        rigorosamente qualificado atuando com domínio as técnicas de diagnósticos precisos, com prazos
                        de entrega condizentes as expectativas de seus clientes.</p>
                </div>
                <div class="col-12 col-md-4 offset-md-2">
                    <div class="list-services">
                        <img src="<?php echo THEME_URL; ?>assets/img/example/icon-engine.png" alt="">
                        <ul>
                            <li>Alinhamento de Motores com Equipamentos a Laser;</li>
                            <li>Análise de Vibração;</li>
                            <li>Balanceamento Dinâmico;</li>
                            <li>Termografia.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

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

    <?php if( get_field('video_id') ) { ?>
        <section class="section-default" id="<?php the_field('video_session_id'); ?>">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-md-6 wow animate__animated animate__fadeInLeft">
                        <iframe width="560" height="315" style="max-width:100%" src="https://www.youtube.com/embed/<?php the_field('video_id'); ?>"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col-12 col-md-5 offset-md-1 wow animate__animated animate__fadeInRight">
                        <b class="subtitle"><?php the_field('video_subtitle'); ?></b>
                        <h2><?php the_field('video_title'); ?></h2>
                        <p><?php the_field('video_content'); ?></p>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <?php if(get_field('banner_bg')) { ?>
        <section class="section-banner" id="<?php the_field('banner_session_id'); ?>" style="background-image:url('<?php the_field('banner_bg'); ?>')">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5 offset-md-7" style="background-color:<?php the_field('banner_box_bg'); ?>">
                        <div class="box-padding">
                            <b class="subtitle" style="color:<?php the_field('banner_box_text'); ?>"><?php the_field('banner_subtitle'); ?></b>
                            <h2 class="section-title" style="color:<?php the_field('banner_box_text'); ?>"><?php the_field('banner_title'); ?></h2>
                            <p style="color:<?php the_field('banner_box_text'); ?> !important"><?php the_field('banner_content'); ?></p>
                            
                            <?php if( have_rows('banner_item') ) { ?>                             
                                <?php while ( have_rows('banner_item') ) : the_row(); ?>
                                    &bull; <a style="color:<?php the_field('banner_box_text'); ?>" href="<?php the_sub_field('banner_item_link'); ?>" target="_blank"><?php the_sub_field('banner_item_text'); ?></a>
                                <?php endwhile; ?>                        
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
            
    <?php if( have_rows('politics_row') ) { ?>
        <section class="section-default">
            <div class="container">
                <?php while ( have_rows('politics_row') ) : the_row(); ?>
                    <?php if(get_sub_field('politics_layout') == 'esq') { ?>
                        <div class="row">
                            <div class="col-12 col-md-6 wow animate__animated animate__fadeInLeft" style="background-image: url(<?php the_sub_field('politics_img'); ?>"></div>
                            <div class="col-12 col-md-6 wow animate__animated animate__fadeInRight">
                                <div class="box-padding-lg">
                                    <h3><?php the_sub_field('politics_title'); ?></h3>
                                    <p><?php the_sub_field('politics_content'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } elseif(get_sub_field('politics_layout') == 'dir') { ?>
                        <div class="row">
                            <div class="col-12 col-md-6 wow animate__animated animate__fadeInLeft">
                                <div class="box-padding-lg">
                                    <h3><?php the_sub_field('politics_title'); ?></h3>
                                    <p><?php the_sub_field('politics_content'); ?></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 wow animate__animated animate__fadeInRight" style="background-image: url(<?php the_sub_field('politics_img'); ?>"></div>
                        </div>
                    <?php } ?>
                <?php endwhile; ?>
            </div>
        </section>
    <?php } ?>

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

<?php get_footer(); ?>