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
<span></span>
<?
$this->AddEditAction($arResult['ITEMS'][0]['ID'], $arResult['ITEMS'][0]['EDIT_LINK'], CIBlock::GetArrayByID($arResult['ITEMS'][0]["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arResult['ITEMS'][0]['ID'], $arResult['ITEMS'][0]['DELETE_LINK'], CIBlock::GetArrayByID($arResult['ITEMS'][0]["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<div class="sb_reviewed" id="<?=$this->GetEditAreaId($arResult['ITEMS'][0]['ID']);?>">
    <?if(is_array($arResult['ITEMS'][0]["PREVIEW_PICTURE"])):?>
        <img src="<?=$arResult['ITEMS'][0]["PREVIEW_PICTURE"]["SRC"]?>" class="sb_rw_avatar" alt=""/>
    <?php endif; ?>
    <span class="sb_rw_name"><?=$arResult['ITEMS'][0]["PROPERTIES"]["AUTHOR"]['VALUE']?></span>
    <span class="sb_rw_job"><?=$arResult['ITEMS'][0]["PROPERTIES"]["JOB"]['VALUE']?> “<?=$arResult['ITEMS'][0]["PROPERTIES"]["COMPANY"]['VALUE']?>”</span>
    <p>“<?echo $arResult['ITEMS'][0]["PREVIEW_TEXT"];?>”</p>
    <div class="clearboth"></div>
    <div class="sb_rw_arrow"></div>
    <a href="<?=$arResult['ITEMS'][0]["DETAIL_PAGE_URL"]?>" class="sb_action_more">Подробнее &rarr;</a>
</div>