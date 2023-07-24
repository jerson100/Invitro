<section class="experiences scn_sec">
    <div class="contenedor">
        <?php echo get_field('titulo_seccion_experiencia','option')?>
        <div class="card_experiences">
            <div class="splide without-shadow" role="group" id="splide_exp">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php if(have_rows('experiencias','option')): while(have_rows('experiencias','option')): the_row(); ?>
                        
                        <li class="splide__slide">
                            <div class="experience">
                                <div class="exp_img">
                                    <img 
                                    src="<?php echo get_sub_field('logo')['url']?>"
                                    title="<?php echo get_sub_field('logo')['title']?>"
                                    alt="<?php echo get_sub_field('logo')['alt']?>"
                                    loading="lazy"
                                    >
                                </div>
                                <div class="exp_body">
                                    <img src="<?php echo IMG;?>/img-79.png" class="quote" alt="Quotation Mark" title="Quotation Mark">
                                    <p><?php echo get_sub_field('descripcion') ?></p>
                                    <small><?php echo get_sub_field('cliente_empresa') ?></small>
                                </div>
                            </div>
                        </li>
                        
                        <?php endwhile;endif; ?>
                    </ul>
                </div>
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev">
                        <i class="gg-arrow-long-left"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next">
                        <i class="gg-arrow-long-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>