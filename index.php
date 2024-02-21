<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Main site");

?><br>
 <br>
 <br>
 <br>
 <br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => "",
		"EDIT_TEMPLATE" => ""
	),
	false
);?><br>
 <br>
 <br>
 <br><?php require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>