<footer id="suscribe" class="footer-page suscribe" data-bgColor="oscuro">
    <div class="contenedor">
        <div class="footer-page__content">
            <div class="footer-page__left">
                <img src="<?php echo IMG; ?>/img-8.svg" class="logo" loading="lazy"
                    alt="Logo InVitro Agencia Digital" title="Logo InVitro Agencia Digital">
                    <div>
                        <span class="footer-page__title">SÍGUENOS:</span>
                        <ul class="footer-page__social-network">
                            <?php get_template_part('inc/social_mediasLight'); ?>
                        </ul>
                    </div>
            </div>
            <div class="footer-page__right">
                <div class="footer-page__contact">
                    <span  class="footer-page__title">Contáctanos:</span>
                    <p>(51) 960 218 306 hola@invitro.pe</p>
                    <a href="#">Hablemos de tu proyecto!
                    <img src="http://localhost:8000/invitro/wp-content/themes/theme_invitro/images/arrow-right-light.svg" loading="lazy" alt="Arrow Icon" title="Arrow Icon">
                    </a>
                </div>
                <div class="footer-page__bottom">
                    <div class="footer-page__services">
                        <ul>
                            <li>
                                <a href="<?php echo esc_url(home_url('desarrollo-y-diseno-web')); ?>" title="Desarrollo y diseño web">DISEÑO Y DESARROLLO WEB</a>    
                            </li>
                            <li>
                                <a  href="<?php echo esc_url(home_url('administracion-de-redes-sociales')); ?>"
                            title="Administración de redes sociales">ADMINISTRACIÓN DE REDES SOCIALES</a>    
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('publicidad-digital')); ?>"
                            title="Publicidad digital">PUBLICIDAD DIGITAL</a>    
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('branding-y-diseno-grafico')); ?>"
                            title="Branding y diseño gráfico">BRANDING Y DISEÑO GRÁFICO</a>    
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('proyectos')); ?>"
                            title="Proyectos">PROYECTOS</a>    
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('quienes-somos')); ?>"
                            title="¿Quiénes somos?">¿QUIÉNES SOMOS?</a>    
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('clientes')); ?>" title="Clientes">CLIENTES</a>    
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('blog')); ?>" title="Blog">BLOG</a>    
                            </li>
                        </ul>
                        <div class="footer-page__form">
                        <div class="bulletin">
                    <p>SUSCRÍBETE A NUESTRO BOLETÍN MENSUAL</p>
                    <?php //echo get_field('boletin','option')?>

                    <div id="mlb2-3110037" class="ml-form-embedContainer ml-subscribe-form ml-subscribe-form-3110037">
                        <div class="ml-form-align-center">
                            <div class="ml-form-embedWrapper embedForm">
                                <div class="ml-form-embedBody ml-form-embedBodyDefault row-form">
                                    <div class="ml-form-embedContent" style="">

                                        <p></p>
                                    </div>

                                    <form class="ml-block-form"
                                        action="https://assets.mailerlite.com/jsonp/193401/forms/77830306344731782/subscribe"
                                        data-code="" method="post" target="_blank">
                                        <div class="ml-form-formContent">
                                            <div class="ml-form-fieldRow ml-last-item">
                                                <div
                                                    class="ml-field-group ml-field-email ml-validate-email ml-validate-required">
                                                   
                                                    <input aria-label="email" aria-required="true" type="email"
                                                        class="form-control" data-inputmask="" name="fields[email]"
                                                        placeholder="Email*" autocomplete="email" />
                                                </div>
                                            </div>
                                        </div>

                                        <input type="hidden" name="ml-submit" value="1" />

                                        <div class="ml-form-embedSubmit">
                                            <button type="submit" class="primary custom skyblue" style="width:100%">
                                                <p>SUSCRIBIRME</p>
                                                <div>
                                                    <svg viewBox="0 0 271 179" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M190 179C188 179 184 179 182 177C178 173 178 167 182 163L248 97C252 93 252 87 248 83L182 17C178 13 178 7 182 3C186 -1 192 -1 196 3L262 69C274 81 274 99 262 111L196 177C196 179 194 179 190 179Z" />
                                                        <path
                                                            d="M250 99H10C4 99 0 95 0 89C0 83 4 79 10 79H250C256 79 260 83 260 89C260 95 256 99 250 99Z" />
                                                    </svg>
                                                </div>
                                            </button>

                                            <button disabled="disabled" style="display: none" type="button"
                                                class="loading">
                                                <div class="ml-form-embedSubmitLoad"></div>
                                                <span class="sr-only">Loading...</span>
                                            </button>
                                        </div>

                                        <input type="hidden" name="anticsrf" value="true" />
                                    </form>
                                </div>

                                <div class="ml-form-successBody row-success" style="display: none">
                                    <div class="ml-form-successContent">
                                        <h2>¡Gracias!</h2>
                                        <p>Revisa tu correo, ¡te hemos dado la bienvenida!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                        </div>
                    </div>
                    <div class="footer-page-terms">
                        <span>©InvitroAgencia <?php echo date('Y') ?></span>
                        <ul>
                            <li>
                                <a href="<?php echo esc_url(home_url('aviso-y-terminos-de-uso')); ?>"
                    title="Aviso legal y términos de uso">Aviso Legal y términos de uso</a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('politica-de-cookies')); ?>"
                    title="Política de cookies">Política de Cookies</a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('politica-de-privacidad')); ?>"
                    title="Política de privacidad">Política de Privacidad</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--
<footer id="suscribe" class="footer suscribe" data-bgColor="oscuro">
    <div class="contenedor">
        <div class="row aistart first-row">
            <div class="col-3 col-md-100">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="exit" title="Inicio">
                    <img src="<?php echo IMG; ?>/img-8.svg" class="logo" loading="lazy"
                        alt="Logo InVitro Agencia Digital" title="Logo InVitro Agencia Digital">
                </a>
            </div>
            <div class="col-6 col-md-50">
                <ul class="links">
                    <li><a class="exit" href="<?php echo esc_url(home_url('desarrollo-y-diseno-web')); ?>"
                            title="Desarrollo y diseño web">DISEÑO Y DESARROLLO WEB</a></li>
                    <li><a class="exit" href="<?php echo esc_url(home_url('healthcare')); ?>"
                            title="Healthcare">HEALTHCARE</a></li>
                    <li><a class="exit" href="<?php echo esc_url(home_url('proyectos')); ?>"
                            title="Proyectos">PROYECTOS</a></li>
                    <li><a class="exit" href="<?php echo esc_url(home_url('publicidad-digital')); ?>"
                            title="Publicidad digital">PUBLICIDAD DIGITAL</a></li>
                    <li><a class="exit" href="<?php echo esc_url(home_url('b2b')); ?>" title="B2B">B2B</a></li>
                    <li><a class="exit" href="<?php echo esc_url(home_url('quienes-somos')); ?>"
                            title="¿Quiénes somos?">¿QUIÉNES SOMOS?</a></li>
                    <li><a class="exit" href="<?php echo esc_url(home_url('administracion-de-redes-sociales')); ?>"
                            title="Administración de redes sociales">ADMINISTRACIÓN DE REDES SOCIALES</a></li>
                    <li><a class="exit" href="<?php echo esc_url(home_url('e-commerce-retail')); ?>"
                            title="E-Commerce / Retail">E-COMMERCE /RETAIL</a></li>
                    <li><a class="exit" href="<?php echo esc_url(home_url('clientes')); ?>" title="Clientes">CLIENTES</a>
                    </li>
                    <li><a class="exit" href="<?php echo esc_url(home_url('branding-y-diseno-grafico')); ?>"
                            title="Branding y diseño gráfico">BRANDING Y DISEÑO GRÁFICO</a></li>
                    <li><a class="exit" href="<?php echo esc_url(home_url('blog')); ?>" title="Blog">BLOG</a></li>
                </ul>
            </div>
            <div class="col-3 col-md-50">
                <div class="bulletin">
                    <p>SUSCRÍBETE A NUESTRO BOLETÍN MENSUAL</p>
                    <?php //echo get_field('boletin','option')?>

                    <div id="mlb2-3110037" class="ml-form-embedContainer ml-subscribe-form ml-subscribe-form-3110037">
                        <div class="ml-form-align-center">
                            <div class="ml-form-embedWrapper embedForm">
                                <div class="ml-form-embedBody ml-form-embedBodyDefault row-form">
                                    <div class="ml-form-embedContent" style="">

                                        <p></p>
                                    </div>

                                    <form class="ml-block-form"
                                        action="https://assets.mailerlite.com/jsonp/193401/forms/77830306344731782/subscribe"
                                        data-code="" method="post" target="_blank">
                                        <div class="ml-form-formContent">
                                            <div class="ml-form-fieldRow ml-last-item">
                                                <div
                                                    class="ml-field-group ml-field-email ml-validate-email ml-validate-required">
                                                   
                                                    <input aria-label="email" aria-required="true" type="email"
                                                        class="form-control" data-inputmask="" name="fields[email]"
                                                        placeholder="Email*" autocomplete="email" />
                                                </div>
                                            </div>
                                        </div>

                                        <input type="hidden" name="ml-submit" value="1" />

                                        <div class="ml-form-embedSubmit">
                                            <button type="submit" class="primary custom skyblue" style="width:100%">
                                                <p>SUSCRIBIRME</p>
                                                <div>
                                                    <svg viewBox="0 0 271 179" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M190 179C188 179 184 179 182 177C178 173 178 167 182 163L248 97C252 93 252 87 248 83L182 17C178 13 178 7 182 3C186 -1 192 -1 196 3L262 69C274 81 274 99 262 111L196 177C196 179 194 179 190 179Z" />
                                                        <path
                                                            d="M250 99H10C4 99 0 95 0 89C0 83 4 79 10 79H250C256 79 260 83 260 89C260 95 256 99 250 99Z" />
                                                    </svg>
                                                </div>
                                            </button>

                                            <button disabled="disabled" style="display: none" type="button"
                                                class="loading">
                                                <div class="ml-form-embedSubmitLoad"></div>
                                                <span class="sr-only">Loading...</span>
                                            </button>
                                        </div>

                                        <input type="hidden" name="anticsrf" value="true" />
                                    </form>
                                </div>

                                <div class="ml-form-successBody row-success" style="display: none">
                                    <div class="ml-form-successContent">
                                        <h2>¡Gracias!</h2>
                                        <p>Revisa tu correo, ¡te hemos dado la bienvenida!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row second-row">
            <div class="col-12">
                <ul class="social_network">
                    <?php get_template_part('inc/social_medias'); ?>
                </ul>
            </div>
        </div>
        <div class="row aistart third-row">
            <div class="col-3">
                <img src="<?php echo IMG; ?>/img-96.png" class="rect" loading="lazy"
                    alt="Premio Internacional Business Awards Recocimiento Empresa 2019"
                    title="Premio Internacional Business Awards Recocimiento Empresa 2019">
            </div>
            <div class="col-6">
                <?php echo get_field('contactanos', 'option') ?>
            </div>
            <div class="col-3">
                <img src="<?php echo IMG; ?>/img-97.png" class="rect" style="margin-left:auto" loading="lazy"
                    alt="Premio Internacional Agencia de Marketing Digital Éxito Emprendedor CCE 2018"
                    title="Premio Internacional Agencia de Marketing Digital Éxito Emprendedor CCE 2018">
            </div>
        </div>
    </div>
    <hr>
    <div class="contenedor content-bottom">
        <div class="row">
            <p>© Invitro Agencia
                <?php echo date('Y') ?>
            </p>
            <div>
                <a class="exit" href="<?php echo esc_url(home_url('aviso-y-terminos-de-uso')); ?>"
                    title="Aviso legal y términos de uso">Aviso legal y términos de uso</a>
                <a class="exit" href="<?php echo esc_url(home_url('politica-de-cookies')); ?>"
                    title="Política de cookies">Política de cookies</a>
                <a class="exit" href="<?php echo esc_url(home_url('politica-de-privacidad')); ?>"
                    title="Política de privacidad">Política de privacidad</a>
            </div>
        </div>
    </div>
</footer>
-->

<script>
    function ml_webform_success_3110037() {
        var $ = ml_jQuery || jQuery;
        $('.ml-subscribe-form-3110037 .row-success').show();
        $('.ml-subscribe-form-3110037 .row-form').hide();
    }
</script>
<script src="https://groot.mailerlite.com/js/w/webforms.min.js?v300817f630ad0e957914d0b28a2b6d78"
    type="text/javascript"></script>
<script src="<?php echo URL; ?>/js/jquery.min.js"></script>
<?php wp_footer(); ?>
<?php get_template_part('inc/scripts_timeline_cdn'); ?>

<script type="application/ld+json">
{
    "@context" : "http://schema.org",
    "@type" : "Step 1: Choose a Business Type",
    "name":"InVitro Agencia Digital",
    "url":"https://invitro.pe/revision/nueva_web/",
    "email":"agencia@invitro.pe",
    "telephone":"51960218306"
}
</script>

</body>

</html>