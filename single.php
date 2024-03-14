<?php 
get_header(); 

$postId = $post->ID;
$excludeID[] = $postId; 

$terms = get_the_terms($post->id, 'category');
$categoryName = $terms[0]->name;
$categorySlug = $terms[0]->slug;
$categoryUrl = $terms[0]->url;
?>

<div style="background-image:url('<?php the_post_thumbnail_url(); ?>');width:100%;height:540px;background-size:cover;"></div>

    <section class="single-post">
        <div class="container text bg-light">
            <div class="row section-title">
                <div class="col-12">                    
                    <h2><?php the_title(); ?></h2>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <small><b>Publicado em:</b> <?php echo get_the_date( 'j \d\e F \d\e Y' ); ?></small>
                            <small class="d-inline-block mx-3">
                                <b>Categoria:</b> <?php echo $categoryName; ?>
                            </small>
                        </div>
                    </div>   
                    <hr />                 
                </div>                
                <div class="col-12">
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

    <?php $args = array(
        'post_type' => 'post',
        'post__not_in' => $excludeID,
        'post_status' => 'publish',
        'category_name' => $categorySlug,
        'posts_per_page' => 3   
    );
    $post_query = new WP_Query($args); ?>

    <?php if($post_query->have_posts() ) { ?>
        <section class="section-default bg-light border-top">
            <div class="container">
                <div class="row section-title">
                    <div class="col-12">
                        <b class="subtitle">Fique por dentro</b>
                        <h2>Posts relacionados</h2>
                    </div>
                </div>
                <div class="row">                    
                    <?php while($post_query->have_posts() ) {
                        $post_query->the_post(); ?>

                        <div class="col-12 col-md-4 mb-5 wow animate__animated animate__fadeInUp">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            <small class="d-block my-2"><?php echo get_the_date( 'j \d\e F \d\e Y' ); ?></small>
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn-primary btn-md">LER MAIS</a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php } ?>

<?php get_footer(); ?>