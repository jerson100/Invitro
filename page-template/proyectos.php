<?php
/*
    Template name: proyectos
*/

get_header();
?>

<main class="main project_hero">
    <section class="hero">
        <div class="contenedor contenedor-lado side-left">
            <div class="row">
                <div class="col-custom-left">
                    <div class="page_img_hero">
                        <img 
                        src="<?php echo get_field('imagen_seccion_hero')['url'] ?>" 
                        alt="<?php echo get_field('imagen_seccion_hero')['alt'] ?>" 
                        title="<?php echo get_field('imagen_seccion_hero')['title'] ?>" 
                        class="hero_img" 
                        loading="lazy">
                    </div>
                </div>
                <div class="col-custom-right">
                    <div class="page_title">
                        <?php echo get_field('titulo_seccion_hero') ?>
                        <?php echo get_field('descripcion_seccion_hero') ?>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('inc/arrow');?>
    </section>

    <section class="projects scn_sec">
        <div class="contenedor">
            <button type="button" style="display:none" class="filter">
                Filtros <i class="gg-arrow-down-r"></i>
            </button>
            <ul class="tabs">
                <li><a title="Todos" class="all active">Todos</a></li>
                <li><a title="Desarrollo y Diseño Web" class="desarrollo">Desarrollo y Diseño Web</a></li>
                <li><a title="Publicidad Digital" class="publicidad">Publicidad Digital</a></li>
                <li><a title="Branding y Diseño Gráfico" class="branding">Branding y Diseño Gráfico</a></li>
                <li><a title="Administración de redes sociales" class="administracion">Administración de redes sociales</a></li>
            </ul>
        </div>
        <div class="contenedor contenedor-fluido-small proyectos_contenedor">
            <div class="grid grid-4 gap-0">
                
                <?php $n = 1;
                if(have_rows('proyectos')): while(have_rows('proyectos')): the_row(); ?>
                
                <?php 
                    $nombre = get_sub_field('nombre_proyecto'); 
                    
                    $arr = [];
                    if(have_rows('popups')){
                        while(have_rows('popups')){
                            the_row();
                            
                            array_push($arr, get_sub_field('nombre_del_proyecto'));
                        }
                    }
                    
                    $popup = '';
                    if(in_array($nombre, $arr)){
                        $popup = 'href="#'.strtolower(str_replace(' ','_',$nombre)).'"';
                    }
                    
                ?>
                
                <?php if($popup != ''):?>
                <a <?php echo $popup;?> class="square_project popup-with-zoom-anim" data-categoria="<?php echo get_sub_field('categoria_proyecto') ?>" title="<?php echo $nombre ?>">
                    <div>
                        <span><?php echo $nombre ?></span>
                        <p><small><?php echo get_sub_field('rubro_proyecto') ?></small></p>
                    </div>
                    <img 
                    src="<?php echo get_sub_field('imagen_proyecto')['url'] ?>" 
                    alt="<?php echo get_sub_field('imagen_proyecto')['alt'] ?>" 
                    title="<?php echo get_sub_field('imagen_proyecto')['title'] ?>" 
                    loading="lazy">
                </a>
                <?php endif;?>
                
                <?php $n++; endwhile;endif; ?>
                
            </div>
        </div>
    </section>
</main>


<?php get_template_part('inc/section_tell_us');?>
    
    
<!-- POPUPS PROYECTOS -->
<?php if(have_rows('popups')): while(have_rows('popups')): the_row(); 

$nombre = get_sub_field('nombre_del_proyecto');
?>
  
<div id="<?php echo strtolower(str_replace(' ','_',$nombre)) ?>" class="zoom-anim-dialog mfp-hide popup popup-proyecto">
    <div class="first_section pt-4">
        <div class="container box_title">
            <?php echo get_sub_field('titulo'); ?>
            <p>
                <span>SERVICIO</span><?php echo get_sub_field('nombre_servicio'); ?>
            </p>
        </div>
        
        <?php if(have_rows('primera_seccion')): while(have_rows('primera_seccion')): the_row(); ?>
        <div class="container container-side side-right box_description">
            <div class="row aistart">
                <div class="content_project">
                    <span class="nro"><b>01.</b>RETO</span>
                    <?php echo get_sub_field('descripcion_primero'); ?>
                </div>
                <div class="image_project">
                    <img 
                    src="<?php echo get_sub_field('imagen_primero')['url']; ?>" 
                    alt="<?php echo get_sub_field('imagen_primero')['alt']; ?>" 
                    title="<?php echo get_sub_field('imagen_primero')['title']; ?>" 
                    loading="lazy">
                </div>
            </div>
        </div>
        <?php endwhile;endif; ?>
        
    </div>
    
    <?php if(have_rows('segunda_seccion')): while(have_rows('segunda_seccion')): the_row(); ?>
    <div class="second_section">
        <div class="container">
            <span class="nro"><b>02.</b>SOLUCIÓN</span>
            <div class="tabs_box">
                <div class="tabs_images">
                    <?php $y = 1;
                    if(have_rows('tabs')): while(have_rows('tabs')): the_row(); ?>
                    
                    <?php 
                        $class = '';
                        if($y==1){$class = 'active';}
                    ?>
                    
                    <div class="image image_<?php echo $y.' '.$class;?>">
                        <img 
                        src="<?php echo get_sub_field('imagen_segundo')['url'];?>" 
                        alt="<?php echo get_sub_field('imagen_segundo')['alt'];?>" 
                        title="<?php echo get_sub_field('imagen_segundo')['title'];?>" 
                        loading="lazy">
                    </div>
                    <?php $y++; endwhile;endif; ?>
                </div>
                <div class="tabs_content">
                    <?php $x = 1;
                    if(have_rows('tabs')): while(have_rows('tabs')): the_row(); ?>
                    
                    <?php 
                        $class = '';
                        if($x==1){$class = 'active';}
                    ?>
                    
                    <div class="tab tab_<?php echo $x.' '.$class;?>">
                        <h3><?php echo get_sub_field('titulo_segundo') ?></h3>
                        <p><?php echo get_sub_field('descripcion_segundo') ?></p>
                    </div>
                    <?php $x++; endwhile;endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile;endif; ?>
    
    <?php if(have_rows('tercera_seccion')): while(have_rows('tercera_seccion')): the_row(); ?>
    <?php if(get_sub_field('descripcion_p') != ''): ?>
    
    <div class="third_section">
        <div class="container container-side side-right">
            <div class="row">
                <div class="description">
                    <span class="nro"><b>03.</b>RESULTADOS</span>
                    <br><br>
                    <?php echo get_sub_field('descripcion_p') ?>
                </div>
                <div class="image">
                    <img 
                    src="<?php echo get_sub_field('imagen_p')['url'] ?>" 
                    alt="<?php echo get_sub_field('imagen_p')['alt'] ?>" 
                    title="<?php echo get_sub_field('imagen_p')['title'] ?>" 
                    loading="lazy">
                </div>
            </div>
        </div>
        <div class="container container-side side-left">
            <div class="row">
                <div class="image">
                    <img 
                    src="<?php echo get_sub_field('imagen_s')['url'] ?>" 
                    alt="<?php echo get_sub_field('imagen_s')['alt'] ?>" 
                    title="<?php echo get_sub_field('imagen_s')['title'] ?>" 
                    loading="lazy">
                </div>
                <div class="description">
                    <?php echo get_sub_field('descripcion_s') ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endwhile;endif; ?>
</div>    

<?php endwhile;endif; ?>
<!-- POPUPS PROYECTOS -->


<?php get_footer(); ?>

<script src="<?php echo JS;?>/tlprojects.js"></script>