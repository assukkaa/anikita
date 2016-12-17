<? define("MRSOFT_FROM", "redirect_download_overview");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "������� ���������� ����������, �������������, ���������� ��������� ������� ��� �����������, ������������ ���������, ���������� ��������� ������, ���������� �� ��������� ������� ���������, ���������� ���������� ������� �� ���������, ���������� ���������� ����������");
$APPLICATION->SetPageProperty("description", "���������� ��������� ������������ ��������� ESET NOD32, �������� ���������� ������� ������ ���������� ��� ���������� �� �����");
$APPLICATION->SetTitle("ESET NOD32 | ������� � ���������� ��������� ���������"); ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/download/sect_popup-download.php"); ?>
<?$APPLICATION->AddChainItem("���������� �������", "https://esetnod32.ru/download/");?>
<div class="b-download">
    <? /*
    <div class="b-banner b-banner__smart-bb">
        <input type="hidden" id="trials" value="" />
        <input type="hidden" id="section_id_overview_parent_name" value="������� / �����" />
        <img src="images/banner__smart_970_282.jpg" alt="">
        <div class="b-banner__button">
            <div class="ButtonsHolder28">
                <div class="green28">
                    <p>
                        <a href="http://shop.esetnod32.ru/catalogue/home/cat_id.6/buy.215925/" data-from="eset_download_overview_banner_ess_plus_tcs">
                            <span class="text-bold"><i>������</i></span>
                        </a>
                    </p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="ButtonsHolder28">
                <div class="grey28">
                    <p>
                        <a href="http://download.esetnod32.ru/home/trial/8/ess_trial32_rus.exe" class="click-shop" product_id="<?=constant("MRSOFT_PRODUCT_ID_110")?>" product_name="ESET NOD32 Smart Security x32 from banner" data-from="<?=constant("MRSOFT_FROM")?>" section_id="overview" product_id_r="68">
                            <span class="text-bold"><i>������� ��� 32-��� Windows</i></span>
                        </a>
                    </p>
                </div>
                <div class="grey28">
                    <p>
                        <a href="http://download.esetnod32.ru/home/trial/8/ess_trial64_rus.exe" class="click-shop" product_id="<?=constant("MRSOFT_PRODUCT_ID_110")?>" product_name="ESET NOD32 Smart Security x64 from banner" section_id="overview" product_id_r="68">
                            <span class="text-bold"><i>������� ��� 64-��� Windows</i></span>
                        </a>
                    </p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="b-banner__bottom-anketa"><a target="_blank" href="https://www.tcsbank.ru/credit/form/esetnod32/?utm_source=esetnod32_cc" data-ga-event="tcsbank" data-ga-action="download-overview">��������� ������ � �������� ESET NOD32 ���������!*</a></div>
    </div>
    */ ?>
    <?if($_SERVER["SERVER_NAME"] != "www.eset.kz"):?>
        <div class="b-cover b-cover__download-overview">
            <img style="border-radius:0 0 5px 5px;" src="images/banner__home_2016-09-01.jpg" alt="" height="334">
            <div class="b-cover__content">
                <a class="b-btn b-btn__green" href="https://shop.esetnod32.ru/catalogue/home/buy.1629780/from.eset_promo.esetnod32.ru_14 " data-from="eset_product_family_banner">������</a>
                <a class="b-btn b-btn__gray" href="http://promo.esetnod32.ru/?utm_source=eset&utm_content=from&utm_medium=banner&utm_campaign=eset_promo_14">���������</a>


                <?/*a class="b-btn b-btn__green link__buy-popup" href="#" data-ga-event="������� / �����" data-ga-action="������ ESET NOD32 Smart Security / ������� ���������" data-online="https://download.esetnod32.ru/home/trial/9/ess_trial32_rus.exe" data-online-redirect="http://shop.esetnod32.ru/catalogue/home/cat_id.6/buy.215925/from.eset_redirect_download_overview_ess_32x" data-partner="https://download.esetnod32.ru/home/trial/9/ess_trial64_rus.exe" data-partner-redirect="http://shop.esetnod32.ru/catalogue/home/cat_id.6/buy.215925/from.eset_redirect_download_overview_ess_64x" data-modal="where-buy">������� ���������</a*/?>
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
                            <span class="b-download-overview__ico b-download-overview__ico-home"></span><span class="b-download-overview__name">��� ����</span>
                        </a>
                        <div class="b-download-overview__desc">
                            �������� ����������<br>������� ������
                        </div>
                        <div class="b-download-overview__btn">
                            <a href="/download/home/trial/" class="b-btn b-btn__green">�������</a>
                        </div>
                        <div class="b-download-overview__more">
                            <div class="b-download-overview__link">
                                <a href="/download/home/commercial/" class="b-download-overview__a">������� ������������ �����������</a>
                            </div>
                            <div class="b-download-overview__link">
                                <a href="/download/manuals/home/" class="b-download-overview__a">������������</a>
                            </div>
                            <div class="b-download-overview__link">
                                <a href="http://shop.esetnod32.ru/catalogue/home/cat_id.6/buy.215925/" data-from="eset_download_overview_ns" class="b-download-overview__a">������ ��������</a>
                            </div>
                            <div class="b-download-overview__link">
                                <a href="http://shop.esetnod32.ru/catalogue/home/cat_id.6/buy.246309/" data-from="eset_download_overview_rn" class="b-download-overview__a">�������� ��������</a>
                            </div>
                        </div>
                    </li><li class="b-download-overview__item">
                        <a href="/download/business/trial/" class="b-download-overview__title">
                            <span class="b-download-overview__ico b-download-overview__ico-business"></span><span class="b-download-overview__name">��� �������</span>
                        </a>
                        <div class="b-download-overview__desc">
                            �������� ����������<br>������� ������
                        </div>
                        <div class="b-download-overview__btn">
                            <a href="/download/business/trial/" class="b-btn b-btn__green">�������</a>
                        </div>
                        <div class="b-download-overview__more">
                            <div class="b-download-overview__link">
                                <a href="/download/business/commercial/workstations/" class="b-download-overview__a">������� ������������ �����������</a>
                            </div>
                            <div class="b-download-overview__link">
                                <a href="/download/manuals/business/" class="b-download-overview__a">������������</a>
                            </div>
                            <div class="b-download-overview__link">
                                <a href="https://shop.esetnod32.ru/catalogue/home/cat_buy.31/" data-from="eset_download_overview_sbp" class="b-download-overview__a">������ ��������</a>
                            </div>
                        </div>
                    </li><li class="b-download-overview__item">
                        <a href="http://download.eset.com/special/eos/ESETOnlineScanner_RUS.exe" class="b-download-overview__title" data-param-from="download_overview_button" data-ga-event="Online Scanner" data-ga-action="������� - ����� / ������ ���������">
                            <span class="b-download-overview__ico b-download-overview__ico-scanner"></span><span class="b-download-overview__name">������-������</span>
                        </a>
                        <div class="b-download-overview__desc">
                            ��������� ���������<br>�� ������ ���������
                        </div>
                        <div class="b-download-overview__btn">
                            <a href="http://download.eset.com/special/eos/ESETOnlineScanner_RUS.exe" class="b-btn b-btn__blue" data-param-from="download_overview_button" data-ga-event="Online Scanner" data-ga-action="������� - ����� / ������ ���������">���������</a>
                        </div>
                        <div class="b-download-overview__more">
                            <div class="b-download-overview__link">
                                <a href="/home/products/online-scanner/" class="b-download-overview__a">���������</a>
                            </div>
                            <div class="b-download-overview__link">
                                <a href="/home/services/support/?from=download_overview" class="b-download-overview__a">������� ESET</a>
                            </div>
							<div class="b-download-overview__link">
                                <a href="/download/utilities/ " class="b-download-overview__a">������� ESET</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="b-product-text" style="margin-top: 40px;">
            <p>��������� ���� ��� ������������� ����������? ���������� ������������ ��������� �������� ESET.</p>
            <p>������ ������ ESET NOD32? ESET � ������� �� ������ �� ���������� � ������ � ������� ��������� � ����������, ������� ��������� ����������� ��� ���������, ��� � ����� ����������� ���������. ESET NOD32 �������� 15 ��������� ������������� � ������ � ��� � 100 ��������� � ����.</p>
            <p>����� �� ������� ������� � ���������� ����� ��������� ESET NOD32 ���������, ���������� ��������� ����������� � ��������� ���. </p>
            <p>���������� ������� � ������������� ������������� �������� ���������� �� ������� � ������������ ��. ��� ����� ���������� ������� ��������� ��������� � ������ �����.</p>
            <p>�������� ������������ ��������� ������ � �������� ����������! �� ��������� � ��������� ������ ���� ���� �������� ��������� ������������� �������� ��� ����������� �� ��� ����� ����������.</p>
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
