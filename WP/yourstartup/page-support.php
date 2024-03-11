<?php get_header() ?>

<section>
    <div class="container">
        <div class="application">
            <div class="application__text">
                <h1 class="application__title"><?php the_field('application_title')?></h1>
                <div class="application__information"><?php the_field('application_text')?></div>
            </div>
            <div class="application__input-block">
                <div class="application__static-input">
                    <div class="application__input">
                        <input type="text" id="application__name-input" class="application__input-entry" placeholder="Имя">
                        <span id="application__error-name" class="application__error-name"></span>
                    </div>
                    <div class="application__input">
                        <p><input type="tel" id="application__phone-number-input" class="application__input-entry" placeholder="Телефон"></p>
                        <span id="application__error-phone" class="application__error-phone"></span>
                    </div>
                    <div class="application__input">
                        <input type="text" name="application__company-input" class="application__input-entry" placeholder="Компания">
                    </div>
                    <div class="application__input">
                        <input type="email" id="application__email-input" class="application__input-entry" placeholder="Почта">
                        <span id="application__error-email" class="application__error-bottom"></span>
                    </div>
                </div>
                <div class="application__rate-block">
                    <div class="application__select-rate">
                        <p id="application__select-rate-text" class="application__select-rate-text">Тариф</p>
                        <div class="application__select-arrow">
                            <span class="application__select-arrow-left"></span>
                            <span class="application__select-arrow-right"></span>
                        </div>
                    </div>
                    <div class="application__error-call-wrapper">
                        <span id="application__error-rate" class="application__error-call"></span>
                    </div>
                    <div class="application__submenu-rate-wrapper" style="visibility: hidden; opacity: 0;">
                        <div class="application__submenu-rate">
                            <?php if( have_rows('application_subs') ): while ( have_rows('application_subs') ) : the_row(); ?>
                                <div id="<?php the_sub_field('application_sub-num')?>" class="application__submenu-option application__submenu-option1" onclick = "changeRate('<?php the_sub_field('application_sub-num')?>')"><?php the_sub_field('application_sub-text')?></div>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
                <div class="application__call">
                    <div class="application__input-call">
                        <textarea type="text" name="application__call-input" class="application__call-input application__input-entry" placeholder="Сообщение"></textarea>
                    </div>
                    <div class="application__call-bottom">
                        <p class="application__explanation">Опишите задачу, что необходимо</br>будет делать.</p>
                        <div class="application__call-button">
                            <input type="file" class="application__upload-file">
                            <button type="file" class="application__button-upload-file">прикрепить файл</button>
                        </div>
                    </div>
                </div>
                <div class="application__bottom">
                    <div class="application--bottom__button">
                        <button type="button" class="application__bottom-send" onclick = applicationCheck()>отправить</button>
                    </div>
                    <span class="application__bottom-text">Нажимая на кнопку, вы соглашаетесь с <a href="#" class="application__bottom-link">Политикой персональных данных</a></span>
                </div>
            </div>
            <div class="application__cross">
                <img src="<?php the_field('application_cross')?>" class="application__cross-img">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="application-end">
            <h1 class="application-end__title"><?php the_field('application-end_title')?></h1>
            <div class="application-end__left">
                <p class="application-end__left-text"><?php the_field('application-end_text')?></p>
                <button class="application-end__left-button" onclick = applicationEnd()>отправить повторно</button>
            </div>
            <div class="application-end__cross">
                <img src="<?php the_field('application-end_cross')?>" class="application-end__cross-img">
            </div>
        </div>
    </div>
</section>
<main>
    <section>
        <div class="container">
            <div class="support">
                <div class="support__block">
                    <h1 class="support__title-text"><?php the_field('support_title', 13); ?></h1>
                    <p class="support__main-text"><?php the_field('support_text', 13); ?><span class="support__main-color-text"><?php the_field('support_text-color', 13); ?></span></p>
                    <div class="support__button-wrapper">
                        <button type="button" class="button support__button" onclick = applicationCall()>обсудить проект</button>
                    </div>
                </div>
                <div class="support__picture">
                    <img src="<?php the_field('support_picture', 13); ?>" class="support__img" alt="изображение">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="info">
                <div class="info__top-border"></div>
                <div class="info__top-border"></div>
                <div class="info__top-border"></div>
                <?php
                $info_block_1 = get_field('info_block_1', 13);	
                if( $info_block_1 ): ?>
                    <div class="info__block">
                        <div class="info__picture">
                            <img src="<?php echo $info_block_1['info_inner-img']; ?>" class="info__img">
                        </div>
                        <div class="info__text-block">
                            <h3 class="info__title-text"><?php echo $info_block_1['info_inner-title']; ?></h3>
                            <p class="info__main-text"><?php echo $info_block_1['info_inner-text']; ?></p>
                        </div>
                    </div>
                <?php endif; ?>
                <?php
                $info_block_2 = get_field('info_block_2', 13);	
                if( $info_block_2 ): ?>
                    <div class="info__block">
                        <div class="info__picture">
                            <img src="<?php echo $info_block_2['info_inner-img']; ?>" class="info__img">
                        </div>
                        <div class="info__text-block">
                            <h3 class="info__title-text"><?php echo $info_block_2['info_inner-title']; ?></h3>
                            <p class="info__main-text"><?php echo $info_block_2['info_inner-text']; ?></p>
                        </div>
                    </div>
                <?php endif; ?>
                <?php
                $info_block_3 = get_field('info_block_3', 13);	
                if( $info_block_3 ): ?>
                    <div class="info__block">
                        <div class="info__picture">
                            <img src="<?php echo $info_block_3['info_inner-img']; ?>" class="info__img">
                        </div>
                        <div class="info__text-block">
                            <h3 class="info__title-text"><?php echo $info_block_3['info_inner-title']; ?></h3>
                            <p class="info__main-text"><?php echo $info_block_3['info_inner-text']; ?></p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h2 class="title-text"><?php the_field('technologies_title')?></h2>
            <div class="technologies">
                <?php if( have_rows('technologies') ): while ( have_rows('technologies') ) : the_row(); ?>
                    <div class="technologies__block">
                        <div class="technologies__picture"><img src="<?php the_sub_field('technologies_inner-img'); ?>" alt="" class="technologies__img"></div>
                        <div class="technologies__information">
                            <h4 class="technologies__name-text"><?php the_sub_field('technologies_inner-title'); ?></h4>
                            <p class="technologies__description-text"><?php the_sub_field('technologies_inner-info'); ?></p>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h2 class="title-text"><?php the_field('possibilites_title')?></h2>
            <div class="possibilites">
                <?php if( have_rows('possibilites') ): while ( have_rows('possibilites') ) : the_row(); ?>
                    <div class="possibilites__block">
                        <div class="possibilites__top-side-block">
                            <p class="possibilites__number">0<?php the_sub_field('possibilites_inner-number'); ?></p>
                            <hr class="possibilites__line">
                        </div>
                        <div class="possibilites__text-block">
                            <h3 class="possibilites__title-text"><?php the_sub_field('possibilites_inner-title'); ?></h3>
                            <div class="possibilites__block-box possibilites__block-box<?php the_sub_field('possibilites_inner-number'); ?>" onclick="openInformation(<?php the_sub_field('possibilites_inner-number'); ?>)">
                                <p class="possibilites__information-text"><?php the_sub_field('possibilites_inner-text'); ?></p>
                                <div class="possibilites__bottom-shadow possibilites__bottom-shadow<?php the_sub_field('possibilites_inner-number'); ?>"></div>
                                <img src="<?php the_sub_field('possibilites_inner-arrow'); ?>" alt="" class="possibilites__img-arrow possibilites__img-arrow<?php the_sub_field('possibilites_inner-number'); ?>">
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="subscription-top-block">
                <h2 class="title subscription-top-block__title-text"><?php the_field('subscription_title')?></h2>
                <p class="subscription-top-block__left-side-text"><?php the_field('subscription_subtitle')?></p>
            </div>
            <div class="subscription">
                <?php if( have_rows('subscription') ): while ( have_rows('subscription') ) : the_row(); ?>
                    <div class="subscription__version">
                        <div class="subscription__margin">
                            <h2 class="subscription__name-text"><?php the_sub_field('subscription_inner-name'); ?></h2>
                            <p class="subscription__time-text"><?php the_sub_field('subscription_inner-time'); ?></p>
                            <?php if( have_rows('subscription_inner-pos-plus') ): while ( have_rows('subscription_inner-pos-plus') ) : the_row(); ?>
                                <div class="subscription__item-text"><img src="<?php the_sub_field('subscription_inner-pos-img-plus'); ?>" class="subscription__tick-img"><?php the_sub_field('subscription_inner-pos-name-plus'); ?></div>
                            <?php endwhile; endif; ?>
                            <?php if( have_rows('subscription_inner-pos-minus') ): while ( have_rows('subscription_inner-pos-minus') ) : the_row(); ?>
                                <div class="subscription__item-text"><img src="<?php the_sub_field('subscription_inner-pos-img-minus'); ?>" class="subscription__tick-img"><?php the_sub_field('subscription_inner-pos-name-minus'); ?></div>
                            <?php endwhile; endif; ?>
                            <?php if( have_rows('subscription_inner-pos-add') ): while ( have_rows('subscription_inner-pos-add') ) : the_row(); ?>
                            <div class="subscription__item-plus-block">
                                <img src="<?php the_sub_field('subscription_inner-add-img'); ?>" class="subscription__tick-img">
                                <p class="subscription__text-plus-text"><?php the_sub_field('subscription_inner-add-name'); ?></p>
                            </div>
                            <?php endwhile; endif; ?>
                            <div class="subscription__price-block">
                                <p class="subscription__price-text-first"><?php the_sub_field('subscription_inner-value'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h2 class="title-text"><?php the_field('project_title')?></h2>
            <div class="project">
                <?php if( have_rows('project') ): while ( have_rows('project') ) : the_row(); ?>
                    <div class="project__block">
                        <button type="button" class="project__site">
                            <img src="<?php the_sub_field('project_inner-img'); ?>" class="project__img">
                            <div class="project__mini-text"><a href="<?php the_sub_field('project_inner-link'); ?>" class="project__mini-text-link" style="text-decoration: none;color: black;">сайты</a></div>
                        </button>
                        <div class="project__text"><?php the_sub_field('project_inner-name'); ?></div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
            <div class="project__space-button"><button type="button" class="project__button">показать еще</button></div>
        </div>
    </section>
    <section>
        <div class="big-button">
            <button type  ="button" class="big-button__button" onclick = applicationCall()>
                <div class="big-button__text">
                    <p class="big-button__txt"><?php the_field('bug-button_text')?></p>
                    <div class="big-button__arrow"><img src="<?php the_field('bug-button_img')?>" class="big-button__img"></div>
                </div>
            </button>
        </div>
    </section>
</main>
<?php get_footer() ?>