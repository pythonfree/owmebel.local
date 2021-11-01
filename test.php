<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?>

    <div class="bc_breadcrumbs">
        <ul>
            <li>
                <a href="/" title="Главная">Главная</a>
            </li>
            <li>Новости</li>
            <li>
                <a href="/test1.php" title="Пункт 1">Пункт 1</a>
            </li>
            <li>
                <a href="/test2.php" title="Пункт 2">Пункт 2</a>
            </li>
        </ul>
        <div style="clearboth"></div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>