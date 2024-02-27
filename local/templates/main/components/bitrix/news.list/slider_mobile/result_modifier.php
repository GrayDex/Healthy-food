<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;

foreach ($arResult['ITEMS'] as &$arItem) {
	$img_id = $arItem['PROPERTIES']['IMG_MOBILE']['VALUE'];
	$file_by_id = CFile::GetFileArray($img_id);
	$resized_image = CFile::ResizeImageGet($file_by_id, ['width' => 670, 'height' => 1000]);
	$arItem['SRC_IMG'] = $resized_image['src'];
	unset($arItem);
}

