<?php
/*
    Template name: politicas-privacidad
*/

get_header();
?>


    <section class="privacy_policies">
        <div class="contenedor">
            <div class="page_crumb">
                <span><a href="<?php echo esc_url(home_url('/'));?>" class="exit" title="Inicio">Inicio</a></span>
                <i class="gg-chevron-right"></i>
                <span><?php the_title(); ?></span>
            </div>
            <div class="body_content">
                <div class="title">
                    <h1>Política de <b>Privacidad</b></h1>
                </div>
                <h2 class="h2 entry_name">Contenido:</h2>
                <div class="description">
                    <p>Última actualización: Setiembre 2022</p>
                    <p>Desde INVITRO AGENCIA DIGITAL tratamos los datos personales con respeto y sensibilidad.</p>
                    <p>Esta política de privacidad junto con el aviso legal, política de cookies, y cualquier otra política a la que se haga referencia, identifica cómo se recopilan y procesan los datos personales que se reciben en este sitio web.</p>
                    <p>La información que se encuentra en este sitio web no está dirigida a niños. Se entenderá por niño lo que la ley de la jurisdicción donde se encuentre así lo defina, en el caso de Perú es alguien menor a 12 años. Si el usuario cree que algún niño ha proporcionado sus datos personales en este sitio web sin el consentimiento de los padres, deberá escribir a agencia@invitro.pe</p>
                    <p>Si el usuario tiene menos de 12 años, deberá tener la autorización de sus padres o tutores legales para entregar sus datos personales. INVITRO AGENCIA DIGITAL no tiene manera de comprobar efectivamente la edad de los usuarios, por lo que queda eximida de cualquier responsabilidad, si el usuario no cumple con lo aquí indicado.</p>
                </div>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
            <a href="<?php echo esc_url(home_url('/'));?>" class="custom blue exit" title="Inicio">
                <p>Volver a inicio</p>
                <div>
                    <img src="<?php echo IMG;?>/large-arrow.svg">
                </div>
            </a>
        </div>
    </section>



<?php get_footer(); ?>