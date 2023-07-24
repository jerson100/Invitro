<?php
/*
    Template name: clientes
*/

get_header();
?>


<section class="recommendation mt-header center-vertical">
    <div class="contenedor">
        <div class="row">
            <div class="col-half">
                <?php echo get_field('titulo_seccion_hero')?>
                <?php echo get_field('descripcion_seccion_hero')?>
            </div>
            <div class="col-half">
                <img 
                src="<?php echo get_field('imagen_seccion_hero')['url'] ?>" 
                alt="<?php echo get_field('imagen_seccion_hero')['alt'] ?>" 
                title="<?php echo get_field('imagen_seccion_hero')['title'] ?>" 
                class="hand_with_phone" loading="lazy">
            </div>
        </div>
    </div>
    <?php get_template_part('inc/arrow');?>
</section>

<?php get_template_part('inc/section_experiences');?>

<section class="clients">
    <div class="contenedor">
        <?php echo get_field('titulo_seccion_clientes')?>
        <p><?php echo get_field('descripcion_seccion_clientes')?></p>
        
        <div class="grid">
            
            <?php $n = 1;
            if(have_rows('clientes_c_popup')): while(have_rows('clientes_c_popup')): the_row(); ?>
            <article class="card_client">
                <div class="article-hero">
                    <a href="#cliente<?php echo $n;?>" class="popup-with-zoom-anim" title="Cliente <?php echo $n?>">
                        <div>
                            <img 
                            src="<?php echo get_sub_field('logo')['url']?>"
                            alt="<?php echo get_sub_field('logo')['alt']?>"
                            title="<?php echo get_sub_field('logo')['title']?>"
                            loading="lazy">
                        </div>                        
                    </a>
                </div>
                <div class="article-body">
                    <a href="#cliente<?php echo $n;?>" class="popup-with-zoom-anim" title="Cliente <?php echo $n?>">
                        VER PROYECTOS 
                        <svg viewBox="0 0 271 179" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M190 179C188 179 184 179 182 177C178 173 178 167 182 163L248 97C252 93 252 87 248 83L182 17C178 13 178 7 182 3C186 -1 192 -1 196 3L262 69C274 81 274 99 262 111L196 177C196 179 194 179 190 179Z" fill="#231815"></path>
                            <path d="M250 99H10C4 99 0 95 0 89C0 83 4 79 10 79H250C256 79 260 83 260 89C260 95 256 99 250 99Z" fill="#231815"></path>
                        </svg>
                    </a>
                </div>
            </article>
            
            <!-- POPUP CLIENTES -->
            <div id="cliente<?php echo $n;?>" class="zoom-anim-dialog mfp-hide popup popup-cliente">
                <h3><?php echo get_sub_field('nombre')?></h3>
                <div class="splide without-shadow slide_cliente" role="group">
                    <div class="splide__track">
            		    <ul class="splide__list">
            		        <?php if(have_rows('imagenes_popup')): while(have_rows('imagenes_popup')): the_row(); ?>
            			    <li class="splide__slide">
            			        <img 
            			        src="<?php echo get_sub_field('imagen')['url'] ?>"
            			        alt="<?php echo get_sub_field('imagen')['alt'] ?>"
            			        title="<?php echo get_sub_field('imagen')['title'] ?>"
            			        loading="lazy">
            			    </li>
                            <?php endwhile;endif;?>
                    	</ul>
                    </div>
                </div>
            </div>
            <!-- POPUP CLIENTES -->
            
            <?php $n++;
            endwhile;endif; ?>
            
        </div>

        <div class="logos_img">
            <?php if(have_rows('clientes')): while(have_rows('clientes')): the_row(); ?>
            <div>
                <img 
                    src="<?php echo get_sub_field('logo')['url'] ?>" 
                    alt="<?php echo get_sub_field('logo')['alt'] ?>"
                    title="<?php echo get_sub_field('logo')['title'] ?>" 
                    loading="lazy">
            </div>
            <?php endwhile;endif; ?>
        </div>
        <!-- <img src="<?php echo IMG;?>/clientes/lista-clientes.jpg" class="clients_list"> -->
    </div>
</section>


<?php get_template_part('inc/section_tell_us');?>

<?php get_footer(); ?>


<script src="<?php echo JS;?>/tlclients.js"></script>

<script>
    var array = Array.from(document.querySelectorAll('.slide_cliente'))
    array.forEach(s=>{
        new Splide(s, {
            type: 'loop',
            perPage: 1,
            perMove: 1,
            pauseOnHover: false,
            pauseOnFocus: false,
            rewind: true,
            autoplay: true,
            interval: 5000,
            pagination: true,
            arrows: false,
        }).mount();
    })
</script>
<script>new Splide("#splide_exp",{type:"loop",perPage:1,perMove:1,rewind:!0,pagination:!1,arrows:!0,autoplay:!0,interval:5e3}).mount();</script>