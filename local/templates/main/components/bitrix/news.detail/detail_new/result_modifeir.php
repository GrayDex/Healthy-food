<?php
dd($_GET['ELEMENT_CODE']);
if ($_GET['ELEMENT_CODE']) {
	$rsElem = CIBlockElement::GetList(array(), array('CODE' => $_GET['ELEMENT_CODE']));
	$arElem = $rsElem->GetNext();
	dd($arElem);
}