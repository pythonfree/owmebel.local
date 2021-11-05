<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?$APPLICATION->IncludeComponent(
	"bitrix:menu.sections", 
	"", 
	array(
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"DEPTH_LEVEL" => "3",
		"DETAIL_PAGE_URL" => "#SECTION_ID#/#ELEMENT_ID#",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "products",
		"ID" => $_REQUEST["ID"],
		"IS_SEF" => "Y",
		"SECTION_PAGE_URL" => "#SECTION_ID#/",
		"SECTION_URL" => "",
		"SEF_BASE_URL" => "/catalog/"
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>