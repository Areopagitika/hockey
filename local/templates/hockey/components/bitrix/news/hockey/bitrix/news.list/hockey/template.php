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
    <?=$APPLICATION->GetTitle("Новости");?>
    <div class="title__line">
        <img src="<?=SITE_TEMPLATE_PATH; ?>/img/svg/title-line.svg" alt="" class="svg-inject-me">
    </div>
</h1>
<div class="news-list__items">
<?if($arParams["DISPLAY_TOP_PAGER"]) { ?>
	<?=$arResult["NAV_STRING"]?><br />
<? } ?>
<?foreach($arResult["ITEMS"] as $arItem) {
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="news-list-item">
        <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
            <div class="news-list-item__photo" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);"></div>
        <?endif?>
        <div class="news-list-item__info">
            <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
                <div class="news-list-item__date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></div>
            <?endif?>
            <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news-list-item__title"><?= $arItem["NAME"]?></a>
                <?else:?>
                    <?=$arItem["NAME"]?>
                <?endif;?>
            <?endif;?>
        </div>
    </div>
<? } ?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]) { ?>
    <?=$arResult["NAV_STRING"]?>
<? } ?>
