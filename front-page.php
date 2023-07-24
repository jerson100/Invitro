<?php
/*
    Template name: inicio
*/

get_header();
?>

<style>#canvas_3d{width:47%;height:70vh}canvas{width:100%!important;height:100%!important;-o-object-fit:contain!important;object-fit:contain!important}</style>

<div class="badge">
    <img src="<?php echo IMG; ?>/badge-sin-texto.jpg">
    <p>
        <b>años</b><br>
        <strong>creativos,</strong><br>
        siempre en digital<strong>.</strong>
    </p>
</div>

<main class="main front-page">
    <div id="icono1" class="bg_animated top"></div>
    <div id="icono2" class="bg_animated bottom"></div>
    <section class="hero">
        <div class="contenedor">
            <div class="row">
                <div class="col-custom-left">
                    <div class="page_title">
                        <?php echo get_field('titulo_seccion_hero')?>
                    </div>
                </div>
                <div class="col-custom-right" id="canvas_3d">
                    <!--<div class="page_img_hero">
                        <img src="<?php echo get_field('imagen_seccion_hero')['url'] ?>" class="hero_img" loading="lazy">
                    </div>-->
                </div>
            </div>
        </div>
        <?php get_template_part('inc/arrow');?>
    </section>
    <section class="carousel">
        <div class="contenedor contenedor-fluido">
            <div class="splide" role="group" id="swiperleft">
                <div class="shadow shadow_white before"></div><div class="shadow shadow_white after"></div>
                <div class="shadow shadow_black before"></div><div class="shadow shadow_black after"></div>
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php if(have_rows('slider_rtl')): while(have_rows('slider_rtl')): the_row(); ?>
                    	    <div class="splide__slide">
                    	        <img src="<?php echo get_sub_field('logo')['url']?>" title="<?php echo get_sub_field('logo')['title']?>" alt="<?php echo get_sub_field('logo')['alt']?>" loading="lazy">
                    	    </div>
                    	<?php endwhile;endif; ?>
                    </ul>
                </div>
            </div>
            <div class="splide" role="group" id="swiperright">
                <div class="shadow shadow_white before"></div><div class="shadow shadow_white after"></div>
                <div class="shadow shadow_black before"></div><div class="shadow shadow_black after"></div>
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php if(have_rows('slider_ltr')): while(have_rows('slider_ltr')): the_row(); ?>
                    	    <div class="splide__slide">
                                <img src="<?php echo get_sub_field('logo')['url']?>" title="<?php echo get_sub_field('logo')['title']?>" alt="<?php echo get_sub_field('logo')['alt']?>" loading="lazy">
                    	    </div>
                    	<?php endwhile;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<section class="able center-vertical scn_sec">
    <div class="contenedor contenedor-lado">
        <div class="row">
            <div class="col-custom-left leftroright">
                <?php echo get_field('titulo_seccion_capaces')?>
                <p><?php echo get_field('descripcion_somos_capaces')?></p>
                <a href="#form_contact" class="custom scroll-suave" title="Contáctanos">
                    <p>Contáctanos</p>
                    <div>
                        <img src="<?php echo IMG;?>/large-arrow.svg" loading="lazy" alt="Large Arrow Icon" title="Large Arrow Icon">
                    </div>
                </a>
            </div>
            <div class="col-custom-right righttoleft">
                <div class="splide without-shadow" role="group" id="splidearticles">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php $n = 1;
                            if(have_rows('slider_servicios')): while(have_rows('slider_servicios')): the_row(); ?>
                    	    
                    	    <?php $i = str_pad($n, 2, '0', STR_PAD_LEFT); ?>
                    	    
                    	    <li class="splide__slide">
                                <article>
                                    <div class="article-hero">
                                        <a href="<?php echo get_sub_field('enlace')?>" class="exit" title="<?php echo get_sub_field('subtitulo')?>">
                                            <img src="<?php echo get_sub_field('image_thumbnail')['url']?>" alt="<?php echo get_sub_field('image_thumbnail')['alt']?>" title="<?php echo get_sub_field('image_thumbnail')['title']?>" loading="lazy">
                                        </a>
                                    </div>
                                    <div class="article-body">
                                        <div class="article-content">
                                            <h3><?php echo $i?>. <b><?php echo get_sub_field('subtitulo')?></b></h3>
                                            <p><?php echo get_sub_field('descripcion')?></p>
                                        </div>
                                        <a href="<?php echo get_sub_field('enlace')?>" class="exit" title="<?php echo get_sub_field('subtitulo')?>">
                                            VER 
                                            <svg viewBox="0 0 271 179" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M190 179C188 179 184 179 182 177C178 173 178 167 182 163L248 97C252 93 252 87 248 83L182 17C178 13 178 7 182 3C186 -1 192 -1 196 3L262 69C274 81 274 99 262 111L196 177C196 179 194 179 190 179Z" fill="#231815"/>
                                                <path d="M250 99H10C4 99 0 95 0 89C0 83 4 79 10 79H250C256 79 260 83 260 89C260 95 256 99 250 99Z" fill="#231815"/>
                                            </svg>
                                        </a>
                                    </div>
                                </article>
                            </li>
                    	    
                    	    <?php $n++;
                    	    endwhile;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="choose center-vertical">
    <div class="ellipse_container">
        <div class="abs ellipse_arrow">
            <img src="<?php echo IMG;?>/ionic-ios-arrow-round-forward.png" loading="lazy" alt="Large Arrow Icon" title="Large Arrow Icon">
        </div>
        <div class="abs ellipse"></div>
    </div>
    <div class="contenedor">
        <?php echo get_field('titulo_porque_elegir')?>
        <div class="grid">
            
            <?php if(have_rows('razones')): while(have_rows('razones')): the_row(); ?>
                <div class="card">
                    <div class="card_header">
                        <img 
                        src="<?php echo get_sub_field('imagen_razon')['url'] ?>" 
                        title="<?php echo get_sub_field('imagen_razon')['title'] ?>"
                        alt="<?php echo get_sub_field('imagen_razon')['alt'] ?>"
                        loading="lazy">
                    </div>
                    <div class="card_body">
                        <?php echo get_sub_field('titulo_razon') ?>
                        <p class="excerpt5"><?php echo get_sub_field('descripcion_razon') ?></p>
                    </div>
                </div>
            <?php endwhile;endif; ?>
            
        </div>
    </div>
</section>

<?php get_template_part('inc/section_experiences');?>

<section class="blog-container center-vertical">
    <div class="contenedor">
        <h2>Blog</h2>
        <p>Estas son las últimas novedades en el marketing digital.</p>
        <?php get_template_part('inc/blog_cards');?>
        <a href="<?php echo esc_url(home_url('blog'));?>" class="exit" title="Blog">
            VER ARTÍCULOS PASADOS <i class="gg-arrow-long-right"></i>
        </a>
    </div>
</section>

<?php get_template_part('inc/section_tell_us');?>


<?php get_footer(); ?>

<script src="<?php echo JS;?>/tlhome.js"></script>
<script>new Splide("#splide_exp",{type:"loop",perPage:1,perMove:1,rewind:!0,pagination:!1,arrows:!0,autoplay:!0,interval:5e3}).mount();</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js" integrity="sha512-BB7rb8ZBAxtdJdB7nwDijJH9NC+648xSzviK9Itm+5APTtdpgKz1+82bDl4znz/FBhd0R7pJ/gQtomnMpZYzRw==" crossorigin="anonymous"></script>
<script>
    var lottieAnimation = bodymovin.loadAnimation({
        container: document.getElementById('icono2'),
        path: '<?php echo IMG?>/icon1b.json',
        renderer: 'svg',
        loop: true,
        autoplay: true,
    })
    var lottieAnimation = bodymovin.loadAnimation({
        container: document.getElementById('icono1'),
        path: '<?php echo IMG?>/icon2b.json',
        renderer: 'svg',
        loop: true,
        autoplay: true,
    })
</script>

<script type="module" src="<?php echo JS;?>/model3d.js"></script>