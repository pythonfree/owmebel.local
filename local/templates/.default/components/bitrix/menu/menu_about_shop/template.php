<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="ft_about">
    <h4><?= GetMessage('ABOUT_SHOP'); ?></h4>
<?if (!empty($arResult)):?>
<ul>

<?foreach($arResult as $arItem):?>
    <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
<?endforeach?>

</ul>
<?endif?>
</div>
