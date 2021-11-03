<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
    <div class="hd_header">
        <table>
            <tr>
                <td rowspan="2" class="hd_companyname">
                    <h1><?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/logo.php"
                            )
                        );?></h1>
                </td>
                <td rowspan="2" class="hd_txarea">
                        <span class="tel"><?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/phone.php"
                                )
                            );?></span>	<br/>
                    <?=GetMessage('WORKING_TIME');?> <span class="workhours">ежедневно с 9-00 до 18-00</span>
                </td>
                <td style="width:232px">

                    <?$APPLICATION->IncludeComponent("bitrix:search.form", "head", Array(
                        "PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
                        "USE_SUGGEST" => "N",	// Показывать подсказку с поисковыми фразами
                    ),
                        false
                    );?>

                </td>
            </tr>
            <tr>
                <td style="padding-top: 11px;">

                    <?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "auth", Array(
                        "FORGOT_PASSWORD_URL" => "/user/",	// Страница забытого пароля
                        "PROFILE_URL" => "/user/profile.php",	// Страница профиля
                        "REGISTER_URL" => "/user/registration.php",	// Страница регистрации
                        "SHOW_ERRORS" => "N",	// Показывать ошибки
                    ),
                        false
                    );?>

                </td>
            </tr>
        </table>
        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "top_multi",
            Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "DELAY" => "N",
                "MAX_LEVEL" => "2",
                "MENU_CACHE_GET_VARS" => array(0=>"",),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "N"
            )
        );?>
    </div>

