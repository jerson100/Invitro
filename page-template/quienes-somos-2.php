<?php
/*
    Template name: nosotros-2
*/

get_header();
?>

<section class="mt-header we_are bg_degraded_blue">
    <img src="<?php echo IMG;?>/fondohero.png" class="bg" alt="Imagen de fondo" title="Imagen de fondo">
    <section class="photos">
        <div class="contenedor">
            <div class="row">
                <div class="col-half txt">
                    <?php echo get_field('titulo_seccion_hero')?>
                    <p><?php echo get_field('descripcion_seccion_hero')?></p>
                </div>
                <div class="col-half">
                    <div class="collection">
                        <?php $n = 1;
                            if(have_rows('fotos_seccion_hero')): while(have_rows('fotos_seccion_hero')): the_row(); ?>
                            <img 
                            src="<?php echo get_sub_field('foto')['url']?>" 
                            title="<?php echo get_sub_field('foto')['title']?>" 
                            alt="<?php echo get_sub_field('foto')['alt']?>" 
                            class="photo photo-<?php echo $n;?>" 
                            loading="lazy">
                        <?php $n++;
                            endwhile;endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="years">
        <div class="contenedor">
            <div class="fila">
                <img 
                src="<?php echo IMG;?>/quienes_somos/img-214.png" 
                class="img_l" 
                alt="InVitro Agencia Digital" 
                title="InVitro Agencia Digital" 
                loading="lazy">
                <img 
                src="<?php echo IMG;?>/quienes_somos/img-215.png" 
                class="img_r" 
                alt="9 años creando experiencias" 
                title="9 años creando experiencias" 
                loading="lazy">
            </div>
        </div>
        <div class="contenedor mt center-vertical">
            <h2>Disruptivos de nacimiento</h2>
        </div>
    </section>
</section>

<section class="h100vh center-vertical why_invitro">
    <div class="contenedor">
        <div class="row">
            <div class="col-half">
                <?php echo get_field('titulo_seccion_porque_invitro')?>
                <?php echo get_field('descripcion_seccion_porque_invitro')?>
            </div>
            <div class="col-half">
                <div class="splide without-shadow" role="group" id="splidewhy">
                    <div class="splide__track">
                    	<ul class="splide__list">
                    	    <?php if(have_rows('proceso_seccion_porque_invitro')): while(have_rows('proceso_seccion_porque_invitro')): the_row(); ?>
                    	        <li class="splide__slide">
                    	            <img 
                    	            src="<?php echo get_sub_field('imagen')['url']?>" 
                    	            alt="<?php echo get_sub_field('imagen')['alt']?>" 
                    	            title="<?php echo get_sub_field('imagen')['title']?>" 
                    	            loading="lazy">
                    	        </li>
                    	    <?php endwhile;endif; ?>
                    	</ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="h100vh sticky interests">
    <div class="contenedor">
        <div class="row aistart">
            <div class="col-half trigger_interests_1">
                
                <?php $m = 1;
                if(have_rows('intereses_seccion_interes')): while(have_rows('intereses_seccion_interes')): the_row(); ?>
                
                <div class="column boxes bi_<?php echo $m?>">
                    <div class="box_interest">
                        <div class="image_interest">
                            <img 
                            src="<?php echo get_sub_field('logo') ?>" 
                            alt="<?php echo get_sub_field('subtitulo') ?>" 
                            title="<?php echo get_sub_field('subtitulo') ?>" 
                            loading="lazy">
                        </div>
                        <div class="content_interest">
                            <h3 data-number="0<?php echo $m?>"><?php echo get_sub_field('subtitulo') ?></h3>
                            <p><?php echo get_sub_field('descripcion') ?></p>
                        </div>
                    </div>
                </div>
                
                <?php $m++;
                endwhile;endif; ?>
                
            </div>
            <div class="col-half trigger_interests_2">
                <div class="column">
                    <?php echo get_field('titulo_seccion_interes')?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="h100vh sticky in_love">
    <div class="contenedor">
        <div class="row aistart">
            <div class="col-half trigger_in_love_1">
                <div class="column">
                    <?php echo get_field('titulo_seccion_amar')?>
                </div>
            </div>
            <div class="col-half trigger_in_love_2">
                
                <?php $m = 1;
                if(have_rows('razones_de_amarnos_seccion_amar')): while(have_rows('razones_de_amarnos_seccion_amar')): the_row(); ?>
                
                <div class="column boxes bil_<?php echo $m?>">
                    <div class="box_interest">
                        <div class="image_interest">
                            <img 
                            src="<?php echo get_sub_field('logo') ?>" 
                            alt="<?php echo get_sub_field('subtitulo') ?>" 
                            title="<?php echo get_sub_field('subtitulo') ?>" 
                            loading="lazy">
                        </div>
                        <div class="content_interest">
                            <h3 data-number="0<?php echo $m?>"><?php echo get_sub_field('subtitulo') ?></h3>
                            <p><?php echo get_sub_field('descripcion') ?></p>
                        </div>
                    </div>
                </div>
                
                <?php $m++;
                endwhile;endif; ?>
                
            </div>
        </div>
    </div>
</section>

<section class="team">
    <section class="awards center-vertical">
        <div class="contenedor">
            <div class="row">
                <div class="col-custom-left">
                    <?php echo get_field('titulo_seccion_reconocimiento')?>
                    <p><?php echo get_field('descripcion_seccion_reconocimiento')?></p>
                </div>
                <div class="col-custom-right">
                    <img 
                    src="<?php echo get_field('imagen_seccion_reconocimiento')['url'] ?>" 
                    alt="<?php echo get_field('imagen_seccion_reconocimiento')['alt'] ?>" 
                    title="<?php echo get_field('imagen_seccion_reconocimiento')['title'] ?>" 
                    loading="lazy">
                </div>
            </div>
        </div>
    </section>
    <section class="members">
        <div class="contenedor">
            <div class="meet_us">
                <?php echo get_field('titulo_seccion_equipo')?>
                <p><?php echo get_field('descripcion_seccion_equipo')?></p>
                <div class="grid grid-3">
                    
                    <?php if(have_rows('equipo_seccion_equipo')): while(have_rows('equipo_seccion_equipo')): the_row(); ?>
                    
                    <div class="member_card">
                        <div class="photo_member">
                            <div>
                                <img 
                                src="<?php echo get_sub_field('foto_original') ?>" 
                                alt="<?php echo get_sub_field('nombre')?>" 
                                title="<?php echo get_sub_field('nombre')?>" 
                                loading="lazy">
                            </div>
                            <div>
                                <img 
                                src="<?php echo get_sub_field('foto_hover') ?>" 
                                alt="<?php echo get_sub_field('nombre')?>" 
                                title="<?php echo get_sub_field('nombre')?>" 
                                loading="lazy">
                            </div>
                        </div>
                        <div class="info_member">
                            <h3><?php echo get_sub_field('nombre')?></h3>
                            <p><?php echo get_sub_field('cargo')?></p>
                        </div>
                    </div>
                    
                    <?php endwhile;endif; ?>

                </div>
            </div>

            <div class="our_media">
                <p>Puedes conocer un poco más de cada uno en nuestras redes:</p>
                <ul class="social_network">
                    <?php get_template_part('inc/social_medias');?>
                </ul>
            </div>
        </div>
    </section>
</section>

<?php 

get_template_part('inc/section_trusted_us');
get_template_part('inc/section_tell_us');
get_footer();

?>

<script src="<?php echo JS;?>/tlsomos.js"></script>