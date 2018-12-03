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

<div class="main-news" id="scroll-news">
    <div class="wrapp main-news__wrapp">
        <h3 class="title title--green main-news__title">
            Новости
            <div class="title__line">
                <img src="assets/img/svg/title-line.svg" alt="" class="svg-inject-me">
            </div>
        </h3>
        <div class="main-news__content">
            <div class="main-news-list">
                <div class="main-news-list__items">
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                    <?foreach($arResult["ITEMS"] as $key => $arItem) { ?>
                    <div class="main-news-list__item">
                        <div class="main-news-list__photo" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);"></div>
                        <div class="main-news-list__info">
                            <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
                                <div class="main-news-list__date">
                                    <?=$arItem["DISPLAY_ACTIVE_FROM"]?>
                                </div>
                            <?endif?>
                            <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="main-news-list__title"><?=$arItem["NAME"]?></a>
                            <?else:?>
                                <?=$arItem["NAME"]?>
                            <?endif;?>
                        </div>
                    </div>
                    <? } ?>
                </div>
            </div>
            <div class="main-news-last-news">
                <div class="main-news-last-news__photo" style="background-image: url(<?=$arResult["LAST_ITEM"]["PREVIEW_PICTURE"]["SRC"]; ?>);"></div>
                <div class="main-news-last-news__info">
                    <?if($arParams["DISPLAY_DATE"]!="N" && $arResult["LAST_ITEM"]["DISPLAY_ACTIVE_FROM"]):?>
                    <div class="main-news-last-news__date"><?=$arResult["LAST_ITEM"]["DISPLAY_ACTIVE_FROM"]; ?></div>
                    <? endif; ?>
                    <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arResult["LAST_ITEM"]["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                    <a href="<?=$arResult["LAST_ITEM"]["DETAIL_PAGE_URL"]; ?>" class="main-news-last-news__title"><?=$arResult["LAST_ITEM"]["NAME"]; ?></a>
                    <? else: ?>
                        <?=$arResult["LAST_ITEM"]["NAME"]; ?>
                    <? endif; ?>
                </div>
            </div>
        </div>
        <div class="main-news__footer">
            <button class="btn-brown-style main-news__btn" onclick="location.href = '<?=$arResult['LIST_PAGE_URL']?>';">
                <?=GetMessage("MAIN_NEWS_READ_MORE"); ?>
                <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            </button>
        </div>
    </div>
</div>

