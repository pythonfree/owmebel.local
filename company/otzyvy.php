<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("test", "Тестовое значение");
$APPLICATION->SetPageProperty("title", "Заголовок окна браузера");
$APPLICATION->SetPageProperty("keywords", "Отзывы, компания, мебель");
$APPLICATION->SetPageProperty("description", "Отзывы о компании");
$APPLICATION->SetTitle("Отзывы страницы");
?>

<p>test - <?php $APPLICATION->ShowProperty('test'); ?></p>
<p>Заголовок - <?php $APPLICATION->ShowTitle(); ?></p>
<p>Заголовок 2 - <?php $APPLICATION->ShowTitle(false); ?></p>
<p>title - <?php $APPLICATION->ShowProperty('title'); ?></p>
<p>keywords - <?php $APPLICATION->ShowProperty('keywords'); ?></p>
<p>description - <?php $APPLICATION->ShowProperty('description'); ?></p>

<?php $APPLICATION->SetPageProperty("test", "значение 2"); ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>