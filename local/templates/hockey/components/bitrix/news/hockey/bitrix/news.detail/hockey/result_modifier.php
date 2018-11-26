<?php

$res = CIBlockElement::GetList(        
    array('ACTIVE_FROM' => 'desc','ID' => 'DESC'),
    array(
        'IBLOCK_ID' => $arResult['IBLOCK_ID'],
        'ACTIVE' => 'Y'
    ),
    false,
    array(
        'nElementID' => $arResult['ID'],
        'nPageSize' => 1,
    ),
    array('ID', 'NAME', 'PREVIEW_PICTURE', 'DETAIL_PAGE_URL', 'ACTIVE_FROM')
);

while ($row = $res->getNext()) {
      //$row['PREVIEW_PICTURE'] = CFile::GetFileArray($row['PREVIEW_PICTURE']);
      if ($arResult['ID'] == $row['ID']) {
         $arResult['CURRENT'] = $row;
      } elseif ($i > 0 && !empty($arResult['CURRENT'])) {
         $arResult['PREV'] = $row;
      }
      if ($i == 0 && empty($arResult['CURRENT'])) {
         $arResult['NEXT'] = $row;
      }
      $i++;
   }

?>