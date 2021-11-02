<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="main_title">
    <p class="title"><?=$arResult["NAME"]?></p><span class="main_date"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
</div>
<div class="ps_content">
    <?if(is_array($arResult["DETAIL_PICTURE"])):?>
    <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" align="left" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"/>
    <?php endif; ?>
    <?echo $arResult["DETAIL_TEXT"];?>
    <a href="<?=$arResult["LIST_PAGE_URL"]?>" class="ps_backnewslist"><?=GetMessage("ALL_NEWS");?></a>
</div>
