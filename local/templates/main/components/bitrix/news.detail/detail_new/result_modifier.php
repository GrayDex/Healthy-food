<?php
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