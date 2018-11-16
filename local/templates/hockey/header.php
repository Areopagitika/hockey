<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <? $APPLICATION->ShowHead(); ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=1250, initial-scale=1">
    <title>Главная | Foundation for Sites</title>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH; ?>/css/app.css">
</head>
<body class="main default">
<? $APPLICATION->ShowPanel(); ?>
<div class="wrapper">
    <header class="header">
        <div class="header__left">
            <img src="<?=SITE_TEMPLATE_PATH; ?>/img/svg/hokey-federation-color.svg" alt="Федерация Хоккея России" class="svg-inject-me">
        </div>
        <div class="header__wrapp">
            <div class="wrapp">
                <div class="header__logo">
                    <a href="/">
                        <img src="<?=SITE_TEMPLATE_PATH; ?>/img/site-logo.png" alt="Герои хоккея">
                    </a>
                </div>
                <div class="header__menu">
                    <nav class="header-menu">
                        <ul class="vertical medium-horizontal menu header-menu__list">
                            <li class="header-menu__item"><a href="#scroll-about" class="header-menu__link">О премии</a></li>
                            <li class="header-menu__item"><a href="#scroll-regulations" class="header-menu__link">Регламент</a></li>
                            <li class="header-menu__item"><a href="#scroll-jury" class="header-menu__link">Жюри</a></li>
                            <li class="header-menu__item"><a href="#scroll-nomination" class="header-menu__link">Номинации</a></li>
                            <li class="header-menu__item"><a href="#scroll-nominees" class="header-menu__link">Лауреаты</a></li>
                            <li class="header-menu__item"><a href="#scroll-news" class="header-menu__link">Новости</a></li>
                            <li class="header-menu__item"><a href="#scroll-media" class="header-menu__link">Медия</a></li>
                            <li class="header-menu__item"><a href="#scroll-contacts" class="header-menu__link">Контакты</a></li>
                            <li class="header-menu__item"><a href="#scroll-partners" class="header-menu__link">Партнеры</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="header__right">
            <img src="<?=SITE_TEMPLATE_PATH; ?>/img/svg/ligastavok.svg" alt="Лига ставок" class="svg-inject-me">
        </div>
    </header>

    <div class="content">