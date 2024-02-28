<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;

foreach ($arResult['SECTIONS'] as $key => $arSection) {

    $size = ['width' => 324, 'height' => 640];
    if ($key > 1) {
        $size = ['width' => 670, 'height' => 240];
    }
    $resized_image = CFile::ResizeImageGet($arSection["DETAIL_PICTURE"], $size, BX_RESIZE_IMAGE_EXACT);

    $arResult['SECTIONS'][$key]['SRC_IMG'] = $resized_image['src'];
}

