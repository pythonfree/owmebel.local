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

<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
<div class="ps_head" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
    <a class="ps_head_link" href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><h2 class="ps_head_h"><?echo $arItem["NAME"]?></h2></a>
    <span class="ps_date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span></div>
<div class="ps_content">
    <?if(is_array($arItem["PREVIEW_PICTURE"])):?>
    <img src="<?= $arItem["PREVIEW_PICTURE"]['SRC']; ?>" align="left" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"/>
    <?php endif; ?>
    <?echo $arItem["PREVIEW_TEXT"];?>
    <div class="clearboth"></div>
</div>
<?endforeach;?>

