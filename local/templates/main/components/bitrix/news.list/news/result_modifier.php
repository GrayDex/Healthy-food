<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;

echo print_r($_GET, 1);

if (CModule::IncludeModule('iblock')) {

	$rsSections = CIBlockSection::GetList(array(), array('IBLOCK_ID' => $arResult['ITEMS'][0]['IBLOCK_ID']));

	while ($arSection = $rsSections->GetNext()) {

		if ($arSection['CODE'] == $_GET['SECTION_CODE']) {
			$arResult['ACTIVE_SECTION_ID'] = $arSection['ID'];
		}

		$arResult['SECT_BY_ID'][$arSection['ID']] = [
			'ID' => $arSection['ID'],
			'NAME' => $arSection['NAME'],
			'SECTION_PAGE_URL' => $arSection['SECTION_PAGE_URL'],
		];
	}
}


if ($arResult['ACTIVE_SECTION_ID']) {
	$active_id = $arResult['ACTIVE_SECTION_ID'];

	$arResult['ITEMS'] = array_filter($arResult['ITEMS'], function ($var) use ($active_id) {
		return $var['IBLOCK_SECTION_ID'] == $active_id;
	});
}