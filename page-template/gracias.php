<?php
/*
    Template name: gracias
*/

get_header();
?>

<section class="gracias mt-header">
    <div class="contenedor">
        <div class="row">
            <div class="col-half">
                <img src="<?php echo IMG;?>/gracias/gracias1.png" loading="lazy" title="Imagen de Gracias">
            </div>
            <div class="col-half">
                <h2 class="bigger">¡Muchas gracias!</h2>
                <div class="content">
                    <p>En breve te contactaremos para empezar con tu nuevo proyecto.</p>
                    <p>¡Estás a solo un paso de potenciar tu empresa con el Gen InVitro!</p>
                    <p>Puedes seguirnos en:</p>
                    <ul class="social_network">
                        <?php get_template_part('inc/social_medias');?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>