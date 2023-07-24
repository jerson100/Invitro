<?php 

global $wp_query;
$wp_query = new WP_Query( array(
    'post_type' => 'post', 
    'posts_per_page' => 3,
    'post_status' => 'publish'
));

?>

<div class="box_blog_cards">
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
    
    <div class="blog_card">
        <div class="blog_img">
            <?php $title = get_the_title( $post->ID ); ?>
            <a href="<?php the_permalink(); ?>" class="exit" title="<?php echo $title; ?>">
                <?php
                    $thumbID = get_post_thumbnail_id( $post->ID );
                    $imgDestacada = wp_get_attachment_image_src( $thumbID, 'thumbnail' );
                    
                    echo '<img src="'.$imgDestacada[0].'" alt="'.$title.'" title="'.$title.'">';
                ?>
            </a>
        </div>
        <div class="blog_content">
            <div class="blog_titles">
                <small><?php echo $categorias; ?></small>
                <a href="<?php the_permalink(); ?>" class="exit" title="<?php echo $title; ?>">
                    <h3><?php echo $title; ?></h3>
                </a>
            </div>
            <a href="<?php the_permalink(); ?>" class="exit" title="<?php echo $title; ?>">
                VER MÁS <i class="gg-arrow-long-right"></i>
            </a>
        </div>
    </div>
    
    <?php endif; ?>
    
    <?php endwhile;endif; ?>
</div>