<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="<?=LANGUAGE_ID?>">
<head>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/local/templates/.default/include/head.php'; ?>

    <title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="wrap">
    <div class="hd_header_area">
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/local/templates/.default/include/header.php'; ?>
    </div>
    <!--- // end header area --->
    <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "nav", Array(
        "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
        "SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
        "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
    ),
        false
    );?>
    <div class="main_container page">
        <div class="mn_container">
            <div class="mn_content">
                <div class="main_post">
                    <div class="main_title">
                        <p class="title">
                            <?$APPLICATION->ShowTitle(false)?>
<!--                            --><?//$APPLICATION->ShowViewContent('vote');?>
                        </p>
                    </div>
                    <!-- workarea -->