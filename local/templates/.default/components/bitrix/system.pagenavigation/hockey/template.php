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

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>

<nav aria-label="Pagination">
    <ul class="pagination text-center">

<?if($arResult["bDescPageNumbering"] === true):?>

	<?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<?if($arResult["bSavePage"]):?>
            <li class="pagination__previous"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><i class="fa fa-angle-left"></i></a></li>
		<?else:?>
			<?if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1) ):?>
                <li class="pagination__previous"><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><i class="fa fa-angle-left"></i></a></li>
			<?else:?>
                <li class="pagination__previous"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><i class="fa fa-angle-left"></i></a></li>
			<?endif?>
		<?endif?>
	<?else:?>
        <li class="pagination__previous disabled"><i class="fa fa-angle-left"></i></li>
	<?endif?>

	<?while($arResult["nStartPage"] >= $arResult["nEndPage"]):?>
		<?$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
            <li class="pagination__current"><?=$NavRecordGroupPrint?></li>
		<?elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):?>
            <li><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>" aria-label="Page <?=$NavRecordGroupPrint?>"><?=$NavRecordGroupPrint?></a></li>
		<?else:?>
            <li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>" aria-label="Page <?=$NavRecordGroupPrint?>"><?=$NavRecordGroupPrint?></a></li>
		<?endif?>

		<?$arResult["nStartPage"]--?>
	<?endwhile?>

	<?if ($arResult["NavPageNomer"] > 1):?>
        <li class="pagination__next"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><i class="fa fa-angle-right"></i></a></li>
	<?else:?>
        <li class="pagination__next disabled"><i class="fa fa-angle-right"></i></li>
	<?endif?>

<?else:?>

	<?if ($arResult["NavPageNomer"] > 1):?>

		<?if($arResult["bSavePage"]):?>
            <li class="pagination__previous"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><i class="fa fa-angle-left"></i></a></li>
		<?else:?>
			<?if ($arResult["NavPageNomer"] > 2):?>
                <li class="pagination__previous"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><i class="fa fa-angle-left"></i></a></li>
			<?else:?>
                <li class="pagination__previous"><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><i class="fa fa-angle-left"></i></a></li>
			<?endif?>
		<?endif?>

	<?else:?>
        <li class="pagination__previous disabled"><i class="fa fa-angle-left"></i></li>
	<?endif?>

	<?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
            <li class="pagination__current"><?=$arResult["nStartPage"]?></li>
		<?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
            <li><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>" aria-label="Page <?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a></li>
		<?else:?>
            <li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>" aria-label="Page <?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a></li>
		<?endif?>
		<?$arResult["nStartPage"]++?>
	<?endwhile?>

	<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
        <li class="pagination__next"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><i class="fa fa-angle-right"></i></a></li>
	<?else:?>
        <li class="pagination__next disabled"><i class="fa fa-angle-right"></i></li>
	<?endif?>

<?endif?>


<?if ($arResult["bShowAll"]):?>
<noindex>
	<?if ($arResult["NavShowAll"]):?>
		&nbsp;<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=0" rel="nofollow"><?=GetMessage("nav_paged")?></a>
	<?else:?>
		&nbsp;<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=1" rel="nofollow"><?=GetMessage("nav_all")?></a>
	<?endif?>
</noindex>
<?endif?>

    </ul>
</nav>