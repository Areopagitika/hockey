<?php

foreach($arResult["ITEMS"] as $key => $value) {
    if($key == 0) {
        $arResult["LAST_ITEM"] = $value;
        unset($arResult["ITEMS"][$key]);
    }
    break;
}

?>