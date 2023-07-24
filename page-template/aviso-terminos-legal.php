<?php
/*
    Template name: terminos-legal
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
                    <h1>Aviso legal y <b>Términos de uso</b></h1>
                </div>
                <h2 class="h2 entry_name">Contenido:</h2>
                <div class="description">
                    <p>Última actualización: Setiembre 2022</p>
                    <p>Podemos garantizarte que te encuentras en un espacio 100 % seguro, para ello debes saber que al navegar en estas páginas estás aceptando los siguientes términos y condiciones:</p>
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