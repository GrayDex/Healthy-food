<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Main site"); ?><br>
<!-- <br>-->
<!-- <br>-->
<!-- <br>-->
<!-- <br>-->
<!-- <br>-->
<!-- <br>-->
<!-- <br>-->
<!-- <br>-->
<!-- <br>-->
<!-- <br>--><?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu_dropdown", 
	array(
		"COMPONENT_TEMPLATE" => "menu_dropdown",
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>