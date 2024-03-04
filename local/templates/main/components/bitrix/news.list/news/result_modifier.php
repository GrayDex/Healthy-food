<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;

foreach ($arResult['ITEMS'] as $key => $arItem)
{
    $picKeys = ['PREVIEW_PICTURE', 'DETAIL_PICTURE'];
    foreach($picKeys as $picKey)
    {
        if ($arItem[$picKey])
        {
            $picId = $arResult['ITEMS'][$key][$picKey]['ID'];
            $size = ["width" => 1200, "height" => 800];
            $resArr = CFile::ResizeImageGet($picId, $size, BX_RESIZE_IMAGE_EXACT);
            $arResult['ITEMS'][$key][$picKey]['RES_PIC_SRC'] = $resArr['src'];
        }
    }
}

if (CModule::IncludeModule('iblock'))
{
    $rsSections = CIBlockSection::GetList(array(), array('IBLOCK_CODE' => $arResult['CODE']));

    $arResult['SECTION_BY_ID'][] = [
        'ID' => 0,
        'NAME' => 'Все',
        'SECTION_PAGE_URL' => '/news/',
        'IS_ACTIVE' => !$_GET['SECTION_CODE'],
    ];

    while ($arSection = $rsSections->GetNext())
    {
        $arResult['SECTION_BY_ID'][$arSection['ID']] = [
            'ID' => $arSection['ID'],
            'NAME' => $arSection['NAME'],
            'SECTION_PAGE_URL' => $arSection['SECTION_PAGE_URL'],
            'IS_ACTIVE' => $arSection['CODE'] == $_GET['SECTION_CODE'],
        ];
    }

    foreach ($arResult['ITEMS'] as $key => $arItem) {

        $itemSectionId = $arItem['IBLOCK_SECTION_ID'];
		if (!empty($itemSectionId))
		{
            $arResult['ITEMS'][$key]['SECTION_NAME'] = $arResult['SECTION_BY_ID'][$itemSectionId]['NAME'];
        } else {
            unset($arResult['ITEMS'][$key]);
        }
	}
}
