<?php
/*
    Template name: single
*/

get_header();

$id_single = intval(get_the_ID());
?>

<section class="single_blog mt-header">
    <div class="contenedor">
        <div class="blog_contenedor">
            <div class="blog_bar invisible"></div>
            <div class="blog_contenido">
                <div class="blog_title">
                    <?php echo get_field('titulo');?>
                </div>
                <?php 
                    the_post_thumbnail();
                    the_content();
                ?>
            </div>
            <div class="blog_bar">
                <div class="box_border subscribe_box">
                    <p><small><b>SÉ EL PRIMERO EN ENTERARTE</b></small></p>
                    <p><small>Sé el primero en recibir nuestros artículos, tan pronto como salgan.</small></p>
                    <a href="#suscribe" class="custom blue scroll-suave" title="Suscríbete">
                        <p>Suscríbete</p>
                        <div>
                            <img src="<?php echo IMG;?>/large-arrow.svg">
                        </div>
                    </a>
                </div>
                <div class="box_border follow_box">
                    <p><small><b>SÍGUENOS EN NUESTRAS REDES</b></small></p>
                    <ul class="social_network dark">
                        <?php get_template_part('inc/social_medias');?>
                    </ul>
                </div>
                <div class="populars_articles">
                    <div class="title_">
                        <p><small><b>Artículos populares</b></small></p>
                    </div>
                    <?php 
                        global $wp_query;
                        $wp_query = new WP_Query( array(
                            'post_type' => 'post', 
                            'posts_per_page' => 3,
                            'post_status' => 'publish'
                        ));
                    ?>
                    <div class="ul">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                        <?php if(intval($post->ID) != $id_single): ?>
                        <?php if(has_post_thumbnail()): ?>
                        
                        
                            <a href="<?php the_permalink(); ?>" class="li exit" title="<?php the_title();?>">
                                <p><small><?php the_title();?></small></p>
                                <?php
                                    $thumbID = get_post_thumbnail_id( $post->ID );
                                    $imgDestacada = wp_get_attachment_image_src( $thumbID, 'thumbnail' );
                                    echo '<img src="'.$imgDestacada[0].'">';
                                ?>
                            </a>
                            
                            
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php endwhile;endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-container with_bg center-vertical"><div class="contenedor"><p style="font-weight:bolder">También puedes ver:</p><?php get_template_part('inc/blog_cards');?></div></section>

<?php //get_template_part('inc/section_qr_generator');?>

<?php get_footer(); ?>

<script src="<?php echo JS;?>/tlentrada.js"></script>