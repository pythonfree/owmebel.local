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

<script type="text/javascript" >
    $(document).ready(function(){

        $("#foo").carouFredSel({
            items:2,
            prev:'#rwprev',
            next:'#rwnext',
            scroll:{
                items:1,
                duration:2000
            }
        });
    });
</script>

<div class="rw_reviewed">
    <div class="rw_slider">
        <h4>Отзывы</h4>
        <ul id="foo">
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <li>
                <div class="rw_message" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <?if(is_array($arItem["PREVIEW_PICTURE"])):?>
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="rw_avatar" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"/>
                    <?php endif; ?>
                    <?php $arProps = [];?>
                    <?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                        <?php if($arProperty["NAME"] == 'Автор'): ?>
                            <span class="rw_name"><?=$arProperty["DISPLAY_VALUE"]?></span>
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
                            <span class="rw_job">
                            <?= $arProps['JOB'] . ' “' . $arProps['COMPANY'] . '“'; ?>
                            </span>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <p>“<?echo $arItem["PREVIEW_TEXT"];?>”</p>
                    <div class="clearboth"></div>
                    <div class="rw_arrow"></div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
        <div id="rwprev"></div>
        <div id="rwnext"></div>
        <a href="/company/reviews/" class="rw_allreviewed">Все отзывы</a>
    </div>
</div>
