<?php
/*
    Template name: servicio-2
*/

get_header();
?>

<main class="main dark services">
    <section class="hero">
        <div class="contenedor contenedor-lado">
            <div class="row">
                <div class="col-custom-left">
                    <div class="page_crumb">
                        <span>Inicio</span>
                        <i class="gg-chevron-right"></i>
                        <span>Publicidad digital</span>
                    </div>
                    <div class="page_content">
                        <div class="page_title"><?php echo get_field('titulo_seccion_hero')?></div>
                        <p><?php echo get_field('descripcion_seccion_hero')?></p>
                        <a href="<?php echo esc_url(home_url('contactanos'));?>" class="custom skyblue black-color" title="Contáctanos">
                            <p>¡Quiero contactarme!</p>
                            <div>
                                <svg viewBox="0 0 271 179" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M190 179C188 179 184 179 182 177C178 173 178 167 182 163L248 97C252 93 252 87 248 83L182 17C178 13 178 7 182 3C186 -1 192 -1 196 3L262 69C274 81 274 99 262 111L196 177C196 179 194 179 190 179Z"/>
                                    <path d="M250 99H10C4 99 0 95 0 89C0 83 4 79 10 79H250C256 79 260 83 260 89C260 95 256 99 250 99Z"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-custom-right">
                    <div class="page_img_hero">
                        <div class="splide without-shadow" role="group" id="serviceshero">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <?php if(have_rows('slider_images')): while(have_rows('slider_images')): the_row(); ?>
                                    <li class="splide__slide">
                                        <img 
                                        src="<?php echo get_sub_field('image')['url']?>" 
                                        alt="<?php echo get_sub_field('image')['alt']?>"
                                        title="<?php echo get_sub_field('image')['title']?>"
                                        loading="lazy">
                                    </li>
                                    <?php endwhile;endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('inc/arrow');?>
    </section>
</main>

<section class="features scn_sec">
    <div class="contenedor">
        <?php $class = ['odd','even']; $n = 0;
        if(have_rows('caracteristica')): while(have_rows('caracteristica')): the_row(); ?>
        
        <?php $c = $class[$n % 2]; ?>
        
        <?php if($c == 'even'):?>
        
        <div class="row <?php echo $c;?>">
            <div class="col-half">
                <div class="box_image">
                    <img 
                    src="<?php echo get_sub_field('imagen_seccion_caracteristica')['url']; ?>" 
                    alt="<?php echo get_sub_field('imagen_seccion_caracteristica')['alt']; ?>"
                    title="<?php echo get_sub_field('imagen_seccion_caracteristica')['title']; ?>"
                    loading="lazy">
                </div>
            </div>
            <div class="col-half">
                <div class="box_content">
                    <h2><?php echo get_sub_field('titulo_seccion_caracteristicas'); ?></h2>
                    <p><?php echo get_sub_field('descripcion_seccion_caracteristica'); ?></p>
                    <a href="<?php echo esc_url(home_url('contactanos'));?>" class="custom blue" title="Contáctanos">
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
        </div>
        
        <?php else: ?>
        
        <div class="row <?php echo $c;?>">
            <div class="col-half">
                <div class="box_content">
                    <h2><?php echo get_sub_field('titulo_seccion_caracteristicas'); ?></h2>
                    <p><?php echo get_sub_field('descripcion_seccion_caracteristica'); ?></p>
                    <a href="<?php echo esc_url(home_url('contactanos'));?>" class="custom blue" title="Contáctanos">
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
                    src="<?php echo get_sub_field('imagen_seccion_caracteristica')['url']; ?>" 
                    alt="<?php echo get_sub_field('imagen_seccion_caracteristica')['alt']; ?>"
                    title="<?php echo get_sub_field('imagen_seccion_caracteristica')['title']; ?>"
                    loading="lazy">
                </div>
            </div>
        </div>
        
        <?php endif; ?>
        
        <?php $n++; endwhile;endif; ?>
    </div>
</section>

<section class="offers">
    <div class="contenedor">
        <h2><strong>Servicios</strong> que ofrecemos</h2>
        <ul>    
            <?php if(have_rows('servicios')): while(have_rows('servicios')): the_row(); ?>
            <li><?php echo get_sub_field('servicio'); ?></li>
            <?php endwhile;endif; ?>
        </ul>
    </div>
</section>

<section class="portafolio center-vertical">
    <div class="contenedor">
        <h2>Portafolio</h2>
        <div class="proyectos">
            <a href="#proyecto1" class="proyecto popup-with-zoom-anim" title="SOLVENTA">
                <img src="<?php echo IMG;?>/services/img-132.jpg" title="SOLVENTA" alt="SOLVENTA">
                <h3>SOLVENTA</h3>
            </a>
            <a class="proyecto popup-with-zoom-anim" title="GRM">
                <img src="<?php echo IMG;?>/services/img-131.jpg" title="Campaña en Facebook ads" alt="Campaña en Facebook ads">
                <h3>GRM</h3>
            </a>
            <a class="proyecto popup-with-zoom-anim" title="CRECIENDO BIEN">
                <img src="<?php echo IMG;?>/services/img-133.jpg" title="Campaña en Facebook ads" alt="Campaña en Facebook ads">
                <h3>CRECIENDO BIEN</h3>
            </a>
        </div>
    </div>
</section>

<!-- POPUPS PROYECTOS -->
<div id="proyecto1" class="zoom-anim-dialog mfp-hide popup popup-proyecto">
    <div class="first_section pt-4">
        <div class="container box_title">
            <h2>
                <span>Proyecto</span>CAMPAÑA INTEGRADA RRSS SOLVENTA
            </h2>
            <p>
                <span>SERVICIO</span>Campaña integrada de redes sociales
            </p>
        </div>
        <div class="container container-side side-right box_description">
            <div class="row aistart">
                <div class="content_project">
                    <span class="nro"><b>01.</b>RETO</span>
                    <p>
                        Solventa, empresa encargada de elaborar software de gestión para todo tipo de rubro de negocio. Tuvimos el agrado de ser parte del desarrollo de su campaña integrada de redes de 4 fases, la cual estaba enfocada en los emprendedores que buscan una manera fácil y rápida para poder controlar los ingresos, costes y ganancias.
                    </p>
                </div>
                <div class="image_project">
                    <img src="<?php echo IMG;?>/popups/P-SOLVENTA.jpg" alt="Solventa" title="Solventa">
                </div>
            </div>
        </div>
    </div>
    <div class="second_section">
        <div class="container">
            <span class="nro"><b>02.</b>SOLUCIÓN</span>
            <div class="tabs_box">
                <div class="tabs_images">
                    <div class="image image_1 active">
                        <video controls>
                            <source src="<?php echo IMG;?>/popups/SOLVENTA.mp4" type="video/mp4">
                            Your browser does not support HTML video.
                        </video>
                    </div>
                    <div class="image image_2">
                        <video controls>
                            <source src="<?php echo IMG;?>/popups/SOLVENTA-2.mp4" type="video/mp4">
                            Your browser does not support HTML video.
                        </video>
                    </div>
                    <div class="image image_3">
                        <img src="<?php echo IMG;?>/popups/21-04.jpg" alt="Funcionalidad amigable" title="Funcionalidad amigable">
                    </div>
                </div>
                <div class="tabs_content">
                    <div class="tab tab_1 active">
                        <h3>Estructura personalizada.</h3>
                        <p>Trabajamos con Kaits Consulting el diseño de su sitio web distribuida en 4 secciones, tomando en cuenta su línea y colocando como protagonista el isotipo de la marca.</p>
                    </div>
                    <div class="tab tab_2">
                        <h3>Funcionalidad amigable.</h3>
                        <p>El sitio web permite visualizar todas las secciones de manera rápida. ​</p>
                    </div>
                    <div class="tab tab_3">
                        <h3>Experiencia de usuario.</h3>
                        <p>El sitio web debe mostrar los deferentes servicios de manera dinámica y dar la posibilidad a los usuarios de interactuar con estos de la mejor manera.​</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="third_section">
        <div class="container container-side side-right">
            <div class="row">
                <div class="description">
                    <span class="nro"><b>03.</b>RESULTADOS</span>
                    <br><br>
                    <h4>Campaña integrada de redes sociales</h4>
                    <p>Construimos una campaña integrada para redes sociales que permitan comunicar los beneficios de la marca; estas se presentaron en formato audiovisual y piezas gráficas.</p>
                </div>
                <div class="image">
                    <img src="<?php echo IMG;?>/popups/SOLVENTA-1.jpg" alt="Campaña integrada de redes sociales" title="Campaña integrada de redes sociales">
                </div>
            </div>
        </div>
        <div class="container container-side side-left">
            <div class="row">
                <div class="image">
                    <img src="<?php echo IMG;?>/popups/SOLVENTA-32.jpg" alt="Campaña para redes sociales de Solventa" title="Campaña para redes sociales de Solventa">
                </div>
                <div class="description">
                    <h4>Lead Magnets</h4>
                    <p>Las diferentes piezas buscan generar leads mediante el uso de recursos gratuitos o contenido de valor para los usuarios que son adultos jóvenes emprendedores.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- POPUPS PROYECTOS -->

<section class="i_want_my_web">
    <div class="contenedor">
        <div class="splide without-shadow" role="group" id="splide_web">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide web">
                        <div class="web_content">
                            <h2>
                                <span>CREA</span>
                                <span>CAMPAÑAS</span>
                                <span>QUE GENEREN</span>
                                <span>IMPACTO</span>
                            </h2>
                            <a href="<?php echo esc_url(home_url('contactanos'));?>" class="custom blue" title="Crea campañas que generen impacto">
                                <p>¡Quiero mi campaña!</p>
                                <div>
                                    <img src="<?php echo IMG;?>/large-arrow.svg" title="Large Icon Arrow" alt="Large Icon Arrow">
                                </div>
                            </a>
                        </div>
                        <div class="web_preview">
                            <img src="<?php echo IMG;?>/services/img-134.jpg" title="Crea campañas que generen impacto" alt="Crea campañas que generen impacto">
                        </div>
                    </li>
                    <li class="splide__slide web">
                        <div class="web_content">
                            <h2>
                                <span>CREA</span>
                                <span>CAMPAÑAS</span>
                                <span>QUE GENEREN</span>
                                <span>IMPACTO</span>
                            </h2>
                            <a href="<?php echo esc_url(home_url('contactanos'));?>" class="custom blue" title="Crea campañas que generen impacto">
                                <p>¡Quiero mi campaña!</p>
                                <div>
                                    <img src="<?php echo IMG;?>/large-arrow.svg" title="Large Icon Arrow" alt="Large Icon Arrow">
                                </div>
                            </a>
                        </div>
                        <div class="web_preview">
                            <img src="<?php echo IMG;?>/services/img-135.jpg" title="Crea campañas que generen impacto" alt="Crea campañas que generen impacto">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>

<script src="<?php echo JS;?>/tlservices.js"></script>