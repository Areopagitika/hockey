<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
  
  <nav class="header-menu">
    <?if (!empty($arResult)) { ?>
      <ul class="vertical medium-horizontal menu header-menu__list">
        <? foreach($arResult as $arItem) {
          if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
            continue;
          ?>
          <?if($arItem["SELECTED"]) { ?>
            <li class="header-menu__item is-active"><a href="<?=$arItem["LINK"]?>" class="header-menu__link"><?=$arItem["TEXT"]?></a></li>
          <? } else { ?>
            <li class="header-menu__item"><a href="<?=$arItem["LINK"]?>" class="header-menu__link"><?=$arItem["TEXT"]?></a></li>
          <? } ?>
        <? } ?>
      </ul>
    <? } ?>
  </nav>