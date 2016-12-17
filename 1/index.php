<? define("HEAD_SEO_TEXT", true);
define("DISABLE_BREADCRUMBS", true);
define("DISABLE_TITLE_BLOCK", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Антивирус ESET NOD32 | Официальный сайт антивируса ESET");
$APPLICATION->SetPageProperty("keywords", "антивирус ESET NOD32, antivirus 2016, антивирус 2016, антивирус официальный сайт, антивирусы, антивирусы 2016, antivirus, антивирус");
$APPLICATION->SetPageProperty("description", "ESET NOD32 - эксперт в области защиты от киберпреступности и компьютерных угроз. Миллионы пользователей выбирают антивирусы ESET за их надежность и высокий уровень защиты");
?>

<!-- One click RM -->
<? /*
<script>
    var script = document.createElement('script');
    script.type = "text/javascript";
    script.src = "//buy.redmarker.ru/assets/rmjq.min.php?enc=cp1251";
    document.getElementsByTagName('head')[0].appendChild(script);
</script>
<link href="//buy.redmarker.ru/assets/styles.eset.css" rel="stylesheet" type="text/css"/>
*/ ?>
<!-- END one click RM -->

<? //require($_SERVER["DOCUMENT_ROOT"] . "/download/sect_popup-download.php"); ?>

<div class="b-modal__data">
    <section id="m-where-buy">
        <div class="b-where-buy">
            <div class="b-where-buy__text">
                <p>Вы можете приобрести наши продукты следующими способами:</p>
            </div>
            <div class="b-where-buy__buttons">
                <div class="ButtonsHolder28">
                    <div class="blue28">
                        <p>
                            <a href="#" class="b-where-buy__online">
                                <span class="text-bold"><i>Купить онлайн</i></span>
                            </a>
                        </p>
                    </div>
                    <div class="grey28">
                        <p>
                            <a href="#" class="b-where-buy__partner">
                                <span class="text-bold"><i>Купить у партнера</i></span>
                            </a>
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="m-type-download">
        <div class="b-where-buy">
            <div class="b-where-buy__text">
                <p>Скачайте пробную версию ESET NOD32 Smart Security:</p>
            </div>
            <div class="b-where-buy__buttons">
                <div class="ButtonsHolder28" style="width:410px;">
                    <div class="blue28">
                        <p>
                            <a href="#" class="b-where-buy__online" data-ga-event="Скачать / Обзор" data-ga-action="Баннер ESET NOD32 Smart Security / Скачать 32-bit">
                                <span class="text-bold"><i>Для 32-бит Windows</i></span>
                            </a>
                        </p>
                    </div>
                    <div class="blue28">
                        <p>
                            <a href="#" class="b-where-buy__partner" data-ga-event="Скачать / Обзор" data-ga-action="Баннер ESET NOD32 Smart Security / Скачать 64-bit">
                                <span class="text-bold"><i>Для 64-бит Windows</i></span>
                            </a>
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Block Banner Slider -->
<div class="b-banner__slider">
    <div id="b-slider">

        <?/* Картинки */?>
        <div class="b-slider__gr">
            <?if($_SERVER["SERVER_NAME"] != "www.eset.kz"):?>
                <?/* 1 */?><img src="index/images/ess_fam_banner_969_5.jpg" alt="ESET NOD32 SMART SECURITY FAMILY" class="b-main-banner-img" rel="sl-content__family">
            <?endif;?>
            <?/* 2 */?><img src="index/images/main_banner__ess-2015-10-13.jpg" alt="ESET NOD32 Smart Security" class="b-main-banner-img" rel="sl-content__ess" style="display:none;">
            <?/* 3 */?><img src="index/images/main_banner__ena-2015-10-13.jpg" alt="ESET NOD32 Antivirus" class="b-main-banner-img" rel="sl-content__ena" style="display:none;">
            <?/* 4 */?><img src="index/images/main_banner__epc-2015-11-18.jpg" alt="ESET NOD32 Parental Control для Android" class="b-main-banner-img" rel="sl-content__epc" style="display:none;">
            <?/* 5 */?><img src="index/images/cover__business-2015-02-25.jpg" alt="Новое поколение бизнес-продуктов ESET" class="b-main-banner-img" rel="sl-content__bus" style="display:none;">
            <?/* 6 */?><img src="index/images/main_banner__ems-2014-05-06.png" alt="ESET NOD32 Mobile Security" class="b-main-banner-img" rel="sl-content__ems" style="display:none;"><? /*
            <img src="index/images/main_banner__esa-2015-02-13.jpg" alt="ESET NOD32 Secure Authentication" class="b-main-banner-img" rel="sl-content__esa" style="display:none;"-->
            */ ?>
        </div>

        <?/* Кнопки и описания */?>
        <?/* 2 */?>
        <div class="b-slider-captions smart-2" id="sl-content__ess">
            <div class="ButtonsHolder28">
                <div class="rmbButtonDiv green28 no-replace" data-value="Купить" data-mid="128" data-bid="smart_bunner" data-pid="895">
                    <p>
                        <a href="https://shop.esetnod32.ru/catalogue/home/cat_id.6/buy.215925/" data-from="eset_main_banner_ess_v9"><span class="text-bold"><i>Купить</i></span></a>
                    </p>
                </div>
                <div class="grey28">
                    <p>
                        <a class="link__buy-popup" href="#" data-ga-event="Главная страница / Скачать" data-ga-action="ESET NOD32 Smart Security" data-online="http://download.esetnod32.ru/home/trial/9/ess_trial32_rus.exe" data-online-redirect="https://shop.esetnod32.ru/catalogue/home/cat_id.6/buy.215925/from.eset_redirect_main_banner_ess_32x" data-partner="http://download.esetnod32.ru/home/trial/9/ess_trial64_rus.exe" data-partner-redirect="https://shop.esetnod32.ru/catalogue/home/cat_id.6/buy.215925/from.eset_redirect_main_banner_ess_64x" data-modal="type-download" data-modal-ga-event="Главная страница / Скачать" data-modal-ga-action="ESET NOD32 Smart Security" data-modal-text="Скачайте пробную версию ESET NOD32 Smart Security:"><span class="text-bold"><i>Скачать</i></span></a>
                    </p>
                </div>
            </div>
        </div>


        <?/* 3 */?>
        <div class="b-slider-captions ena" id="sl-content__ena" style="display:none;">
            <div class="ButtonsHolder28">
                <div class="rmbButtonDiv green28 no-replace" data-value="Купить" data-mid="128" data-bid="antivirus_bunner" data-pid="927">
                    <p>
                        <a href="https://shop.esetnod32.ru/catalogue/home/cat_id.7/buy.215927/" data-from="eset_main_banner_ena_v9"><span class="text-bold"><i>Купить</i></span></a>
                    </p>
                </div>
                <div class="blue28">
                    <p>
                        <a class="link__buy-popup" href="#" data-ga-event="Главная страница / Скачать" data-ga-action="ESET NOD32 Антивирус" data-online="http://download.esetnod32.ru/home/trial/9/eav_trial32_rus.exe" data-online-redirect="https://shop.esetnod32.ru/catalogue/home/cat_id.7/buy.215927/from.eset_redirect_main_banner_eav_32x" data-partner="http://download.esetnod32.ru/home/trial/9/eav_trial64_rus.exe" data-partner-redirect="https://shop.esetnod32.ru/catalogue/home/cat_id.7/buy.215927/from.eset_redirect_main_banner_eav_64x" data-modal="type-download" data-modal-ga-event="Главная страница / Скачать" data-modal-ga-action="ESET NOD32 Антивирус" data-modal-text="Скачайте пробную версию ESET NOD32 Антивирус:"><span class="text-bold"><i>Скачать</i></span></a>
                    </p>
                </div>
            </div>
        </div>


        <?/* 4 */?>
        <div class="b-slider-captions smart-2" id="sl-content__epc">
            <div class="ButtonsHolder28">
                <div class="green28">
                    <p>
                        <a href="https://shop.esetnod32.ru/catalogue/home/cat_id.134/buy.1774695/" data-from="eset_main_banner_epc" class="link__buy-direct"><span class="text-bold"><i>Купить</i></span></a>
                    </p>
                </div>
                <div class="grey28">
                    <p>
                        <a href="https://www.esetnod32.ru/home/products/parental-control/" data-ga-event="Главная страница / Подробнее" data-ga-action="ESET NOD32 Parental Control для Android" class="redirect-after-download"><span class="text-bold"><i>Подробнее</i></span></a>
                    </p>
                </div>
            </div>
        </div>


        <!-- ============================== -->
        <?/* 5 */?>
        <div class="b-slider-captions ena" id="sl-content__bus" style="display:none;">
             <a href="/business/next-generation-internet-security/" class="link__buy-direct"></a>
        </div>
        <!-- /============================= -->


        <?if($_SERVER["SERVER_NAME"] != "www.eset.kz"):?>
        <?/* 1 */?>
        <div class="b-slider-captions smart-2" id="sl-content__family" style="display:none;">
            <div class="ButtonsHolder28">
                <div class="green28">
                    <p>
                        <a href="https://shop.esetnod32.ru/catalogue/home/buy.1629780/from.eset_promo_10" data-from="eset_main_banner_family"><span class="text-bold"><i>Купить</i></span></a>
                    </p>
                </div>
                <div class="grey28">
                    <p>
                        <a href="http://promo.esetnod32.ru/?utm_source=eset&utm_content=from&utm_medium=banner&utm_campaign=eset_promo_10" data-ga-event="Главная страница / Подробнее" data-ga-action="ESET NOD32 SMART SECURITY FAMILY" class="redirect-after-download"><span class="text-bold"><i>Подробнее</i></span></a>
                    </p>
                </div>
            </div>
        </div>
        <?endif;?>


        <?/* 6 */?>
        <div class="b-slider-captions ems" id="sl-content__ems" style="display:none;">
            <div class="ButtonsHolder28">
                <div class="blue28">
                    <p>
                        <a href="https://shop.esetnod32.ru/catalogue/home/cat_id.29/buy.143/" data-from="eset_main_banner_ems3"><span class="text-bold"><i>Купить</i></span></a>
                    </p>
                </div>
                <div class="grey28">
                    <p>
                        <a target="_blank" href="https://download.esetnod32.ru/home/trial/ems/ems.apk" data-ga-event="Главная страница / Скачать" data-ga-action="ESET NOD32 Mobile Security" class="redirect-after-download" data-redirect-link="https://shop.esetnod32.ru/catalogue/home/cat_id.29/buy.143/from.eset_redirect_main_banner_ems"><span class="text-bold"><i>Скачать</i></span></a>
                    </p>
                </div>
            </div>
        </div>



        <? /*
        <div class="b-slider-captions esa" id="sl-content__esa" style="display:none;">
            <div class="ButtonsHolder28">
                <div class="green28">
                    <p>
                        <a href="<?=SITE_URL?>/business/products/secure-authentication/?from=esa_main_banner" data-modal="where-buy" data-online="https://shop.esetnod32.ru/catalogue/business/?from=esa_banner_main" data-partner="<?=SITE_URL?>/buy/actions/feedback/?from=esa_banner_main" class="link__buy-popup link__buy-direct"><span class="text-bold"><i>Купить</i></span></a>
                    </p>
                </div>
                <div class="blue28">
                    <p>
                        <a href="<?=SITE_URL?>/download/business/trial/?from=eset_main_banner_secure_authentication#download-business-trial"><span class="text-bold"><i>Тестировать бесплатно</i></span></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="b-slider-captions esa" id="sl-content__bus" style="display:none;">
            <a href="/business/next-generation-internet-security/?utm_source=eset&utm_medium=banner&utm_content=from&utm_campaign=eset_main_banner_next_gen" class="link__buy-direct"></a>
        </div> */
        ?>
    </div>
</div>
<!-- END Block Banner Slider -->


<div class="b-product">
    <div class="b-colom__33">
        <div class="b-prod_banner">
            <a href="/home/products/smart-security-family/">
                <img src="index/images/family_small.jpg" alt="АНТИВИРУС ДЛЯ ВСЕЙ СЕМЬИ ПО УНИКАЛЬНОЙ ЦЕНЕ">
            </a>
            <div class="b-prod_banner_text">
                <a href="/home/products/smart-security-family/"><span class="text-bold">АНТИВИРУС ДЛЯ ВСЕЙ СЕМЬИ</span>  <br>
               ПО УНИКАЛЬНОЙ ЦЕНЕ </a>
            </div>
        </div>
    </div>
    <div class="b-colom__33">
        <div class="b-prod_banner">
            <a href="https://shop.esetnod32.ru/catalogue/service/#21" target="_blank">
                <img src="index/images/mini-banner__business-2016-06-02.jpg" alt="Выездная техническая поддержка">
            </a>
            <div class="b-prod_banner_text">
                <a href="https://shop.esetnod32.ru/catalogue/service/#21" target="_blank">
                    <span class="text-bold">ВЫЕЗДНАЯ ТЕХНИЧЕСКАЯ<br>
                    ПОДДЕРЖКА</span>
                </a>
            </div>
        </div>
    </div>
    <div class="b-colom__33">
        <div class="b-prod_banner">
            <a href="/download/home/trial/">
                <img src="index/images/home_trial.jpg" alt="Пробные версии для дома. Скачать бесплатно">
            </a>
            <div class="b-prod_banner_text">
                <a target="_blank" href="/download/home/trial/">
                    <span class="text-bold">ПРОБНЫЕ ВЕРСИИ ДЛЯ ДОМА</span><br>
                    СКАЧАТЬ БЕСПЛАТНО
                </a>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "news_main",
    array(
        "IBLOCK_TYPE" => "news",
        "IBLOCK_ID" => "1",
        "NEWS_COUNT" => "3",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array(),
        "PROPERTY_CODE" => array(),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_SHADOW" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "AJAX_OPTION_HISTORY" => "N",
        "CACHE_TYPE" => "N",
        "CACHE_TIME" => "0",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "DISPLAY_PANEL" => "N",
        "SET_TITLE" => "N",
        "SET_STATUS_404" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "Y",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "3600",
        "PAGER_SHOW_ALL" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "AJAX_OPTION_ADDITIONAL" => ""
        )
    );?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
