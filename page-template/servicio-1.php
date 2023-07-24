<?php
/*
    Template name: servicio-1
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
                        <span>Desarrollo y diseño web</span>
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
            <a href="#proyecto1" class="proyecto popup-with-zoom-anim" title="KAITS CONSULTING">
                <img src="<?php echo IMG;?>/services/P-KAITS.jpg" loading="lazy" title="Diseño web para Kaits" alt="Diseño web para Kaits">
                <h3>KAITS CONSULTING</h3>
            </a>
            <a href="#proyecto2" class="proyecto popup-with-zoom-anim" title="SCI CONSTRUCTORA">
                <img src="<?php echo IMG;?>/services/macconfondo2.jpg" loading="lazy" title="Desarrollo y diseño para Bavaria" alt="Desarrollo y diseño para Bavaria">
                <h3>SCI CONSTRUCTORA</h3>
            </a>
            <a class="proyecto popup-with-zoom-anim" title="PRESTIGE AVOCADOS">
                <img src="<?php echo IMG;?>/services/P-PRESTIGE.jpg" loading="lazy" title="PRESTIGE AVOCADOS" alt="PRESTIGE AVOCADOS">
                <h3>PRESTIGE AVOCADOS</h3>
            </a>
        </div>
    </div>
</section>

<!-- POPUPS PROYECTOS -->
<div id="proyecto1" class="zoom-anim-dialog mfp-hide popup popup-proyecto">
    <div class="first_section pt-4">
        <div class="container box_title">
            <h2>
                <span>Proyecto</span>SITIO WEB <br>KAITS CONSULTING
            </h2>
            <p>
                <span>SERVICIO</span>Diseño de sitio web
            </p>
        </div>
        <div class="container container-side side-right box_description">
            <div class="row aistart">
                <div class="content_project">
                    <span class="nro"><b>01.</b>RETO</span>
                    <p>
                        Kaits Consulting Group S.A.C. es una firma de Inteligencia de Negocios y Analítica de datos, fundada en mayo del 2014.
                        <br><br>
                        En esta oportunidad realizamos su sitio web corporativo.
                    </p>
                </div>
                <div class="image_project">
                    <img src="<?php echo IMG;?>/popups/P-KAITS.jpg" title="Diseño web para Kaits" alt="Diseño web para Kaits">
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
                        <img src="<?php echo IMG;?>/popups/KAITS-3.jpg" alt="Funcionalidad amigable" title="Funcionalidad amigable">
                    </div>
                    <div class="image image_2">
                        <img src="<?php echo IMG;?>/popups/KAITS-4.jpg" alt="Experiencia de usuario" title="Experiencia de usuario">
                    </div>
                    <div class="image image_3">
                        <img src="<?php echo IMG;?>/popups/KAITS-3.jpg" alt="Funcionalidad amigable" title="Funcionalidad amigable">
                    </div>
                </div>
                <div class="tabs_content">
                    <div class="tab tab_1 active">
                        <h3>Estructura personalizada.</h3>
                        <p>Trabajamos con Kaits Consulting el diseño de su sitio web distribuida en 4 secciones, tomando en cuenta su línea y colocando como protagonista el isotipo de la marca.</p>
                    </div>
                    <div class="tab tab_2">
                        <h3>Funcionalidad amigable.</h3>
                        <p>El sitio web permite visualizar todas las secciones de manera rápida.</p>
                    </div>
                    <div class="tab tab_3">
                        <h3>Experiencia de usuario.</h3>
                        <p>El sitio web debe mostrar los deferentes servicios de manera dinámica y dar la posibilidad a los usuarios de interactuar con estos de la mejor manera.</p>
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
                    <h4>Web Corporativa 100% administrable</h4>
                    <p>Diseño en base a línea gráfica en la cual se puede visualizar los proyectos realizados por la empresa y los servicios. La interfaz tiene un estilo minimalista y elegante lo que le da profesionalismo y ese no sé qué que la resalta entre su competencia.</p>
                </div>
                <div class="image">
                    <img src="<?php echo IMG;?>/popups/KAITS-1.jpg" alt="Web Corporativa 100% administrable" title="Web Corporativa 100% administrable">
                </div>
            </div>
        </div>
        <div class="container container-side side-left">
            <div class="row">
                <div class="image">
                    <img src="<?php echo IMG;?>/popups/KAITS-5.jpg" alt="UX (Experiencia del usuario)" title="UX (Experiencia del usuario)">
                </div>
                <div class="description">
                    <h4>UX (Experiencia del usuario)</h4>
                    <p>El usuario puede acceder a los diferentes servicios. Además los recursos cargan de manera rápida facilitando la lectura de los usuarios y, por ende, una mejor experiencia.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="proyecto2" class="zoom-anim-dialog mfp-hide popup popup-proyecto">
    <div class="first_section pt-4">
        <div class="container box_title">
            <h2>
                <span>Proyecto</span>SITIO WEB <br>CONSTRUCTORA SCI
            </h2>
            <p>
                <span>SERVICIO</span>Diseño de sitio web
            </p>
        </div>
        <div class="container container-side side-right box_description">
            <div class="row aistart">
                <div class="content_project">
                    <span class="nro"><b>01.</b>RETO</span>
                    <p>
                        Constructora SCI tiene más de 33 años de experiencia en el mercado. En esta oportunidad recurrieron a nosotros para la realización de su sitio web no solo permita brindar información de la marca al cliente; sino también, que la experiencia de este sea la más placentera posible.
                    </p>
                </div>
                <div class="image_project">
                    <img src="<?php echo IMG;?>/popups/sci6.jpg" alt="SCI" title="SCI">
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
                        <img src="<?php echo IMG;?>/popups/macconfondo1.jpg" alt="Estructura personalizada" title="Estructura personalizada">
                    </div>
                    <div class="image image_2">
                        <img src="<?php echo IMG;?>/popups/macconfondo2.jpg" alt="Desarrollo y diseño para Bavaria" title="Desarrollo y diseño para Bavaria">
                    </div>
                    <div class="image image_3">
                        <img src="<?php echo IMG;?>/popups/macconfondo3.jpg" alt="Experiencia de usuario" title="Experiencia de usuario">
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
                    <h4>Web Corporativa 100% administrable</h4>
                    <p>Diseño en base a línea gráfica en la cual se puede visualizar los proyectos realizados por la empresa y los servicios. La interfaz tiene un estilo minimalista y elegante lo que le da profesionalismo y ese no sé qué que la resalta entre su competencia.</p>
                </div>
                <div class="image">
                    <img src="<?php echo IMG;?>/popups/sci.jpg" alt="Desarrollo de sitio web SCI" title="Desarrollo de sitio web SCI">
                </div>
            </div>
        </div>
        <div class="container container-side side-left">
            <div class="row">
                <div class="image">
                    <img src="<?php echo IMG;?>/popups/sci2.jpg" alt="UX (Experiencia del usuario)" title="UX (Experiencia del usuario)">
                </div>
                <div class="description">
                    <h4>UX (Experiencia del usuario)</h4>
                    <p>El usuario puede acceder a los diferentes servicios. Además los recursos cargan de manera rápida facilitando la lectura de los usuarios y, por ende, una mejor experiencia.</p>
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
                                <span>TU WEB</span>
                                <span>PERSONALIZADA</span>
                            </h2>
                            <p>De acuerdo a las necesidades de tu empresa.</p>
                            <a href="<?php echo esc_url(home_url('contactanos'));?>" class="custom blue">
                                <p>¡Quiero mi campaña!</p>
                                <div>
                                    <img src="<?php echo IMG;?>/large-arrow.svg" title="Large Icon Arrow" alt="Large Icon Arrow">
                                </div>
                            </a>
                        </div>
                        <div class="web_preview">
                            <img src="<?php echo IMG;?>/services/img-122.png" title="Web Personalizada" alt="Web Personalizada">
                        </div>
                    </li>
                    <li class="splide__slide web">
                        <div class="web_content">
                            <h2>
                                <span>WEB</span>
                                <span>E-COMMERCE</span>
                            </h2>
                            <p>Posiciona tu empresa y genera conversiones.</p>
                            <a href="<?php echo esc_url(home_url('contactanos'));?>" class="custom blue">
                                <p>¡Quiero mi campaña!</p>
                                <div>
                                    <img src="<?php echo IMG;?>/large-arrow.svg" title="Large Icon Arrow" alt="Large Icon Arrow">
                                </div>
                            </a>
                        </div>
                        <div class="web_preview">
                            <img src="<?php echo IMG;?>/services/img-123.png" title="Web E-commerce" alt="Web E-commerce">
                        </div>
                    </li>
                    <li class="splide__slide web">
                        <div class="web_content">
                            <h2>
                                <span>WEB</span>
                                <span>INFORMATIVA</span>
                            </h2>
                            <p>Da a conocer tu negocio en los principales buscadores.</p>
                            <a href="<?php echo esc_url(home_url('contactanos'));?>" class="custom blue">
                                <p>¡Quiero mi campaña!</p>
                                <div>
                                    <img src="<?php echo IMG;?>/large-arrow.svg" title="Large Icon Arrow" alt="Large Icon Arrow">
                                </div>
                            </a>
                        </div>
                        <div class="web_preview">
                            <img src="<?php echo IMG;?>/services/img-124.png" title="Web Informativa" alt="Web Informativa">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>

<script src="<?php echo JS;?>/tlservices.js"></script>