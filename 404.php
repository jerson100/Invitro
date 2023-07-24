<?php
/*
    Template name: template-404
*/

get_header();
?>

<section class="error-404 mt-header">
    <div class="contenedor">
        <h1>ERROR <strong>404</strong></h1>
        <img src="<?php echo IMG?>/error.png" alt="Error 404" title="Error 404" class="error">
        <a href="<?php echo esc_url(home_url('/'));?>" class="custom exit blue" title="Volver al inicio" alt="Volver al inicio">
            <p>Volver al inicio</p>
            <div>
                <img src="<?php echo IMG;?>/large-arrow.svg" loading="lazy" alt="Large Arrow Icon" title="Large Arrow Icon">
            </div>
        </a>
    </div>
</section>

<?php get_footer(); ?>