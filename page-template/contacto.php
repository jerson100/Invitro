<?php
/*
    Template name: contacto
*/

get_header();
?>


<section class="we_can_help_you center-vertical">
    <div class="contenedor">
        <div class="row">
            <div class="col-half">
                <?php echo get_field('titulo_seccion_info')?>
                <p class="toleft">¡Hagamos de tu proyecto una realidad!</p>
                <div class="supports">
                    <p class="toleft">Escríbenos si:</p>
                    <div class="reasons">
                        
                        <?php if(have_rows('apoyos')): while(have_rows('apoyos')): the_row(); ?>
                        <div>
                            <img 
                            src="<?php echo get_sub_field('imagen_apoyo')['url'] ?>" 
                            alt="<?php echo get_sub_field('imagen_apoyo')['alt'] ?>" 
                            title="<?php echo get_sub_field('imagen_apoyo')['title'] ?>" 
                            loading="lazy">
                            <p><?php echo get_sub_field('descripcion_apoyo') ?></p>
                        </div>
                        <?php endwhile;endif; ?>
                        
                    </div>
                </div>
            </div>
            <div class="col-half">
                <img 
                src="<?php echo get_field('imagen_seccion_info')['url'] ?>" 
                alt="<?php echo get_field('imagen_seccion_info')['alt'] ?>" 
                title="<?php echo get_field('imagen_seccion_info')['title'] ?>" 
                class="map"
                loading="lazy">
            </div>
        </div>
    </div>
    <?php get_template_part('inc/arrow');?>
</section>

<?php get_template_part('inc/section_tell_us');?>

<section class="contactanos center-vertical">
    <div class="contenedor">
        <div class="row">
            <div class="col-half-mini txt">
                <?php echo get_field('titulo_seccion_contacto')?>
                <?php echo get_field('descripcion_seccion_contacto')?>
                <ul class="social_network dark">
                    <?php get_template_part('inc/social_medias');?>
                </ul>
            </div>
            <div class="col-half-mini hand">
                <img 
                src="<?php echo get_field('imagen_seccion_contacto')['url'] ?>" 
                alt="<?php echo get_field('imagen_seccion_contacto')['alt'] ?>" 
                title="<?php echo get_field('imagen_seccion_contacto')['title'] ?>" 
                loading="lazy">
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>

<script src="<?php echo JS;?>/tlcontacto.js"></script>