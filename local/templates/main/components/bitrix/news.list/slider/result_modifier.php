<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;

foreach ($arResult['ITEMS'] as &$arItem) {
	$img_id = $arItem['PREVIEW_PICTURE']['ID'];
	$file_by_id = CFile::GetFileArray($img_id);
	$resized_image = CFile::ResizeImageGet($file_by_id, ['width' => 1840, 'height' => 760]);
	$arItem['SRC_IMG'] = $resized_image['src'];
	unset($arItem);
}

