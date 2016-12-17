<? define("MRSOFT_FROM", "redirect_download_overview");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "скачать бесплатный антивирусы, антивирусники, антивирусы бесплатно скачать без регистрации, антивирусные программы, бесплатный антивирус лучшие, антивирусы на компьютер скачать бесплатно, бесплатные антивирусы скачать на компьютер, бесплатные антивирусы установить");
$APPLICATION->SetPageProperty("description", "Попробуйте бесплатно антивирусную программу ESET NOD32, скачайте бесплатную пробную версию антивируса для компьютера на месяц");
$APPLICATION->SetTitle("ESET NOD32 | Скачать и установить антивирус бесплатно"); ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/download/sect_popup-download.php"); ?>
<?$APPLICATION->AddChainItem("Антивирусы скачать", "https://esetnod32.ru/download/");?>
<div class="b-download">
    <? /*
    <div class="b-banner b-banner__smart-bb">
        <input type="hidden" id="trials" value="" />
        <input type="hidden" id="section_id_overview_parent_name" value="Скачать / Обзор" />
        <img src="images/banner__smart_970_282.jpg" alt="">
        <div class="b-banner__button">
            <div class="ButtonsHolder28">
                <div class="green28">
                    <p>
                        <a href="http://shop.esetnod32.ru/catalogue/home/cat_id.6/buy.215925/" data-from="eset_download_overview_banner_ess_plus_tcs">
                            <span class="text-bold"><i>Купить</i></span>
                        </a>
                    </p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="ButtonsHolder28">
                <div class="grey28">
                    <p>
                        <a href="http://download.esetnod32.ru/home/trial/8/ess_trial32_rus.exe" class="click-shop" product_id="<?=constant("MRSOFT_PRODUCT_ID_110")?>" product_name="ESET NOD32 Smart Security x32 from banner" data-from="<?=constant("MRSOFT_FROM")?>" section_id="overview" product_id_r="68">
                            <span class="text-bold"><i>Скачать для 32-бит Windows</i></span>
                        </a>
                    </p>
                </div>
                <div class="grey28">
                    <p>
                        <a href="http://download.esetnod32.ru/home/trial/8/ess_trial64_rus.exe" class="click-shop" product_id="<?=constant("MRSOFT_PRODUCT_ID_110")?>" product_name="ESET NOD32 Smart Security x64 from banner" section_id="overview" product_id_r="68">
                            <span class="text-bold"><i>Скачать для 64-бит Windows</i></span>
                        </a>
                    </p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="b-banner__bottom-anketa"><a target="_blank" href="https://www.tcsbank.ru/credit/form/esetnod32/?utm_source=esetnod32_cc" data-ga-event="tcsbank" data-ga-action="download-overview">Заполните анкету и получите ESET NOD32 бесплатно!*</a></div>
    </div>
    */ ?>
    <?if($_SERVER["SERVER_NAME"] != "www.eset.kz"):?>
        <div class="b-cover b-cover__download-overview">
            <img style="border-radius:0 0 5px 5px;" src="images/banner__home_2016-09-01.jpg" alt="" height="334">
            <div class="b-cover__content">
                <a class="b-btn b-btn__green" href="https://shop.esetnod32.ru/catalogue/home/buy.1629780/from.eset_promo.esetnod32.ru_14 " data-from="eset_product_family_banner">Купить</a>
                <a class="b-btn b-btn__gray" href="http://promo.esetnod32.ru/?utm_source=eset&utm_content=from&utm_medium=banner&utm_campaign=eset_promo_14">Подробнее</a>


                <?/*a class="b-btn b-btn__green link__buy-popup" href="#" data-ga-event="Скачать / Обзор" data-ga-action="Баннер ESET NOD32 Smart Security / Скачать бесплатно" data-online="https://download.esetnod32.ru/home/trial/9/ess_trial32_rus.exe" data-online-redirect="http://shop.esetnod32.ru/catalogue/home/cat_id.6/buy.215925/from.eset_redirect_download_overview_ess_32x" data-partner="https://download.esetnod32.ru/home/trial/9/ess_trial64_rus.exe" data-partner-redirect="http://shop.esetnod32.ru/catalogue/home/cat_id.6/buy.215925/from.eset_redirect_download_overview_ess_64x" data-modal="where-buy">Скачать бесплатно</a*/?>
                <div class="clear"></div>
            </div>
        </div>
    <?endif;?>
    <?/*$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "section-tabs",
        Array(
            "ROOT_MENU_TYPE" => "menu-tabs",
            "MAX_LEVEL" => "1",
            "CHILD_MENU_TYPE" => "",
            "USE_EXT" => "N",
            "DELAY" => "N",
            "ALLOW_MULTI_SELECT" => "N",
            "MENU_CACHE_TYPE" => "A",
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "MENU_CACHE_GET_VARS" => array()
        ),
        false
    );*/?>
    <div class="b-product">

        <div class="b-download-overview">
            <div class="b-download-overview__in">
                <ul class="b-download-overview__ul b-clear">
                    <li class="b-download-overview__item">
                        <a href="/download/home/trial/" class="b-download-overview__title">
                            <span class="b-download-overview__ico b-download-overview__ico-home"></span><span class="b-download-overview__name">Для дома</span>
                        </a>
                        <div class="b-download-overview__desc">
                            Скачайте бесплатные<br>пробные версии
                        </div>
                        <div class="b-download-overview__btn">
                            <a href="/download/home/trial/" class="b-btn b-btn__green">Скачать</a>
                        </div>
                        <div class="b-download-overview__more">
                            <div class="b-download-overview__link">
                                <a href="/download/home/commercial/" class="b-download-overview__a">Скачать коммерческий дистрибутив</a>
                            </div>
                            <div class="b-download-overview__link">
                                <a href="/download/manuals/home/" class="b-download-overview__a">Документация</a>
                            </div>
                            <div class="b-download-overview__link">
                                <a href="http://shop.esetnod32.ru/catalogue/home/cat_id.6/buy.215925/" data-from="eset_download_overview_ns" class="b-download-overview__a">Купить лицензию</a>
                            </div>
                            <div class="b-download-overview__link">
                                <a href="http://shop.esetnod32.ru/catalogue/home/cat_id.6/buy.246309/" data-from="eset_download_overview_rn" class="b-download-overview__a">Продлить лицензию</a>
                            </div>
                        </div>
                    </li><li class="b-download-overview__item">
                        <a href="/download/business/trial/" class="b-download-overview__title">
                            <span class="b-download-overview__ico b-download-overview__ico-business"></span><span class="b-download-overview__name">Для бизнеса</span>
                        </a>
                        <div class="b-download-overview__desc">
                            Скачайте бесплатные<br>пробные версии
                        </div>
                        <div class="b-download-overview__btn">
                            <a href="/download/business/trial/" class="b-btn b-btn__green">Скачать</a>
                        </div>
                        <div class="b-download-overview__more">
                            <div class="b-download-overview__link">
                                <a href="/download/business/commercial/workstations/" class="b-download-overview__a">Скачать коммерческий дистрибутив</a>
                            </div>
                            <div class="b-download-overview__link">
                                <a href="/download/manuals/business/" class="b-download-overview__a">Документация</a>
                            </div>
                            <div class="b-download-overview__link">
                                <a href="https://shop.esetnod32.ru/catalogue/home/cat_buy.31/" data-from="eset_download_overview_sbp" class="b-download-overview__a">Купить лицензию</a>
                            </div>
                        </div>
                    </li><li class="b-download-overview__item">
                        <a href="http://download.eset.com/special/eos/ESETOnlineScanner_RUS.exe" class="b-download-overview__title" data-param-from="download_overview_button" data-ga-event="Online Scanner" data-ga-action="Скачать - Обзор / Кнопка Запустить">
                            <span class="b-download-overview__ico b-download-overview__ico-scanner"></span><span class="b-download-overview__name">Онлайн-сканер</span>
                        </a>
                        <div class="b-download-overview__desc">
                            Проверьте компьютер<br>на вирусы бесплатно
                        </div>
                        <div class="b-download-overview__btn">
                            <a href="http://download.eset.com/special/eos/ESETOnlineScanner_RUS.exe" class="b-btn b-btn__blue" data-param-from="download_overview_button" data-ga-event="Online Scanner" data-ga-action="Скачать - Обзор / Кнопка Запустить">Запустить</a>
                        </div>
                        <div class="b-download-overview__more">
                            <div class="b-download-overview__link">
                                <a href="/home/products/online-scanner/" class="b-download-overview__a">Подробнее</a>
                            </div>
                            <div class="b-download-overview__link">
                                <a href="/home/services/support/?from=download_overview" class="b-download-overview__a">Сервисы ESET</a>
                            </div>
							<div class="b-download-overview__link">
                                <a href="/download/utilities/ " class="b-download-overview__a">Утилиты ESET</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="b-product-text" style="margin-top: 40px;">
            <p>Выбираете софт для персонального компьютера? Установите антивирусные программы компании ESET.</p>
            <p>Почему именно ESET NOD32? ESET – эксперт по защите от киберугроз и пионер в области эвристики – технологии, которая позволяет обезвредить как известные, так и новые вредоносные программы. ESET NOD32 доверяют 15 миллионов пользователей в России и СНГ и 100 миллионов в мире.</p>
            <p>Здесь вы сможете скачать и установить любой антивирус ESET NOD32 бесплатно, достаточно загрузить инсталлятор и запустить его. </p>
            <p>Предлагаем частным и корпоративным пользователям защитить компьютеры от вирусов и вредоносного ПО. Для этого достаточно скачать антивирус бесплатно с нашего сайта.</p>
            <p>Скачивай антивирусные программы только в надежных источниках! На сторонних и пиратских сайтах есть шанс получить программу ненадлежащего качества или вредоносное ПО под видом антивируса.</p>
        </div>

        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "sect",
                "AREA_FILE_SUFFIX" => "bottom",
                "AREA_FILE_RECURSIVE" => "Y",
                "EDIT_TEMPLATE" => ""
            ),
            false
        );?>
    </div>
</div>
<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
