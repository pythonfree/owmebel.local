<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?>

<?= getUserId(); ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>