<?php
/*
    Template name: politicas-cookie
*/

get_header();
?>

    <style>.content h3:not(:first-child){margin-left: -48px;}</style>

    <section class="privacy_policies">
        <div class="contenedor">
            <div class="page_crumb">
                <span><a href="<?php echo esc_url(home_url('/'));?>" class="exit" title="Inicio">Inicio</a></span>
                <i class="gg-chevron-right"></i>
                <span><?php the_title(); ?></span>
            </div>
            <div class="body_content">
                <div class="title">
                    <h1>Política de <b>Cookies</b></h1>
                </div>
                <h2 class="h2 entry_name">Contenido:</h2>
                <div class="description">
                    <p>Última actualización: Setiembre 2022</p>
                    <p>En INVITRO AGENCIA DIGITAL, como responsables de esta web, nos hemos esmerado en cumplir con la normativa referente a las cookies, no obstante, teniendo en cuenta la forma en que funciona internet y los sitios web, no siempre es posible contar con información actualizada de las cookies que terceras partes puedan utilizar a través de este sitio web.</p>
                    <p>Esto se aplica especialmente a casos en los que esta página web contiene elementos integrados: es decir, textos, documentos, imágenes o breves películas que se almacenan en otra parte, pero se muestran en nuestro sitio web.</p>
                    <p>Por consiguiente, en caso de que te encuentres con este tipo de cookies en este sitio web y no estén enumeradas en la lista siguiente, por favor, no dudes en comunicarlo a agencia@invitro.pe. También puedes ponerte en contacto directamente con el tercero para pedirle información sobre las cookies que coloca, la finalidad y la duración de la cookie, y cómo ha garantizado su privacidad.</p>
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