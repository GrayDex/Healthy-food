<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;

foreach ($arResult['SECTIONS'] as $key => $arSection) {
    dd($arSection);
    if (!empty($arSection["PICTURE"])) {
        $size = ['width' => 1200, 'height' => 706];
        $resized_image = CFile::ResizeImageGet($arSection["PICTURE"], $size, BX_RESIZE_IMAGE_EXACT);
        $arResult['SECTIONS'][$key]['SRC_IMG'] = $resized_image['src'];
    }

    if (!empty($arSection["DETAIL_PICTURE"])) {
        $size = ['width' => 630, 'height' => 240];

        $resized_image = CFile::ResizeImageGet($arSection["DETAIL_PICTURE"], $size, BX_RESIZE_IMAGE_EXACT);
        $arResult['SECTIONS'][$key]['SRC_IMG_MOBILE'] = $resized_image['src'];
    }

    if (!empty($arSection['UF_COLOR'])) {
        $field = CUserFieldEnum::GetList(array(), array('ID' => $arSection['UF_COLOR']));
        $arResult['SECTIONS'][$key]['UF_COLOR'] = $field->arResult[0]['VALUE'];
    }
}

