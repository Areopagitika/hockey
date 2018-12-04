<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? use Bitrix\Main\Page\Asset; ?>
<? $instAsst = Asset::getInstance(); ?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <? $APPLICATION->ShowHead(); ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=1250, initial-scale=1">
    <title><? $APPLICATION->ShowTitle()?></title>
    <? $instAsst->addCss("/local/templates/hockey/css/app.css"); ?>
    <? $instAsst->addJs("/local/templates/hockey/js/app.js"); ?>
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
                  <?$APPLICATION->IncludeComponent("bitrix:menu","main_menu",Array(
                      "ROOT_MENU_TYPE" => "top",
                      "MAX_LEVEL" => "1",
                      "CHILD_MENU_TYPE" => "top",
                      "USE_EXT" => "Y",
                      "DELAY" => "N",
                      "ALLOW_MULTI_SELECT" => "Y",
                      "MENU_CACHE_TYPE" => "N",
                      "MENU_CACHE_TIME" => "3600",
                      "MENU_CACHE_USE_GROUPS" => "Y",
                      "MENU_CACHE_GET_VARS" => ""
                    )
                  );?>
                </div>
            </div>
        </div>

        <div class="header__right">
            <img src="<?=SITE_TEMPLATE_PATH; ?>/img/svg/ligastavok.svg" alt="Лига ставок" class="svg-inject-me">
        </div>
    </header>

    <div class="content">

    <?$APPLICATION->IncludeComponent(
      "bitrix:breadcrumb",
      "hockey",
      array(
        "START_FROM" => "0",
        "PATH" => "",
        "SITE_ID" => "s1",
        "COMPONENT_TEMPLATE" => "hockey"
      ),
      false
    );?>