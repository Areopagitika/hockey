<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<h1 class="title title--green title--center">
    <?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
        <?=$arResult["NAME"]?>
    <?endif;?>
    <div class="title__line">
        <img src="<?=SITE_TEMPLATE_PATH; ?>/img/svg/title-line.svg" alt="" class="svg-inject-me">
    </div>
</h1>
<div class="news-detail">
    <div class="news-detail__date">
        <?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
            <?=$arResult["DISPLAY_ACTIVE_FROM"]?>
        <?endif;?>
    </div>
    <div class="news-detail__content">
        <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
            <img
                    src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
                    width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
                    height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
                    style="float:left; margin: 0 20px 20px 0;"
                    alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
                    title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
            />
        <?endif?>
        <?if(strlen($arResult["DETAIL_TEXT"])>0):?>
            <?=$arResult["DETAIL_TEXT"];?>
        <?else:?>
            <?=$arResult["PREVIEW_TEXT"];?>
        <?endif?>
    </div>
</div>
<div class="news-next-prev">
    <div class="news-next-prev__item">
        <? if(!empty($arResult['PREV'])): ?>
        <div class="news-next-prev__title">
            Предыдущая новость
        </div>
        <div class="news-list-item">
            <div class="news-list-item__photo" style="background-image: url(<?=CFile::GetPath($arResult['PREV']['PREVIEW_PICTURE']); ?>);"></div>
            <div class="news-list-item__info">
                <div class="news-list-item__date"><?=$arResult['PREV']['DATE_ACTIVE_FROM']; ?></div>
                <a href="<?=$arResult['PREV']['DETAIL_PAGE_URL']; ?>" class="news-list-item__title"><?=$arResult['PREV']['NAME']; ?></a>
            </div>
        </div>
        <? endif; ?>
    </div>
    <div class="news-next-prev__item">
        <? if(!empty($arResult['NEXT'])): ?>
        <div class="news-next-prev__title">
            Следующая новость
        </div>
        <div class="news-list-item">

            <div class="news-list-item__photo" style="background-image: url(<?=CFile::GetPath($arResult['NEXT']['PREVIEW_PICTURE']); ?>)"></div>
            <div class="news-list-item__info">
                <div class="news-list-item__date"><?=$arResult['NEXT']['DATE_ACTIVE_FROM']; ?></div>
                <a href="<?=$arResult['NEXT']['DETAIL_PAGE_URL']; ?>" class="news-list-item__title"><?=$arResult['NEXT']['NAME']; ?></a>
            </div>
        </div>
        <? endif; ?>
    </div>
</div>