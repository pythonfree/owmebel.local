<?php

//echo 'main init!<br>';

if (file_exists($_SERVER["DOCUMENT_ROOT"] . '/bitrix/php_interface/include/functions.php')) {
    require_once $_SERVER["DOCUMENT_ROOT"] . '/bitrix/php_interface/include/functions.php';
}

define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/LOG_FILENAME.txt");
