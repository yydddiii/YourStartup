<footer>
        <section>
            <div class="container">
                <div class="footer-main">
                    <div class="footer-main__logo"><img src="<?php the_field('footer_logo')?>" class="footermain__img" alt="логотип"></div>
                    <?php if( have_rows('footer_block') ): while ( have_rows('footer_block') ) : the_row(); ?>
                        <div class="footer-main__block">
                            <h5 class="footer-main__title-text"><?php the_sub_field('footer_inner-title')?></h5>
                            <ul class="footer-main__items">
                            <?php if( have_rows('footer_inner-links') ): while ( have_rows('footer_inner-links') ) : the_row(); ?>
                                <li class="footer-main__item"><a href="<?php the_sub_field('footer_inner-link')?>" class="footer-main__link"><?php the_sub_field('footer_inner-link-text')?></a></li>
                            <?php endwhile; endif; ?>
                            </ul>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <hr class="line header-line">
                <div class="footer-bottom">
                    <div class="footer-bottom__left-side">
                        <p class="footer-bottom__text"><?php the_field('footer_under-text-inner')?></p>
                        <a class="footer-bottom__text"><?php the_field('footer_under-text-inner-2')?></a>
                        <a href="tel:<?php the_field('footer_under-phone-inner-link')?>" class="footer-bottom__text"><?php the_field('footer_under-phone-inner')?></a>
                        <a href="mailto:<?php the_field('footer_under-email-inner-link')?>" class="footer-bottom__text"><?php the_field('footer_under-email-inner')?></a>
                    </div>
                    <div class="footer-bottom__right-side">
                    <?php if( have_rows('sites') ): while ( have_rows('sites') ) : the_row(); ?>
                        <div class="footer-bottom__picture"><a href="<?php the_sub_field('footer_under-logo-inner-link'); ?>"><img src="<?php the_sub_field('footer_under-logo-inner'); ?>" class="footer-bottom__img"></a></div>
                    <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>