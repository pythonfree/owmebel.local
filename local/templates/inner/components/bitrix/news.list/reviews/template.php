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

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<div class="review-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
    <div class="review-text">
        <div class="review-block-title">
            <?php $arProps = [];?>
            <?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                <?php if($arProperty["NAME"] == 'Автор'): ?>
                    <span class="review-block-name">
                        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arProperty["DISPLAY_VALUE"]?></a>
                    </span>
                <?php endif; ?>
                <?php
                if($arProperty["NAME"] == 'Должность') {
                    $arProps['JOB'] = $arProperty["DISPLAY_VALUE"];
                }
                if($arProperty["NAME"] == 'Компания') {
                    $arProps['COMPANY'] = $arProperty["DISPLAY_VALUE"];
                }
                ?>
                <?php if(count($arProps) === 2): ?>
                    <span class="review-block-description">
                    <?= $arProps['JOB'] . ' ' . $arProps['COMPANY']; ?>
                    </span>
                <?php endif; ?>
            <? endforeach; ?>
        </div>
        <div class="review-text-cont">
            <?echo $arItem["PREVIEW_TEXT"];?>
        </div>
    </div>
    <div class="review-img-wrap">
        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
            <?if(is_array($arItem["PREVIEW_PICTURE"])):?>
            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="img">
            <?php endif; ?>
        </a>
    </div>
</div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <br /><?=$arResult["NAV_STRING"]?>
<?endif;?>