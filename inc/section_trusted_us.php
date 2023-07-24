<section class="trusted_us center-vertical" data-bgColor="oscuro">
    <div class="contenedor">
        <h3>Ellos confían en nosotros:</h3>
        <div class="splide without-shadow" role="group" id="clients">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php if (have_rows('logos', 'option')):
                        while (have_rows('logos', 'option')):
                            the_row(); ?>

                            <li class="splide__slide">
                                <img src="<?php echo get_sub_field('logo')['url'] ?>"
                                    title="<?php echo get_sub_field('logo')['title'] ?>"
                                    alt="<?php echo get_sub_field('logo')['alt'] ?>" loading="lazy">
                            </li>

                        <?php endwhile; endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>