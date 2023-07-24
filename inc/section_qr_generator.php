<section class="generator scn_sec">
    <div class="contenedor">

        <div class="splide without-shadow" role="group" id="splide_generator">
            <div class="splide__track">
		        <ul class="splide__list">
		            
		            <?php if(have_rows('herramienta','option')): while(have_rows('herramienta','option')): the_row(); ?>
		            
		            <li class="splide__slide">
                        <div class="row">
                            <div class="col-half">
                                <div class="content">
                                    <img 
                                    src="<?php echo get_sub_field('icono')['url']?>" 
                                    alt="<?php echo get_sub_field('icono')['alt']?>" 
                                    title="<?php echo get_sub_field('icono')['title']?>" 
                                    class="qr" 
                                    loading="lazy">
                                    <?php echo get_sub_field('titulo')?>
                                    <?php echo get_sub_field('descripcion')?>
                                    <a href="<?php echo get_sub_field('url_boton')?>" class="custom skyblue black-color" target="_blank" title="<?php echo get_sub_field('texto_boton')?>">
                                        <p><?php echo get_sub_field('texto_boton')?></p>
                                        <div>
                                            <svg viewBox="0 0 271 179" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M190 179C188 179 184 179 182 177C178 173 178 167 182 163L248 97C252 93 252 87 248 83L182 17C178 13 178 7 182 3C186 -1 192 -1 196 3L262 69C274 81 274 99 262 111L196 177C196 179 194 179 190 179Z"/>
                                                <path d="M250 99H10C4 99 0 95 0 89C0 83 4 79 10 79H250C256 79 260 83 260 89C260 95 256 99 250 99Z"/>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-half">
                                <img 
                                src="<?php echo get_sub_field('imagen')['url']?>" 
                                alt="<?php echo get_sub_field('imagen')['alt']?>" 
                                title="<?php echo get_sub_field('imagen')['title']?>" 
                                class="preview" 
                                loading="lazy">
                            </div>
                        </div>
                    </li>
		            
		            <?php endwhile;endif; ?>
		            
		        </ul>
            </div>
        </div>
    </div>
</section>