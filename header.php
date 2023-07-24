<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5QCVXC7');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
    
    <?php if (is_404()): ?>
    <title><?php esc_attr_e("InVitro Agencia | Página de Error"); ?></title>
    <?php else: ?>
    <title><?php the_title();?></title>
    <?php endif; ?>
    
    <style>html{margin-top:0 !important;}</style>
    <script>!function(a,m,o,c,r,m){a[o+c]=a[o+c]||{setMeta:function(p){this.params=(this.params||[]).concat([p])}},a[o+r]=a[o+r]||function(f){a[o+r].f=(a[o+r].f||[]).concat([f])},a[o+r]({id:"1039356",hash:"1fce1b0bce5847be69478e86c094bc6b",locale:"es"}),a[o+m]=a[o+m]||function(f,k){a[o+m].f=(a[o+m].f||[]).concat([[f,k]])}}(window,0,"amo_forms_","params","load","loaded");</script>
    <style>@media only screen and (device-width :375px) and (device-height :667px) and (-webkit-device-pixel-ratio :2){body.menu-open .menu p{margin-left:-5%!important}}@media only screen and (device-width :375px) and (device-height :812px) and (-webkit-device-pixel-ratio :3){body.menu-open .menu p{margin-left:-5%!important}}</style>
    
    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '101962680198638');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=101962680198638&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
    
    <script type="importmap">
        {
            "imports": {
                "three": "https://unpkg.com/three@0.138.0/build/three.module.js",
                "stlloader": "https://unpkg.com/three@0.138.0/examples/jsm/loaders/STLLoader.js",
                "mtlloader": "https://unpkg.com/three@0.138.0/examples/jsm/loaders/MTLLoader.js",
                "objloader": "https://unpkg.com/three@0.138.0/examples/jsm/loaders/OBJLoader.js",
                "OrbitControls": "https://unpkg.com/three@0.138.0/examples/jsm/controls/OrbitControls.js"
            }
        }
    </script>
    
</head>
<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5QCVXC7"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


<?php if(get_field('whatsapp','option') != ''):?>
<a href="<?php echo get_field('whatsapp','option')?>" target="_blank" class="whatsapp" title="Whatsapp">
    <img src="<?php echo IMG?>/whatsapp.png" alt="Whatsapp Icon" title="Whatsapp Icon" loading="lazy" width="200" height="150">
    <img src="<?php echo IMG?>/wsp.png" alt="Whatsapp Icon" title="Whatsapp Icon" loading="lazy" width="200" height="150" style="display:none" class="resp">
</a>
<?php endif; ?>

    
<div class="loader ltr"></div>
<div class="loader rtl"></div>

<header class="hover center-vertical">
    <div class="contenedor">
        <div class="row">
            <a href="<?php echo esc_url(home_url('/'));?>" class="exit" title="Inicio">
                <svg id="Componente_182_1" data-name="Componente 182 – 1" xmlns="http://www.w3.org/2000/svg" width="198.229" height="65.115" viewBox="0 0 198.229 65.115" class="logo change_color">
                    <g id="Grupo_262" data-name="Grupo 262" transform="translate(0 9.502)">
                        <path id="Trazado_633" data-name="Trazado 633" d="M-1323.689,496.112h7.407v36.823h-7.407Z" transform="translate(1323.689 -496.112)"/>
                    </g>
                    <g id="Grupo_263" data-name="Grupo 263" transform="translate(16.42 8.664)">
                        <path id="Trazado_634" data-name="Trazado 634" d="M-1215.743,507.287V530h-7.406V508.615c0-6.079-3.634-9.712-9.5-9.643-5.52,0-9.573,4.053-9.642,8.594V530h-7.406V493.172h6.987v4.682a15.057,15.057,0,0,1,12.158-5.52C-1221.332,492.334-1215.743,498.273-1215.743,507.287Z" transform="translate(1249.701 -492.334)"/>
                    </g>
                    <g id="Grupo_264" data-name="Grupo 264" transform="translate(53.662 9.502)">
                        <path id="Trazado_635" data-name="Trazado 635" d="M-1044.361,496.112l-14.534,36.823h-8.455l-14.534-36.823h7.686l11.11,29.766,11.04-29.766Z" transform="translate(1081.883 -496.112)"/>
                    </g>
                    <g id="Grupo_265" data-name="Grupo 265" transform="translate(96.146 9.502)">
                        <path id="Trazado_636" data-name="Trazado 636" d="M-890.448,496.112h7.406v36.823h-7.406Z" transform="translate(890.448 -496.112)"/>
                    </g>
                    <g id="Grupo_266" data-name="Grupo 266" transform="translate(108.861)">
                        <path id="Trazado_637" data-name="Trazado 637" d="M-826.58,486.762V469.154h-6.568V462.8h3.564c2.375,0,3.424-1.188,3.424-3.563v-5.939h7.2v9.5h10.271v6.359h-10.551v16.839c0,4.612,2.445,7.128,6.847,7.128h4.122v6.5h-5.59C-822.178,499.619-826.58,494.658-826.58,486.762Z" transform="translate(833.148 -453.293)"/>
                    </g>
                    <g id="Grupo_267" data-name="Grupo 267" transform="translate(139.117 8.664)">
                        <path id="Trazado_638" data-name="Trazado 638" d="M-678.51,492.334v6.918c-6.568.07-10.9,3.983-10.9,9.153V530h-7.407V493.172h6.987v4.682A14.369,14.369,0,0,1-678.51,492.334Z" transform="translate(696.817 -492.334)"/>
                    </g>
                    <g id="Grupo_13139" data-name="Grupo 13139">
                        <g id="Grupo_268" data-name="Grupo 268" transform="translate(159.449 8.734)">
                            <path id="Trazado_639" data-name="Trazado 639" d="M-567.749,506.2q-.107.152-.222.3c-.036.045-.072.09-.109.134-.137.165-.281.325-.433.477l-.019.018c-.129.127-.264.248-.4.366q-.124.107-.253.208l-.013.01a7.463,7.463,0,0,1-4.62,1.6c-.07,0-.137-.008-.206-.01a15.844,15.844,0,0,1,.206,2.57c0,7.337-4.891,12.577-11.948,12.577-7.127,0-12.018-5.31-12.018-12.577,0-7.406,4.891-12.647,12.018-12.647a12.649,12.649,0,0,1,4.656.851,7.5,7.5,0,0,1,4.64-5.276,20.633,20.633,0,0,0-9.365-2.143c-11.319,0-19.355,8.175-19.355,19.215,0,10.97,8.036,19.215,19.355,19.215,11.39,0,19.425-8.245,19.425-19.215a20.827,20.827,0,0,0-.942-6.267Q-567.539,505.906-567.749,506.2Z" transform="translate(605.194 -492.648)"/>
                        </g>
                        <g id="Grupo_269" data-name="Grupo 269" transform="translate(186.092 13.155)">
                            <circle id="Elipse_39" data-name="Elipse 39" cx="4.732" cy="4.732" r="4.732" fill="#33c" style="stroke:none"/>
                        </g>
                    </g>
                    <g id="Grupo_270" data-name="Grupo 270" transform="translate(0.227 53.472)">
                      <path id="Trazado_640" data-name="Trazado 640" d="M-1315.348,703.425h-4.583l-1.036,2.947h-1.7l3.984-11.255h2.073l4,11.255h-1.7Zm-.5-1.409-1.781-5.085-1.8,5.085Z" transform="translate(1322.667 -694.924)"/>
                      <path id="Trazado_641" data-name="Trazado 641" d="M-1231.973,705.885a5.574,5.574,0,0,1-5.684-5.813,5.566,5.566,0,0,1,5.668-5.83,5.232,5.232,0,0,1,5.133,3.433l-1.652.68a3.5,3.5,0,0,0-3.514-2.478c-2.283,0-3.886,1.717-3.886,4.227a3.929,3.929,0,0,0,4.064,4.226,3.673,3.673,0,0,0,3.806-3.222h-3.984V699.78h5.635C-1226.386,703.586-1228.815,705.885-1231.973,705.885Z" transform="translate(1256.523 -694.242)"/>
                      <path id="Trazado_642" data-name="Trazado 642" d="M-1133.612,704.866v1.506h-7.287V695.118h7.19v1.506h-5.474v3.206h4.923v1.49h-4.923v3.546Z" transform="translate(1181.237 -694.924)"/>
                      <path id="Trazado_643" data-name="Trazado 643" d="M-1053.1,695.118v11.255h-1.441l-5.538-8.275v8.275h-1.717V695.118h1.425l5.554,8.307v-8.307Z" transform="translate(1119.692 -694.924)"/>
                      <path id="Trazado_644" data-name="Trazado 644" d="M-976.205,700.072a5.562,5.562,0,0,1,5.651-5.83,5.177,5.177,0,0,1,5.15,3.611l-1.652.664a3.474,3.474,0,0,0-3.53-2.64,3.878,3.878,0,0,0-3.87,4.194,3.87,3.87,0,0,0,3.9,4.178,3.434,3.434,0,0,0,3.5-2.639l1.652.664a5.109,5.109,0,0,1-5.117,3.611A5.565,5.565,0,0,1-976.205,700.072Z" transform="translate(1053.093 -694.242)"/>
                      <path id="Trazado_645" data-name="Trazado 645" d="M-882.366,695.118h1.717v11.255h-1.717Z" transform="translate(980.079 -694.924)"/>
                      <path id="Trazado_646" data-name="Trazado 646" d="M-823.311,703.425h-4.583l-1.036,2.947h-1.7l3.984-11.255h2.073l4,11.255h-1.7Zm-.5-1.409-1.781-5.085-1.8,5.085Z" transform="translate(939.824 -694.924)"/>
                    </g>
                </svg>
            </a>
            <nav class="lineal">
                <ul class="lineal">
                    <li class="hover servicios">
                        <a class="change_color tohover" href="#" title="Servicios"><span>Servicios</span></a>
                    </li>
                    <div class="whover servicios">
                        <div class="contenedor">
                            <div class="row jcend aistart">
                                <div class="col-3">
                                    <a href="<?php echo esc_url(home_url('desarrollo-y-diseno-web'));?>" class="exit" title="Desarrollo y diseño web">
                                        <small>01</small>
                                        <span>Desarrollo y diseño web</span>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="<?php echo esc_url(home_url('publicidad-digital'));?>" class="exit" title="Publicidad digital">
                                        <small>02</small>
                                        <span>Publicidad digital</span>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="<?php echo esc_url(home_url('branding-y-diseno-grafico'));?>" class="exit" title="Branding y diseño gráfico">
                                        <small>03</small>
                                        <span>Branding y diseño gráfico</span>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="<?php echo esc_url(home_url('administracion-de-redes-sociales'));?>" class="exit" title="Administración de redes sociales">
                                        <small>04</small>
                                        <span>Administración de redes sociales</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <li class="hover expertise">
                        <a class="change_color tohover" href="#" title="Expertise"><span>Expertise</span></a>
                    </li>
                    <div class="whover expertise">
                        <div class="contenedor">
                            <div class="row jccenter aistart">
                                <div class="col-3">
                                    <a href="<?php echo esc_url(home_url('healthcare'));?>" class="exit" title="Healthcare">
                                        <small>01</small>
                                        <span>Healthcare</span>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="<?php echo esc_url(home_url('b2b'));?>" class="exit" title="Business to Business">
                                        <small>02</small>
                                        <span>Business to Business</span>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="<?php echo esc_url(home_url('e-commerce-retail'));?>" class="exit" title="E-Commerce / Retail">
                                        <small>03</small>
                                        <span>E-Commerce / Retail</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <li>
                        <a href="<?php echo esc_url(home_url('proyectos'));?>" class="change_color exit" title="Proyectos"><span>Proyectos</span></a>
                    </li>
                </ul>
                <a href="<?php echo esc_url(home_url('contactanos'));?>" class="w-border change_color exit" title="Contacto">
                    <span>Contacto</span>
                    <img src="<?php echo IMG;?>/large-arrow.svg" loading="lazy" alt="Arrow Icon" title="Arrow Icon">
                </a>
                <button id="open">
                    <svg viewBox="0 0 20 8" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(-8 -14)" fill-rule="evenodd" class="change_color">
                            <rect x="8.5" y="15" width="19" height="1" rx=".5" class="top"></rect>
                            <rect x="8.5" y="21" width="19" height="1" rx=".5" class="bottom"></rect>
                        </g>
                    </svg>
                </button>
                <div class="menu">
                    
                    <details>
                        <summary>
                            <p class="responsive">Servicios <i class="gg-push-chevron-right"></i></p>
                        </summary>
                        
                        <a class="responsive exit" href="<?php echo esc_url(home_url('desarrollo-y-diseno-web'));?>" title="Desarrollo y Diseño Web">Desarrollo y Diseño Web</a>
                        <a class="responsive exit" href="<?php echo esc_url(home_url('publicidad-digital'));?>" title="Publicidad digital">Publicidad digital</a>
                        <a class="responsive exit" href="<?php echo esc_url(home_url('branding-y-diseno-grafico'));?>" title="Branding y diseño gráfico">Branding y diseño gráfico</a>
                        <a class="responsive exit" href="<?php echo esc_url(home_url('administracion-de-redes-sociales'));?>" title="Administración de redes sociales">Administración de redes sociales</a>
                    </details>
                    
                    <details>
                        <summary>
                            <p class="responsive">Expertise <i class="gg-push-chevron-right"></i></p>
                        </summary>
                        
                        <a class="responsive exit" href="<?php echo esc_url(home_url('healthcare'));?>" title="Healthcare">Healthcare</a>
                        <a class="responsive exit" href="<?php echo esc_url(home_url('b2b'));?>" title="Business to Business">Business to Business</a>
                        <a class="responsive exit" href="<?php echo esc_url(home_url('e-commerce-retail'));?>" title="E-Commerce / Retail">E-Commerce / Retail</a>
                    </details>
                    
                    <a class="responsive exit" href="<?php echo esc_url(home_url('proyectos'));?>" title="Proyectos">Proyectos</a>
                    <a class="exit" href="<?php echo esc_url(home_url('quienes-somos'));?>" title="¿Quiénes somos?">¿Quiénes somos?</a>
                    <a class="exit" href="<?php echo esc_url(home_url('clientes'));?>" title="Clientes">Clientes</a>
                    <a class="exit" href="<?php echo esc_url(home_url('blog'));?>" title="Blog">Blog</a>
                    
                    <a class="responsive like_button exit" href="<?php echo esc_url(home_url('contactanos'));?>" title="Contáctanos">Contáctanos <i class="gg-arrow-long-right"></i></a>
                </div>
            </nav>
        </div>
    </div>
</header>