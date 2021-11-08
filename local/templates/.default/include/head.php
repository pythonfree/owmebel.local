<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @global CMain $APPLICATION */
$APPLICATION->ShowHead();

if (!defined("SITE_TEMPLATE_PATH")) {
    define("SITE_TEMPLATE_PATH", 'устраняем предупреждения об непределенной константе');
}

$assets = \Bitrix\Main\Page\Asset::getInstance();
$assets->addCss(SITE_TEMPLATE_PATH . '/../.default/template_styles.css');
$assets->addCss(SITE_TEMPLATE_PATH . '/../.default/styles.css');

$assets->addJs(SITE_TEMPLATE_PATH . '/../.default/js/jquery-1.8.2.min.js');
$assets->addJs(SITE_TEMPLATE_PATH . '/../.default/js/slides.min.jquery.js');
$assets->addJs(SITE_TEMPLATE_PATH . '/../.default/js/jquery.carouFredSel-6.1.0-packed.js');
$assets->addJs(SITE_TEMPLATE_PATH . '/../.default/js/functions.js');
?>
<link rel="shortcut icon" type="image/x-icon" href="<?= SITE_DIR . 'local/templates/.default/favicon.ico' ?>">

<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
