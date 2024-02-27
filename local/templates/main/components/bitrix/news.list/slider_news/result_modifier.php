<?php if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;

foreach ($arResult['ITEMS'] as &$arItem){
	$arItem['DATE_ACTIVE'] = FormatDate('d F Y',MakeTimeStamp($arItem['DATE_ACTIVE_FROM']));
	unset($arItem);
}