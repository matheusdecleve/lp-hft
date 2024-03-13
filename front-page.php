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

    <?php if( have_rows('big_number','option') ) { 
        include get_template_directory() . '/components/section-big-numbers.php';
    } ?>

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

    <?php include get_template_directory() . '/components/section-blog.php'; ?>
    <?php include get_template_directory() . '/components/section-contato.php'; ?>
    <?php include get_template_directory() . '/components/section-orcamento.php'; ?>

<?php get_footer(); ?>