<?php
/*
    Template name: blog
*/

get_header();

global $wp_query;
$wp_query = new WP_Query( array(
    'post_type' => 'post', 
    'posts_per_page' => 100,
    'post_status' => 'publish'
));

?>

<section class="blog mt-header">
    <img src="<?php echo IMG;?>/fondohero.png" class="bg" alt="Imagen de fondo" title="Imagen de fondo">
    <div class="contenedor">
        <div class="content">
            <?php echo get_field('titulo_seccion_hero') ?>
            <?php echo get_field('descripcion_seccion_hero') ?>
        </div>
        <?php get_template_part('inc/arrow');?>

        <section class="tabs_blog scn_sec">
            <div class="tabs">
                <ul>
                    <li><button class="all active" data-id="0" type="button">Todos</button></li>
                    <?php
                        $get_categories = get_categories();
                        foreach($get_categories as $category) {
                            echo '<li><button class="'.$category->slug.'" data-id="'.$category->term_id.'" type="button">'.$category->name.'</button></li>';
                        }
                    ?>
                </ul>
            </div>
            <div class="grid grid-3">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <?php if(has_post_thumbnail()): ?>
                
                <?php
                    $categories = get_the_category();
                    $categorias = '';$classCategorias = '';
                    
                    foreach($categories as $c){
                        if(!empty($c)){
                            $categorias .= esc_html($c->name).', ';
                            $classCategorias .= esc_html($c->slug).' ';
                        }
                    }
                    
                    $categorias = substr($categorias, 0, -2);
                    $classCategorias = substr($classCategorias, 0, -1);
                ?>
                
                <div class="blog_card <?php echo $classCategorias; ?>">
                    <div class="blog_img">
                        <a href="<?php the_permalink(); ?>" class="exit" title="<?php the_title(); ?>">
                            <?php
                                $thumbID = get_post_thumbnail_id( $post->ID );
                                $imgDestacada = wp_get_attachment_image_src( $thumbID, 'thumbnail' );
                                $title = get_the_title( $post->ID );
                        
                                echo '<img src="'.$imgDestacada[0].'" alt="'.$title.'" title="'.$title.'">';
                            ?>
                        </a>
                    </div>
                    <div class="blog_content">
                        <div class="blog_titles">
                            <small><?php echo $categorias; ?></small>
                            
                            <a href="<?php the_permalink(); ?>" class="exit" title="<?php the_title(); ?>">
                                <h2><?php the_title(); ?></h2>
                            </a>
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="exit" title="<?php the_title(); ?>">
                            VER MÁS <i class="gg-arrow-long-right"></i>
                        </a>
                    </div>
                </div>
                
                <?php endif; ?>
                <?php endwhile;endif; ?>
            </div>
        </section>
    </div>
</section>

<?php 
    get_template_part('inc/section_novedades');
    //get_template_part('inc/section_qr_generator');
    
    get_footer();
?>

<script>
    function ml_webform_success_3413642() {
        var $ = ml_jQuery || jQuery;
        $('.ml-subscribe-form-3413642 .row-success').show();
        $('.ml-subscribe-form-3413642 .row-form').hide();
    }
</script>          
<script src="https://groot.mailerlite.com/js/w/webforms.min.js?v300817f630ad0e957914d0b28a2b6d78" type="text/javascript"></script>

<script src="<?php echo JS;?>/tlblog.js"></script>