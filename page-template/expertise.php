<?php
/*
    Template name: expertise
*/

get_header();
?>

<style>
    @media (max-width:400px) and (max-height:690px){
         
    }
</style>


<section class="mt-header expertise_page">
    <img src="<?php echo IMG;?>/fondohero.png" class="bg" alt="Imagen de fondo" title="Imagen de fondo">
    <section class="expertise_hero">
        <div class="contenedor">
            <div class="page_crumb white">
                <span><a href="<?php echo esc_url(home_url('/'));?>" class="exit" title="Inicio">Inicio</a></span>
                <i class="gg-chevron-right"></i>
                <span>Expertise / <?php echo get_field('nombre_pagina')?></span>
            </div>
            <div class="page_content">
                <div class="page_title">
                    <?php echo get_field('titulo_seccion_hero') ?>
                </div>
                <p class="description"><?php echo get_field('descripcion_seccion_hero') ?></p>
                <a href="#form_contact" class="custom skyblue blue-color scroll-suave" title="¡Escríbenos!">
                    <p>¡Escríbenos!</p>
                    <div>
                        <svg viewBox="0 0 271 179" xmlns="http://www.w3.org/2000/svg">
                            <path d="M190 179C188 179 184 179 182 177C178 173 178 167 182 163L248 97C252 93 252 87 248 83L182 17C178 13 178 7 182 3C186 -1 192 -1 196 3L262 69C274 81 274 99 262 111L196 177C196 179 194 179 190 179Z"/>
                            <path d="M250 99H10C4 99 0 95 0 89C0 83 4 79 10 79H250C256 79 260 83 260 89C260 95 256 99 250 99Z"/>
                        </svg>
                    </div>
                </a>
            </div>
            <?php get_template_part('inc/arrow');?>
        </div>
    </section>
    <section class="companies">
        <div class="contenedor">
            <?php echo get_field('titulo_seccion_trabajamos') ?>
            <div class="splide without-shadow" role="group" id="expertise">
                <div class="splide__track">
            		<ul class="splide__list">
            		    <?php if(have_rows('empresas_trabajamos')): while(have_rows('empresas_trabajamos')): the_row(); ?>
                    	    <li class="splide__slide">
                    	        <img 
                    	        src="<?php echo get_sub_field('logo')['url'] ?>" 
                    	        title="<?php echo get_sub_field('logo')['title'] ?>" 
                    	        alt="<?php echo get_sub_field('logo')['alt'] ?>" 
                    	        loading="lazy">
                    	    </li>
                    	<?php endwhile;endif; ?>
            		</ul>
                </div>
            </div>
        </div>
    </section>
</section>

<section class="features scn_sec">
    <div class="contenedor">
        <?php $class = ['odd','even']; $n = 0;
        if(have_rows('caracteristicas')): while(have_rows('caracteristicas')): the_row(); ?>
        
        <?php $c = $class[$n % 2]; ?>
        
        <div class="row <?php echo $c; ?>">
            
            <?php if($c == 'even'):?>
            
            <div class="col-half">
                <div class="box_image">
                    <img 
                    src="<?php echo get_sub_field('imagen_caracteristicas')['url'] ?>" 
                    title="<?php echo get_sub_field('imagen_caracteristicas')['title'] ?>" 
                    alt="<?php echo get_sub_field('imagen_caracteristicas')['alt'] ?>" 
                    loading="lazy">
                </div>
            </div>
            <div class="col-half">
                <div class="box_content">
                    <h2><?php echo get_sub_field('titulo_caracteristicas'); ?></h2>
                    <p><?php echo get_sub_field('descripcion_caracteristicas'); ?></p>
                    <a href="#form_contact" class="custom blue scroll-suave" title="Contáctanos">
                        <p>Quiero que me contacten</p>
                        <div>
                            <svg viewBox="0 0 271 179" xmlns="http://www.w3.org/2000/svg">
                                <path d="M190 179C188 179 184 179 182 177C178 173 178 167 182 163L248 97C252 93 252 87 248 83L182 17C178 13 178 7 182 3C186 -1 192 -1 196 3L262 69C274 81 274 99 262 111L196 177C196 179 194 179 190 179Z"/>
                                <path d="M250 99H10C4 99 0 95 0 89C0 83 4 79 10 79H250C256 79 260 83 260 89C260 95 256 99 250 99Z"/>
                            </svg>
                        </div>                            
                    </a>
                </div>
            </div>
            
            <?php else: ?>
            
            <div class="col-half">
                <div class="box_content">
                    <h2><?php echo get_sub_field('titulo_caracteristicas'); ?></h2>
                    <p><?php echo get_sub_field('descripcion_caracteristicas'); ?></p>
                    <a href="#form_contact" class="custom blue scroll-suave" title="Contáctanos">
                        <p>Quiero que me contacten</p>
                        <div>
                            <svg viewBox="0 0 271 179" xmlns="http://www.w3.org/2000/svg">
                                <path d="M190 179C188 179 184 179 182 177C178 173 178 167 182 163L248 97C252 93 252 87 248 83L182 17C178 13 178 7 182 3C186 -1 192 -1 196 3L262 69C274 81 274 99 262 111L196 177C196 179 194 179 190 179Z"/>
                                <path d="M250 99H10C4 99 0 95 0 89C0 83 4 79 10 79H250C256 79 260 83 260 89C260 95 256 99 250 99Z"/>
                            </svg>
                        </div>                            
                    </a>
                </div>
            </div>
            <div class="col-half">
                <div class="box_image">
                    <img 
                    src="<?php echo get_sub_field('imagen_caracteristicas')['url'] ?>" 
                    title="<?php echo get_sub_field('imagen_caracteristicas')['title'] ?>" 
                    alt="<?php echo get_sub_field('imagen_caracteristicas')['alt'] ?>" 
                    loading="lazy">
                </div>
            </div>
            
            <?php endif; ?>
            
        </div>
        
        <?php $n++; endwhile;endif; ?>
    </div>
</section>

<section class="offers">
    <div class="contenedor">
        <?php echo get_field('titulo_seccion_servicios') ?>
        <ul>
            <?php if(have_rows('servicios')): while(have_rows('servicios')): the_row(); ?>
                <li><?php echo get_sub_field('servicio') ?></li>
            <?php endwhile;endif; ?>
        </ul>
    </div>
</section>


<?php get_template_part('inc/section_tell_us');?>


<?php get_footer(); ?>


<script src="<?php echo JS;?>/tlexpertise.js"></script>

<script>
    function blue_header(){document.querySelector('header').classList.add('blue')}
    window.onpaint = blue_header();
</script>


<script>

</script>