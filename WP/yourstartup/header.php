<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
    <title>Твой стартап</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="logo">
            <a href="#"><img src="<?php the_field('header_logo', 13); ?>" alt="Логотип компании" class="logo__img"></a>
        </div>
        <nav class="menu">
            <ul class="menu__items">
                <li class="menu__item"><a href="#" class="menu__link">Портфолио</a></li>
                <li class="menu__item"><a href="#" class="menu__link">О компании</a></li>
                <li class="menu__item"><a href="#" class="menu__link">Услуги<span class="menu__arrow"><img src="<?php the_field('arrow')?>"></span></a>
                    <div class="menu__submenu-wrapper">
                        <div class="menu__submenu">
                            <a href="#" class="menu__submenu-link">Создание сайтов</a>
                            <a href="#" class="menu__submenu-link">Онлайн продвижение</a>
                            <a href="#" class="menu__submenu-link">Прототипизирование и дизайн</a>
                            <a href="#" class="menu__submenu-link">Разработка брендбука</a>
                        </div>
                    </div>
                </li>
                <li class="menu__item"><a href="#" class="menu__link">Контакты</a></li>
            </ul>
        </nav>
        <div class="right-menu">
			<a href="tel:#" class="right-menu__phone-number"><span class="menu__phone-number-color-text"><?php the_field('header_phone-number-color', 13)?></span><?php the_field('header_phone-number', 13)?></a>
            <button type="button" class="button right-menu__button" onclick = applicationCall()>обсудить проект</button>
        </div>
        <div class="burger-menu">
            <span></span>
        </div>
    </header>