<?php
require 'constructor/connect.php';
$dir_img = __DIR__ . '/img/tovaru/';
?>
<!DOCTYPE HTML>
<html dir="ltr" lang="ru">

<!-- Mirrored from Yuzh.Optor.ru/about_us by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jun 2022 11:13:23 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Торговая компания Yuzh.Optor</title>
    <base/>
    <meta name="description" content="Торговая компания Yuzh.Optor"/>
    <meta name="keywords" content="Торговая компания Yuzh.Optor"/>
    <meta property="og:title" content="Торговая компания Yuzh.Optor"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="index.php"/>
    <meta property="og:image" content="img/LOGO.png"/>
    <meta property="og:site_name" content="Торговая компания Yuzh.Optor"/>
    <link href="index.php" rel="canonical"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="preload" as="style"/>
    <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
    <link rel="stylesheet" href="img/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/_50c36ab27da8bb5ead9c87671a74d2a9.css"/>
    <script defer src="js/jquery-3.6.0.min.js"></script>
    <script defer src="js/ns-cache/_64b8609b55b5e3556b172af674a9b309.js"></script>
    <style>
        .fa{
            margin-right: 5px !important;
        }
        @media (min-width: 992px) {
            #column-left {
                margin-top: 320px;
            }
        }

        @media (min-width: 992px) {
            #menu-header-open {
                min-height: 368px;
            }
        }

        @font-face {
            font-display: swap;
            font-family: "Roboto Condensed";
            src: url('catalog/view/theme/newstore/stylesheet/fonts/RobotoCondensed-Regular.ttf');
            font-style: normal;
            font-weight: 400;
        }

        @font-face {
            font-display: swap;
            font-family: 'FontAwesome';
            src: url('catalog/view/theme/newstore/font-awesome/fonts/fontawesome-webfont3e6e.eot?v=4.7.0');
            src: url('catalog/view/theme/newstore/font-awesome/fonts/fontawesome-webfontd41d.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('catalog/view/theme/newstore/font-awesome/fonts/fontawesome-webfont3e6e.woff2?v=4.7.0') format('woff2'), url('catalog/view/theme/newstore/font-awesome/fonts/fontawesome-webfont3e6e.woff?v=4.7.0') format('woff'), url('catalog/view/theme/newstore/font-awesome/fonts/fontawesome-webfont3e6e.ttf?v=4.7.0') format('truetype'), url('catalog/view/theme/newstore/font-awesome/fonts/fontawesome-webfont3e6e.svg?v=4.7.0#fontawesomeregular') format('svg');
            font-weight: normal;
            font-style: normal
        }

        @font-face {
            font-display: swap;
            src: url('catalog/view/theme/newstore/stylesheet/fonts/RobotoCondensed-Bold.ttf');
            font-style: normal;
            font-weight: 600;
        }

        @font-face {
            font-display: swap;
            font-family: 'Marck Script';
            src: url('catalog/view/theme/newstore/stylesheet/fonts/MarckScriptRegular.ttf');
        }
    </style>
    <link rel="stylesheet" href="css/ns-cache/_50c36ab27da8bb5ead9c87671a74d2a9.css"/>
    <style>
        #cart:hover .dropdown-menu {
            display: block;
        }

        #cart:hover .dropdown-menu:before {
            content: "";
            position: absolute;
            top: -7px;
            width: 100%;
            height: 9px;
            background: transparent;
        }

        #cart:hover .car-down {
            -webkit-transform: rotate(-180deg);
            transform: rotate(-180deg);
        }
    </style>
    <script>
        if (localStorage.getItem('display') === null) {
            localStorage.setItem('display', 'grid');
        }
    </script>
    <style>
        .product-grid.grid4.col-1 .actions .cart .btn-general {
            padding: 7.5px 6px;
        }

        .product-grid.grid4.col-1 .actions .cart i {
            display: none;
        }

        .product-grid.grid4.col-lg-1-5 .actions .cart .btn-general {
            padding: 7.5px 6px;
        }

        .product-grid.grid4.col-lg-1-5 .actions .cart i {
            display: none;
        }
    </style>
    <style>
        .sticker-ns.popular .fa {
            color: #000000
        }

        .sticker-ns.popular {
            background: #012af4 none repeat scroll 0 0;
            color: #000000;
        }

        .sticker-ns.special .fa {
            color: #000000
        }

        .sticker-ns.special {
            background: #000000 none repeat scroll 0 0;
            color: #000000;
        }

        .sticker-ns.bestseller .fa {
            color: #000000
        }

        .sticker-ns.bestseller {
            background: #30db00 none repeat scroll 0 0;
            color: #000000;
        }

        .sticker-ns.newproduct .fa {
            color: #000000
        }

        .sticker-ns.newproduct {
            background: #000000 none repeat scroll 0 0;
            color: #000000;
        }
    </style>
    <script src="js/ns-cache/_64b8609b55b5e3556b172af674a9b309.js"></script>
    <script>
        function init(elem, options) {
            elem.addClass('countdownHolder');
            $.each(['Days', 'Hours', 'Minutes', 'Sec'], function (i) {
                var clas;
                if (this == 'Days') {
                    clas = "Дней";
                }
                if (this == 'Hours') {
                    clas = "Часов";
                }
                if (this == 'Minutes') {
                    clas = "минут";
                }
                if (this == 'Sec') {
                    clas = "сек";
                }
                out_timer = "";
                out_timer += '<span class="count' + this + '">';
                out_timer += '<span class="num-time">';
                out_timer += '<span class="position"><span class="digit static">0</span></span>';
                out_timer += '<span class="position"><span class="digit static">0</span></span>';
                out_timer += '</span>';
                out_timer += '<span class="time_productany">' + clas + '</span>';
                out_timer += '</span>';
                $(out_timer).appendTo(elem);
            });
        }

        var button_shopping = "Продолжить покупки";
        var button_checkout = "Оформление заказа";
        var link_checkout = "checkout/index.php";
        var link_newstorecheckout = "cart/index.php?route=checkout/newstorecheckout";
        var text_showmore = 'Показать еще';
        var color_schem = '3';
        var loading_masked_img = '<img src="img/catalog/view/theme/newstore/image/ring-alt-' + color_schem + '.svg" />';

        function loading_masked(action) {
            if (action) {
                $('.loading_masked').html(loading_masked_img);
                $('.loading_masked').show();
            } else {
                $('.loading_masked').html('');
                $('.loading_masked').hide();
            }
        }

        function creatOverlayLoadPage(action) {
            if (action) {
                $('#messageLoadPage').html(loading_masked_img);
                $('#messageLoadPage').show();
            } else {
                $('#messageLoadPage').html('');
                $('#messageLoadPage').hide();
            }
        }
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "../mc.yandex.ru/metrika/tag.js", "ym");

        ym(80874508, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true,
            ecommerce: "dataLayer"
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/80874508" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    <style>.htop-b-pc img {
        margin: 0 auto;
    }</style>
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
</head>
<body class="common-home">
<p id="back-top"><a rel="nofollow" class="btn btn-default" href="#top"><i class="fa fa-chevron-up" style="font-size:18px;"></i></a></p>
<div id="top-fixed" class="hidden-xs hidden-sm"><div class="container"><div class="row"><div class="menu_fix col-sm-3 col-md-3"><nav id="menu" class="btn-group btn-block">
    <button type="button" class="btn btn-menu btn-block dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bars"></i>
        <span class="text-category">Категории</span>
    </button>
    <ul id="menu-list" class="dropdown-menu nsmenu-block">

                                                                <li>
                        <a class="dropdown-img" href="javascript:void(0);">
                                                                                                                                                </a>
                    </li>
                                                                                        <li class="hidden-md hidden-lg">
                        <a class="dropdown-img" href="delivery">
                                                                                                            Доставка									</a>
                    </li>
                                                                                    <li class="dropdown ">
                <span class="toggle-child">
                    <i class="fa fa-plus plus"></i>
                    <i class="fa fa-minus minus"></i>
                </span>
                    <a href="AVTOPRINADLEZhNOSTI" class="parent-link dropdown-img">
                        <i class="fa fa-angle-down arrow"></i>
                                                                АВТОПРИНАДЛЕЖНОСТИ								</a>

                                                                                      <div class="ns-dd dropdown-menu-simple nsmenu-type-category-simple">
                        <div class="dropdown-inner">
                            <ul class="list-unstyled nsmenu-haschild">
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/avtoprinadlezhnosti/avtoaksessuary/"><i class="fa fa-angle-down arrow"></i>												Автоаксессуары																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/avtoprinadlezhnosti/avtoaksessuary/avto-salfetki/">																Авто салфетки																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/avtoprinadlezhnosti/avtoaksessuary/zhilet-signalnyy/">																Жилет сигнальный																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/avtoprinadlezhnosti/avtoaksessuary/kanistra/">																Канистра																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/avtoprinadlezhnosti/avtoaksessuary/prikurivatel/">																Прикуриватель																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/avtoprinadlezhnosti/avtoaksessuary/shchetki-skrebki/">																Щетки-скребки																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/avtoprinadlezhnosti/avtoinstrumenty/"><i class="fa fa-angle-down arrow"></i>												Автоинструменты																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/avtoprinadlezhnosti/avtoinstrumenty/blok-odnorolnyy-s-kryukom/">																Блок однорольный с крюком																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/avtoprinadlezhnosti/avtoinstrumenty/vorotok/">																Вороток																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/avtoprinadlezhnosti/avtoinstrumenty/klyuch-balonnyy/">																Ключ балонный																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/avtoprinadlezhnosti/avtoinstrumenty/kompressory-/">																Компрессоры 																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/avtoprinadlezhnosti/avtoinstrumenty/lebedka/">																Лебедка																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/avtoprinadlezhnosti/avtoinstrumenty/montazhka/">																Монтажка																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/avtoprinadlezhnosti/avtoinstrumenty/nabor-dlya-remonta/">																Набор для ремонта																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/avtoprinadlezhnosti/avtoinstrumenty/styazhka-gruza/">																Стяжка груза																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/avtoprinadlezhnosti/avtoinstrumenty/tal-tsepnaya/">																Таль Цепная																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/avtoprinadlezhnosti/avtoinstrumenty/tross-buksirovochnyy/">																Тросс буксировочный																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/avtoprinadlezhnosti/avtokhimiya/"><i class="fa fa-angle-down arrow"></i>												Автохимия																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/avtoprinadlezhnosti/avtokhimiya/antirzhavchina-smazka/">																Антиржавчина - Смазка																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/avtoprinadlezhnosti/avtokhimiya/maslo/">																Масло																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                        </ul>
                        </div>
                        </div>

                                                            
                                                                                                            
                            
                            
                            
                                                        </li>
                                                                                        <li>
                        <a class="dropdown-img" href="Vse-dlya-santekhniki">
                                                                                                            Все для сантехники									</a>
                    </li>
                                                                                        <li class="hidden-md hidden-lg">
                        <a class="dropdown-img" href="oplata">
                                                                                                            Оплата									</a>
                    </li>
                                                                                    <li class="dropdown ">
                <span class="toggle-child">
                    <i class="fa fa-plus plus"></i>
                    <i class="fa fa-minus minus"></i>
                </span>
                    <a href="ZIMNIE-TOVARY" class="parent-link dropdown-img">
                        <i class="fa fa-angle-down arrow"></i>
                                                                ЗИМНИЕ ТОВАРЫ								</a>

                                                                                      <div class="ns-dd dropdown-menu-simple nsmenu-type-category-simple">
                        <div class="dropdown-inner">
                            <ul class="list-unstyled nsmenu-haschild">
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/zimnie-tovary/novogodnie-tovary/"><i class="fa fa-angle-down arrow"></i>												НОВОГОДНИЕ ТОВАРЫ																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/zimnie-tovary/novogodnie-tovary/girlyandy/">																Гирлянды																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/zimnie-tovary/novogodnie-tovary/elochnye-igrushki/">																Елочные игрушки																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/zimnie-tovary/novogodnie-tovary/mishura-/">																Мишура 																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/zimnie-tovary/novogodnie-tovary/snezhinki/">																Снежинки																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/zimnie-tovary/snegouborochnyy-inventar/"><i class="fa fa-angle-down arrow"></i>												СНЕГОУБОРОЧНЫЙ ИНВЕНТАРЬ																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/zimnie-tovary/snegouborochnyy-inventar/ledorub/">																Ледоруб																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/zimnie-tovary/snegouborochnyy-inventar/lopaty-snegovye/">																Лопаты снеговые																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/zimnie-tovary/snegouborochnyy-inventar/skreper-tolkach-dvizhok/">																Скрепер,Толкач,Движок																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/zimnie-tovary/vse-dlya-zimnego-razvlecheniya/"><i class="fa fa-angle-down arrow"></i>												ВСЕ ДЛЯ ЗИМНЕГО РАЗВЛЕЧЕНИЯ																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/zimnie-tovary/vse-dlya-zimnego-razvlecheniya/valenki/">																Валенки																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/zimnie-tovary/vse-dlya-zimnego-razvlecheniya/okhotnichi-ledyanki/">																Охотничьи ледянки																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/zimnie-tovary/vse-dlya-zimnego-razvlecheniya/sanki-kolyaski/">																Санки - коляски																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/zimnie-tovary/vse-dlya-zimnego-razvlecheniya/tyubingi-ledyanki/">																Тюбинги, ледянки																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                        </ul>
                        </div>
                        </div>

                                                            
                                                                                                            
                            
                            
                            
                                                        </li>
                                                                                        <li class="hidden-md hidden-lg">
                        <a class="dropdown-img" href="about_us">
                                                                                                            О нас									</a>
                    </li>
                                                                                    <li class="dropdown ">
                <span class="toggle-child">
                    <i class="fa fa-plus plus"></i>
                    <i class="fa fa-minus minus"></i>
                </span>
                    <a href="SADOVO-OGORODNYY-INVENTAR" class="parent-link dropdown-img">
                        <i class="fa fa-angle-down arrow"></i>
                                                                САДОВО-ОГОРОДНЫЙ ИНВЕНТАРЬ								</a>

                                                                                      <div class="ns-dd dropdown-menu-simple nsmenu-type-category-simple">
                        <div class="dropdown-inner">
                            <ul class="list-unstyled nsmenu-haschild">
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/instrumenty-dlya-sada/"><i class="fa fa-angle-down arrow"></i>												ИНСТРУМЕНТЫ ДЛЯ САДА																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/instrumenty-dlya-sada/vedra/">																Ведра																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/instrumenty-dlya-sada/vily/">																Вилы																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/instrumenty-dlya-sada/grabli/">																Грабли																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/instrumenty-dlya-sada/kosa/">																Коса																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/instrumenty-dlya-sada/kustorez/">																Кусторез																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/instrumenty-dlya-sada/lopaty-/">																Лопаты 																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/instrumenty-dlya-sada/nozhovka-sadovaya/">																Ножовка садовая																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/instrumenty-dlya-sada/nosilki/">																Носилки																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/instrumenty-dlya-sada/sadovye-nabory/">																Садовые наборы																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/instrumenty-dlya-sada/sekatory/">																Секаторы																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/instrumenty-dlya-sada/serp/">																Серп																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/instrumenty-dlya-sada/suchkorez/">																Сучкорез																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/instrumenty-dlya-sada/trimmer-i-ego-komplektuyushchie/">																Триммер и его комплектующие																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/instrumenty-dlya-sada/tyapka/">																Тяпка																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/instrumenty-dlya-sada/cherenki/">																Черенки																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/vse-dlya-rassady/"><i class="fa fa-angle-down arrow"></i>												ВСЕ ДЛЯ РАССАДЫ																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/vse-dlya-rassady/grunt/">																Грунт																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/vse-dlya-rassady/parnik/">																ПАРНИК																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/vse-dlya-rassady/yashchik-dlya-rassady/">																Ящик для рассады																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/ograzhdenie/">												Ограждение																								</a>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/tachki-sadovye-i-prinadlezhnosti/"><i class="fa fa-angle-down arrow"></i>												ТАЧКИ САДОВЫЕ И ПРИНАДЛЕЖНОСТИ																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/tachki-sadovye-i-prinadlezhnosti/kolesa-dlya-tachki/">																Колеса для тачки																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/tachki-sadovye-i-prinadlezhnosti/tachki/">																Тачки																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/polivochnyy-inventar/"><i class="fa fa-angle-down arrow"></i>												ПОЛИВОЧНЫЙ ИНВЕНТАРЬ																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/polivochnyy-inventar/leyki/">																Лейки																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/polivochnyy-inventar/opryskivatel-i-nasadki/">																Опрыскиватель и насадки																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/polivochnyy-inventar/shlangi-/">																Шланги 																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                        </ul>
                        </div>
                        </div>

                                                            
                                                                                                            
                            
                            
                            
                                                        </li>
                                                                                        <li class="hidden-md hidden-lg">
                        <a class="dropdown-img" href="https://xpert-ufa.ru/contact-us/">
                                                                                                            Контакты									</a>
                    </li>
                                                                                    <li class="dropdown ">
                <span class="toggle-child">
                    <i class="fa fa-plus plus"></i>
                    <i class="fa fa-minus minus"></i>
                </span>
                    <a href="SREDSTVA-INDIVIDUALNOY-ZAShchITY" class="parent-link dropdown-img">
                        <i class="fa fa-angle-down arrow"></i>
                                                                СРЕДСТВА ИНДИВИДУАЛЬНОЙ ЗАЩИТЫ								</a>

                                                                                      <div class="ns-dd dropdown-menu-simple nsmenu-type-category-simple">
                        <div class="dropdown-inner">
                            <ul class="list-unstyled nsmenu-haschild">
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/sredstva-individualnoy-zashchity/spetsodezhda/">												Спецодежда																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/sredstva-individualnoy-zashchity/dozhdevik/">												Дождевик																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/sredstva-individualnoy-zashchity/kaska-/">												Каска 																								</a>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/sredstva-individualnoy-zashchity/perchatki-siz/"><i class="fa fa-angle-down arrow"></i>												Перчатки СИЗ																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/sredstva-individualnoy-zashchity/perchatki-siz/perchatki-kragi-dielektricheskie/">																Перчатки "Краги" Диэлектрические																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sredstva-individualnoy-zashchity/perchatki-siz/perchatki-kragi-letnie/">																Перчатки "Краги" Летние																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sredstva-individualnoy-zashchity/perchatki-siz/perchatki-kragi-uteplennye/">																Перчатки "Краги" Утепленные																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sredstva-individualnoy-zashchity/perchatki-siz/perchatki-neylon/">																Перчатки "Нейлон"																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sredstva-individualnoy-zashchity/perchatki-siz/perchatki-nitril/">																Перчатки "Нитрил"																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sredstva-individualnoy-zashchity/perchatki-siz/perchatki-rukavitsy/">																Перчатки "Рукавицы"																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sredstva-individualnoy-zashchity/perchatki-siz/perchatki-uteplennye/">																Перчатки "Утепленные"																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sredstva-individualnoy-zashchity/perchatki-siz/perchatki-vinil/">																Перчатки ВИНИЛ																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sredstva-individualnoy-zashchity/perchatki-siz/perchatki-lateksnye/">																Перчатки Латексные																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/sredstva-individualnoy-zashchity/perchatki-siz/perchatki-khb/">																Перчатки Х/Б																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/sredstva-individualnoy-zashchity/maska-zashchitnaya/">												Маска Защитная																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/sredstva-individualnoy-zashchity/maska-svarshchika/">												Маска сварщика																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/sredstva-individualnoy-zashchity/lenta-signalnaya-ogoroditelnaya/">												Лента сигнальная огородительная																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/sredstva-individualnoy-zashchity/respirator/">												Респиратор																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/sredstva-individualnoy-zashchity/ochki-zashchitnye/">												Очки Защитные																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/sredstva-individualnoy-zashchity/naushniki/">												Наушники																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/sredstva-individualnoy-zashchity/strakhovka-poyas-dlya-instrumentov/">												Страховка+пояс для инструментов																								</a>
                                                                                </li>
                                                                        </ul>
                        </div>
                        </div>

                                                            
                                                                                                            
                            
                            
                            
                                                        </li>
                                                                                    <li class="dropdown ">
                <span class="toggle-child">
                    <i class="fa fa-plus plus"></i>
                    <i class="fa fa-minus minus"></i>
                </span>
                    <a href="STROY-INSTRUMENTY-I-TOVARY" class="parent-link dropdown-img">
                        <i class="fa fa-angle-down arrow"></i>
                                                                СТРОЙ ИНСТРУМЕНТЫ И ТОВАРЫ								</a>

                                                                                      <div class="ns-dd dropdown-menu-simple nsmenu-type-category-simple">
                        <div class="dropdown-inner">
                            <ul class="list-unstyled nsmenu-haschild">
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/svarochnoe-oborudovanie/"><i class="fa fa-angle-down arrow"></i>												СВАРОЧНОЕ ОБОРУДОВАНИЕ																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/svarochnoe-oborudovanie/apparat-dlya-svarki-plasttrub-/">																Аппарат для сварки пласт.труб 																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/svarochnoe-oborudovanie/derzhatel-massy/">																Держатель массы																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/svarochnoe-oborudovanie/derzhatel-elektrodov/">																Держатель электродов																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/svarochnoe-oborudovanie/plita-ogneupornaya/">																Плита "Огнеупорная"																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/svarochnoe-oborudovanie/provolka-dlya-svarki-/">																Проволка для сварки 																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/svarochnoe-oborudovanie/ugolok-magnit-dlya-svarki/">																Уголок - магнит для сварки																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/svarochnoe-oborudovanie/kholodnaya-svarka/">																Холодная сварка																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/svarochnoe-oborudovanie/elektrody/">																Электроды																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/"><i class="fa fa-angle-down arrow"></i>												РУЧНОЙ ИНСТРУМЕНТ																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/benzopila-i-ee-komplektuyushchie/">																Бензопила и ее комплектующие																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/bokorezy/">																Бокорезы																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/bolgarka-i-ee-komplektuyushchie/">																Болгарка и ее комплектующие																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/boltorez/">																Болторез																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/zaklepochnik/">																Заклепочник																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/zvezdochka/">																Звездочка																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/zubila-pika/">																Зубила,пика																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/kirka/">																Кирка																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/kiyanka/">																Киянка																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/kleshchi-perestavnye/">																Клещи Переставные																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/klyuch-alligator/">																Ключ АЛЛИГАТОР																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/klyuch-gaechnyy/">																Ключ Гаечный																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/klyuch-gazovyy/">																Ключ Газовый																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/klyuch-razvodnoy/">																Ключ Разводной																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/klyuch-universalnyy/">																Ключ Универсальный																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/koronka-i-khvostovik/">																Коронка и хвостовик																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/kryuchok-dlya-vyazki-/">																Крючок для вязки 																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/kuvalda-cherenok/">																Кувалда,Черенок																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/lobzik-ruchnoy-/">																Лобзик ручной 																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/lom-gvozdoder/">																Лом-Гвоздодер																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/molotok-i-cherenok/">																Молоток и черенок																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/nabor-golovok/">																Набор Головок																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/nabor-nakidnykh-klyuchey/">																Набор Накидных Ключей																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/nadfil/">																Надфиль																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/napilnik/">																Напильник																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/nozh-kantselyarskiy/">																Нож Канцелярский																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/nozhnitsy-po-metallu/">																Ножницы по Металлу																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/nozhovka-po-derevu/">																Ножовка по Дереву																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/nozhovka-po-metallu/">																Ножовка по Металлу																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/nozhovka-po-penobloku/">																Ножовка по Пеноблоку																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/otvertki/">																Отвертки																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/passatizhi/">																Пассатижи																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class=" ischild_4level_simple">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/pistolet-dlya-germetika/"><i class="fa fa-angle-down arrow"></i>																Пистолет для Герметика																																</a>
                                                                                                                    <ul class="list-unstyled child_4level_simple">
                                                                                                                                <li><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/pistolet-dlya-germetika/germetik/">Герметик</a></li>
                                                                                                                        </ul>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class=" ischild_4level_simple">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/pistolet-dlya-peny/"><i class="fa fa-angle-down arrow"></i>																Пистолет для Пены																																</a>
                                                                                                                    <ul class="list-unstyled child_4level_simple">
                                                                                                                                <li><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/pistolet-dlya-peny/pena/">Пена</a></li>
                                                                                                                        </ul>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class=" ischild_4level_simple">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/plitkorez-krestiki-dlya-plitki/"><i class="fa fa-angle-down arrow"></i>																Плиткорез,Крестики для плитки																																</a>
                                                                                                                    <ul class="list-unstyled child_4level_simple">
                                                                                                                                <li><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/plitkorez-krestiki-dlya-plitki/krestiki-dlya-plitki/">Крестики для Плитки</a></li>
                                                                                                                                <li><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/plitkorez-krestiki-dlya-plitki/plitkorez/">Плиткорез</a></li>
                                                                                                                        </ul>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/polotno-dlya-nozhovki/">																Полотно для Ножовки																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/rubanok/">																Рубанок																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/santekhnicheskiy-tros/">																Сантехнический трос																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/stameski/">																Стамески																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/steklorez/">																Стеклорез																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class=" ischild_4level_simple">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/stepler-skoby/"><i class="fa fa-angle-down arrow"></i>																Степлер,Скобы																																</a>
                                                                                                                    <ul class="list-unstyled child_4level_simple">
                                                                                                                                <li><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/stepler-skoby/skoby/">Скобы</a></li>
                                                                                                                                <li><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/stepler-skoby/stepler-mebelnyy/">Степлер Мебельный</a></li>
                                                                                                                        </ul>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/strubtsina/">																Струбцина																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/stuslo/">																Стусло																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/termopistolet-termokley/">																ТермоПистолет,Термоклей																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/teski/">																Тески																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/topor-kolun/">																Топор,Колун																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/treshchetka/">																Трещетка																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/truborez/">																Труборез																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/shestigrannik/">																Шестигранник																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/shchetki-po-metallu/">																Щетки по металлу																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/yashchik-dlya-instrumentov/">																Ящик для инструментов																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/"><i class="fa fa-angle-down arrow"></i>												РАСХОДНЫЕ МАТЕРИАЛЫ																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class=" ischild_4level_simple">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/bity-i-nasadki/"><i class="fa fa-angle-down arrow"></i>																Биты и Насадки																																</a>
                                                                                                                    <ul class="list-unstyled child_4level_simple">
                                                                                                                                <li><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/bity-i-nasadki/bity-/">Биты </a></li>
                                                                                                                                <li><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/bity-i-nasadki/nasadki-na-kroveln-samorez/">Насадки на кровельн саморез</a></li>
                                                                                                                        </ul>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/brusok-tochilnyy/">																Брусок точильный																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/bury/">																Буры																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/disk-almaznyy-/">																Диск Алмазный 																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/disk-dlya-tsirkulyarki/">																Диск для Циркулярки																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/disk-shlifovalnyy/">																Диск Шлифовальный																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/disk-shchetka-dlya-ushm/">																Диск Щетка для УШМ																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/drobilka-i-ee-komplektuyushchie-/">																Дробилка и ее комплектующие 																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/kley/">																Клей																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/kraska-aerozolnaya/">																Краска аэрозольная																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/krug-nazhdachnyy/">																Круг Наждачный																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/krug-otreznoy-po-metallu/">																Круг Отрезной по металлу																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/pilka-dlya-lobzika/">																Пилка для Лобзика																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/pprs-amerikanka/">																ППРС Американка																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/sverla/">																Сверла																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/skotch-izolenta-/">																Скотч,Изолента,																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/streych-plenka/">																Стрейч - пленка																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/uplotnitel/">																Уплотнитель																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/fum-lenta-lenta-bardyurnaya/">																Фум-лента , Лента бардюрная																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/chasha-almaznaya-po-betonu/">																Чаша Алмазная по Бетону																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/chek-lenta-/">																Чек - лента 																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/shlif-bumaga/">																Шлиф-Бумага																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/shchetka-kratsovka/">																Щетка-крацовка																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/zamki/"><i class="fa fa-angle-down arrow"></i>												ЗАМКИ																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/zamki/dvernaya-ruchka/">																Дверная Ручка																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/zamki/dovodchik-dvernoy/">																Доводчик дверной																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/zamki/zamok-vreznoy/">																Замок Врезной																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/zamki/zamok-navesnoy/">																Замок Навесной																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/zamki/zamok-nakladnoy/">																Замок Накладной																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/zamki/naves-gorazhnyy/">																Навес Горажный																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/zamki/petli/">																Петли																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/zamki/serdtsevina/">																Сердцевина																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/zamki/shpingalet/">																Шпингалет																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/instrument-malyarnyy-i-shtukaturnyy/"><i class="fa fa-angle-down arrow"></i>												ИНСТРУМЕНТ МАЛЯРНЫЙ И ШТУКАТУРНЫЙ																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/instrument-malyarnyy-i-shtukaturnyy/valik/">																Валик																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/instrument-malyarnyy-i-shtukaturnyy/kelma/">																Кельма																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/instrument-malyarnyy-i-shtukaturnyy/kist-malyarnaya/">																Кисть-малярная																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/instrument-malyarnyy-i-shtukaturnyy/kovsh/">																Ковш																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/instrument-malyarnyy-i-shtukaturnyy/kraskopult/">																Краскопульт																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/instrument-malyarnyy-i-shtukaturnyy/marker-stroitelnyy/">																Маркер строительный																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/instrument-malyarnyy-i-shtukaturnyy/miksery/">																Миксеры																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/instrument-malyarnyy-i-shtukaturnyy/pravilo/">																Правило																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/instrument-malyarnyy-i-shtukaturnyy/serpyanka-setka-shtukaturnaya/">																Серпянка,Сетка Штукатурная																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/instrument-malyarnyy-i-shtukaturnyy/setkoderzhatel/">																Сеткодержатель																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/instrument-malyarnyy-i-shtukaturnyy/skrebok-oboynyy/">																Скребок обойный																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/instrument-malyarnyy-i-shtukaturnyy/terka/">																Терка																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/instrument-malyarnyy-i-shtukaturnyy/shpatel/">																Шпатель																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/gaz-plita-gorelki/"><i class="fa fa-angle-down arrow"></i>												ГАЗ-ПЛИТА-ГОРЕЛКИ																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/gaz-plita-gorelki/gaz-benzin/">																Газ,Бензин																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/gaz-plita-gorelki/gorelki-i-payalnaya-lampa/">																Горелки и Паяльная лампа																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/gaz-plita-gorelki/zazhigalki/">																Зажигалки																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/gaz-plita-gorelki/plita-gazovaya/">																Плита Газовая																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/gaz-plita-gorelki/reduktor-shlang-fum/">																Редуктор, шланг, фум																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/izmeritelnye-instrumenty/"><i class="fa fa-angle-down arrow"></i>												ИЗМЕРИТЕЛЬНЫЕ ИНСТРУМЕНТЫ																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/izmeritelnye-instrumenty/lineyki/">																Линейки																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/izmeritelnye-instrumenty/otves-shnur-otbivochnyy/">																Отвес,шнур отбивочный																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class=" ischild_4level_simple">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/izmeritelnye-instrumenty/ruletki/"><i class="fa fa-angle-down arrow"></i>																Рулетки																																</a>
                                                                                                                    <ul class="list-unstyled child_4level_simple">
                                                                                                                                <li><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/izmeritelnye-instrumenty/ruletki/ruletka/">Рулетка</a></li>
                                                                                                                                <li><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/izmeritelnye-instrumenty/ruletki/ruletka-v-lente/">Рулетка в ленте</a></li>
                                                                                                                                <li><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/izmeritelnye-instrumenty/ruletki/ruletka-geodezicheskaya-/">Рулетка-Геодезическая </a></li>
                                                                                                                        </ul>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/izmeritelnye-instrumenty/ugolok-lineyka/">																Уголок-линейка																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class=" ischild_4level_simple">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/izmeritelnye-instrumenty/uroven/"><i class="fa fa-angle-down arrow"></i>																Уровень																																</a>
                                                                                                                    <ul class="list-unstyled child_4level_simple">
                                                                                                                                <li><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/izmeritelnye-instrumenty/uroven/gidrouroven/">Гидроуровень</a></li>
                                                                                                                                <li><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/izmeritelnye-instrumenty/uroven/lazernyy-uroven/">Лазерный Уровень</a></li>
                                                                                                                                <li><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/izmeritelnye-instrumenty/uroven/urovn-stroitelnyy/">Уровнь Строительный</a></li>
                                                                                                                        </ul>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/izmeritelnye-instrumenty/shtangentsirkul/">																Штангенциркуль																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/krepezh/"><i class="fa fa-angle-down arrow"></i>												КРЕПЕЖ																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/krepezh/gvozdi/">																Гвозди																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/krepezh/dyubel-gvozd/">																Дюбель-гвоздь																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/krepezh/zaklepki/">																Заклепки																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/krepezh/korabin/">																Корабин																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/krepezh/kranshteyn-dlya-radiatora/">																Кранштейн для радиатора																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/krepezh/samorezy/">																Саморезы																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/krepezh/skoba-stroitelnaya/">																Скоба строительная																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/krepezh/skoby-dlya-kabelya/">																Скобы для кабеля																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/krepezh/khomuty/">																Хомуты																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/krepezh/shurup/">																Шуруп																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                        </ul>
                        </div>
                        </div>

                                                            
                                                                                                            
                            
                            
                            
                                                        </li>
                                                                                    <li class="dropdown ">
                <span class="toggle-child">
                    <i class="fa fa-plus plus"></i>
                    <i class="fa fa-minus minus"></i>
                </span>
                    <a href="KhOZ-TOVARY" class="parent-link dropdown-img">
                        <i class="fa fa-angle-down arrow"></i>
                                                                ХОЗТОВАРЫ								</a>

                                                                                      <div class="ns-dd dropdown-menu-simple nsmenu-type-category-simple">
                        <div class="dropdown-inner">
                            <ul class="list-unstyled nsmenu-haschild">
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/khoz-tovary/prochie-khoz-tovary/">												ПРОЧИЕ ХОЗ ТОВАРЫ																								</a>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/khoz-tovary/sredstva-zashchity-ot-nasekomykh-i-gryzunov/"><i class="fa fa-angle-down arrow"></i>												СРЕДСТВА ЗАЩИТЫ ОТ НАСЕКОМЫХ И ГРЫЗУНОВ																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/sredstva-zashchity-ot-nasekomykh-i-gryzunov/bioaktivator/">																Биоактиватор																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/sredstva-zashchity-ot-nasekomykh-i-gryzunov/dikhlofos/">																Дихлофос																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/sredstva-zashchity-ot-nasekomykh-i-gryzunov/setka-moskitnaya/">																Сетка москитная																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/sredstva-zashchity-ot-nasekomykh-i-gryzunov/sredstva-zashchity-ot-gryzunov/">																Средства защиты от грызунов																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/sredstva-zashchity-ot-nasekomykh-i-gryzunov/sredstva-zashchity-ot-nasekomykh/">																Средства защиты от насекомых																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/khoz-tovary/sport-inventar/"><i class="fa fa-angle-down arrow"></i>												СПОРТ ИНВЕНТАРЬ																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/sport-inventar/badminton/">																Бадминтон																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/sport-inventar/velosipednye-zamki/">																Велосипедные Замки																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/sport-inventar/mylnye-puzyri/">																Мыльные пузыри																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/sport-inventar/myachi/">																Мячи																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/khoz-tovary/vse-dlya-uborki-doma/"><i class="fa fa-angle-down arrow"></i>												ВСЕ ДЛЯ УБОРКИ ДОМА																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/vse-dlya-uborki-doma/bytovaya-khimiya/">																Бытовая химия																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/vse-dlya-uborki-doma/venik/">																Веник																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/vse-dlya-uborki-doma/verevka-nit-kanat-shpagat/">																Веревка,нить,канат,шпагат																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/vse-dlya-uborki-doma/vodosgony/">																Водосгоны																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/vse-dlya-uborki-doma/gubka-dlya-mytya-posudy/">																Губка для мытья посуды																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/vse-dlya-uborki-doma/metla/">																Метла																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/vse-dlya-uborki-doma/meshki/">																Мешки																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/vse-dlya-uborki-doma/musornye-pakety-/">																Мусорные пакеты 																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/vse-dlya-uborki-doma/prishchepki/">																Прищепки																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/vse-dlya-uborki-doma/pylevybivalka/">																Пылевыбивалка																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/vse-dlya-uborki-doma/salfetki-tryapki/">																Салфетки-тряпки																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/vse-dlya-uborki-doma/sushilka-dlya-belya/">																Сушилка для белья																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/vse-dlya-uborki-doma/tros-belevoy/">																Трос бельевой																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/vse-dlya-uborki-doma/shvabry-i-nasadki/">																Швабры и насадки																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/vse-dlya-uborki-doma/shchetki-sovok/">																Щетки,Совок																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/khoz-tovary/tovary-dlya-otdykha-i-turizma/"><i class="fa fa-angle-down arrow"></i>												ТОВАРЫ ДЛЯ ОТДЫХА И ТУРИЗМА																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/tovary-dlya-otdykha-i-turizma/zhidkost-dlya-rozzhiga/">																Жидкость для розжига																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/tovary-dlya-otdykha-i-turizma/mangal/">																Мангал																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/tovary-dlya-otdykha-i-turizma/polog-polipropilenovyy/">																Полог полипропиленовый																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/tovary-dlya-otdykha-i-turizma/reshetka-gril-shampury/">																Решетка Гриль - Шампуры																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/tovary-dlya-otdykha-i-turizma/ugol-drevesnyy/">																Уголь древесный																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/khoz-tovary/kukhonnye-prinadlezhnosti/"><i class="fa fa-angle-down arrow"></i>												КУХОННЫЕ ПРИНАДЛЕЖНОСТИ																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/kukhonnye-prinadlezhnosti/vesy-/">																Весы 																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/kukhonnye-prinadlezhnosti/doska-razdelochnaya/">																Доска разделочная																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/kukhonnye-prinadlezhnosti/zapekanie/">																Запекание																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/kukhonnye-prinadlezhnosti/konservirovaniya/">																Консервирования																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/kukhonnye-prinadlezhnosti/kukhonnyy-inventar/">																Кухонный инвентарь																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/kukhonnye-prinadlezhnosti/paket-fasovochnyy-plenka/">																Пакет фасовочный,пленка																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/kukhonnye-prinadlezhnosti/tualetnaya-bumaga/">																Туалетная бумага																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/khoz-tovary/tovary-dlya-zhivotnykh/"><i class="fa fa-angle-down arrow"></i>												ТОВАРЫ ДЛЯ ЖИВОТНЫХ																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/tovary-dlya-zhivotnykh/nozhnitsy-dlya-strizhki-ovets/">																Ножницы для стрижки овец																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/tovary-dlya-zhivotnykh/osheyniki/">																Ошейники																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/tovary-dlya-zhivotnykh/tsep-vertushka/">																Цепь,Вертушка																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/khoz-tovary/bannye-prinadlezhnosti/"><i class="fa fa-angle-down arrow"></i>												БАННЫЕ ПРИНАДЛЕЖНОСТИ																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/bannye-prinadlezhnosti/mochalki-gubki/">																Мочалки,Губки																																</a>
                                                                                                                </li>
                                                                                                                                                                                                                    <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/bannye-prinadlezhnosti/taz-kovsh/">																Таз, ковш																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                            <li class="nsmenu-issubchild">
                                    <a href="https://xpert-ufa.ru/khoz-tovary/vse-dlya-doma/"><i class="fa fa-angle-down arrow"></i>												Все для дома																								</a>
                                                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                                                                                                                            <li class="">
                                                    <a href="https://xpert-ufa.ru/khoz-tovary/vse-dlya-doma/kovriki-shchetinistoe-pokrytie/">																Коврики, щетинистое покрытие																																</a>
                                                                                                                </li>
                                                                                                                                                </ul>
                                                                                </li>
                                                                        </ul>
                        </div>
                        </div>

                                                            
                                                                                                            
                            
                            
                            
                                                        </li>
                                                                                    <li class="dropdown ">
                <span class="toggle-child">
                    <i class="fa fa-plus plus"></i>
                    <i class="fa fa-minus minus"></i>
                </span>
                    <a href="ELEKTROTOVARY" class="parent-link dropdown-img">
                        <i class="fa fa-angle-down arrow"></i>
                                                                ЭЛЕКТРОТОВАРЫ								</a>

                                                                                      <div class="ns-dd dropdown-menu-simple nsmenu-type-category-simple">
                        <div class="dropdown-inner">
                            <ul class="list-unstyled nsmenu-haschild">
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/elektrotovary/avtomat-rubilniki/">												Автомат,рубильники																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/elektrotovary/batareyki/">												Батарейки																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/elektrotovary/ventilyatory-i-reshetka-ventilyatsionnaya/">												Вентиляторы и Решетка вентиляционная																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/elektrotovary/vyzhigatel-po-derevu/">												Выжигатель по дереву																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/elektrotovary/lampochki/">												Лампочки																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/elektrotovary/katushka/">												Катушка																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/elektrotovary/udlinitel-troynik-kolodka/">												Удлинитель,тройник,колодка																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/elektrotovary/zvonok-besprovodnoy/">												Звонок беспроводной																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/elektrotovary/svetilniki/">												Светильники																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/elektrotovary/perenoska/">												Переноска																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/elektrotovary/payalnik/">												Паяльник																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/elektrotovary/obogrevateli-/">												Обогреватели 																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/elektrotovary/multimetr/">												Мультиметр																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/elektrotovary/patron-na-lampochku/">												Патрон на лампочку																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/elektrotovary/pribory-dlya-osveshcheniya/">												Приборы для освещения																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/elektrotovary/plita-elektr/">												Плита электр.																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/elektrotovary/ten-dlya-vodonogrevatelya/">												Тэн для водоногревателя																								</a>
                                                                                </li>
                                                                            <li>
                                    <a href="https://xpert-ufa.ru/elektrotovary/chaynik/">												Чайник																								</a>
                                                                                </li>
                                                                        </ul>
                        </div>
                        </div>

                                                            
                                                                                                            
                            
                            
                            
                                                        </li>
                                                </ul>
</nav></div> <div class="phone_fix col-sm-2 col-md-3 "><div id="phone">
    <div class="contact-header">
        <div class="dropdown-toggle">
                                        <div class="additional-tel dth">
                                                <a href="tel:+79268800893" target="_blank">
                                                    +7 (926) 880-08-93</a><br>
                                                    <a href="tel:+79823048935" target="_blank">
                                                        +7 (982) 304-89-35</a>
                                            </div>
                                                                <span class="drop-icon-info"><i class="car-down fa fa-angle-down"></i></span>
                                </div>
                            <ul class="dropdown-menu drop-contacts">
                                    <li class="info-contact">
                <a href="javascript:void(0)" onclick="get_modal_callbacking()"><i class="fa fa-phone-square" aria-hidden="true"></i> Заказать звонок</a>						</li>
            <li class="line-contact"></li>
                                                                                                <li>
                                                        <a target="_blank" href="mailto:Yuzh.Optor@mail.ru">
                                                                    <div class="icon-image"><img src="img/image/cache/catalog/image/znacki/i-20x20.jpg" alt="Yuzh.Optor@mail.ru"></div>
                                                                    Yuzh.Optor@mail.ru								</a>
                                                        </li>
                                                <li>
                                                        <a href="https://api.whatsapp.com/send/?phone=79268800893" target="_blank">
                                                                    <div class="icon-image"><i class="fa fa-whatsapp"></i></div>
                                                                    +7 (926) 880-08-93									</a>
                                                                    <a href="https://api.whatsapp.com/send/?phone=79823048935" target="_blank">
                                                                        <div class="icon-image"><i class="fa fa-whatsapp"></i></div>
                                                                        +7 (982) 304-89-35									</a>
                                                        </li>
                                                            </ul>
                            <div class="text_after_phone">Ежедневно, C 9:00 до 21:00</div>
    </div>
</div></div> <div class="col-sm-3 col-md-2 col-md-push-4 cart_fix"><div class="shopping-cart ">
<div id="cart" class="btn-group btn-block">
<button type="button" data-toggle="dropdown" data-loading-text="Загрузка..." class="btn btn-block dropdown-toggle">	
<i class="shop-bag fa fa-cart-plus"></i>
<i class="car-down fa fa-angle-down"></i>
<span class="cart-total"><span class="products"><b>0</b> <span class="text_product">Tоваров,</span></span><span class="prices">на <b>0.00 р.</b></span></span>
</button>

<ul class="dropdown-menu pull-right">
<li>
<p class="text-center">В корзине пусто!</p>
</li>
</ul>
</div>
</div></div> <div class="search_fix col-md-4 col-md-pull-2"><div id="search-fixed-top"><div id="search" class="input-group pt20">
<input type="text" name="search" value="" placeholder="Поиск товара по каталогу" class="form-control input-lg search-autocomplete" autocompleteserach="off"><ul class="dropdown-menu autosearch"></ul>
<div class="input-group-btn categories">
<button id="change_category" type="button" class="btn btn-search-select dropdown-toggle" data-toggle="dropdown">
    <span class="category-name">Везде&nbsp;</span>&nbsp;<span class="fa fa-angle-down fa-fw car-down"></span>
</button>
<ul class="dropdown-menu">
<li><a href="#" onclick="return false;" data-idsearch="0">Везде</a></li>
            <li><a href="#" onclick="return false;" data-idsearch="1">АВТОПРИНАДЛЕЖНОСТИ</a></li>

            <li><a href="#" onclick="return false;" data-idsearch="21">Все для сантехники</a></li>

            <li><a href="#" onclick="return false;" data-idsearch="64">ЗИМНИЕ ТОВАРЫ</a></li>

            <li><a href="#" onclick="return false;" data-idsearch="312">ножницы бытовые</a></li>

            <li><a href="#" onclick="return false;" data-idsearch="55">САДОВО-ОГОРОДНЫЙ ИНВЕНТАРЬ</a></li>

            <li><a href="#" onclick="return false;" data-idsearch="68">СРЕДСТВА ИНДИВИДУАЛЬНОЙ ЗАЩИТЫ</a></li>

            <li><a href="#" onclick="return false;" data-idsearch="9">СТРОЙ ИНСТРУМЕНТЫ И ТОВАРЫ</a></li>

            <li><a href="#" onclick="return false;" data-idsearch="6">ХОЗ ТОВАРЫ</a></li>

            <li><a href="#" onclick="return false;" data-idsearch="4">ЭЛЕКТРОТОВАРЫ</a></li>

        </ul>
<input id="selected_category" type="hidden" name="category_id" value="">

</div>
<span class="input-group-btn button_search">
<button type="button" class="btn btn-search"><i class="fa fa-search"></i></button>
</span>
</div></div></div> </div></div></div>
<header>
    <div class="container">
        <div class="row vertical-align">
            <div class="col-xs-6 col-sm-12 col-md-3 text-center text-left-md logo-top">
                <div id="logo">
                    <a href="index.php">
                        <img src="img/LOGO.png" title="Торговая компания Yuzh.Optor" alt="Торговая компания Yuzh.Optor" class="img-responsive" style="filter: invert(1);" />
                    </a>
                </div>
            </div>
            <div class="phone-box col-xs-6 col-sm-12 col-md-3  text-xs-right text-sm-center text-md-center">
                <div id="phone">
                    <div class="contact-header">
                        <div class="dropdown-toggle">
                            <div class="additional-tel dth">
                                <a href="tel:+79268800893" target="_blank">
                                    +7 (926) 880-08-93 </a> <br>
                                <a href="tel:+79823048935" target="_blank">
                                    +7 (982) 304-89-35 </a>
                            </div>
                            <span class="drop-icon-info"><i class=" fa fa-angle-down" style="animation: none"></i></span>
                        </div>
                        <ul class="dropdown-menu drop-contacts">
                            <li class="info-contact">
                                <a href="javascript:void(0)" onclick="get_modal_callbacking()"><i class="fa fa-phone-square" aria-hidden="true">

                                    </i> Заказать звонок</a>
                            </li>
                            <li class="line-contact"></li>
                            <li>
                                <a target="_blank" href="mailto:Yuzh.Optor@mail.ru">
                                    <div class="icon-image"><img src="img/image/cache/catalog/image/znacki/i-20x20.jpg" alt="Yuzh.Optor@mail.ru" /></div>
                                    Yuzh.Optor@mail.ru
                                </a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send/?phone=79268800893" target="_blank">
                                    <div class="icon-image"><i class="fa fa-whatsapp">

                                        </i></div>
                                    +7 (926) 880-08-93
                                </a>
                                <a href="https://api.whatsapp.com/send/?phone=79823048935" target="_blank">
                                    <div class="icon-image"><i class="fa fa-whatsapp">

                                        </i></div>
                                    +7 (982) 304-89-35
                                </a>
                            </li>
                        </ul>
                        <div class="text_after_phone">Ежедневно, C 9:00 до 21:00</div>
                    </div>
                </div>
            </div>
            <div class="box-cart  col-xs-12 col-xs-12 col-sm-4 col-md-2 col-md-push-4 col-sm-push-8">
                <div class="shopping-cart ">
                    <div id="cart" class="btn-group btn-block">
                        <button type="button" data-toggle="dropdown" data-loading-text="Загрузка..." class="btn btn-block dropdown-toggle">
                            <i class="shop-bag fa fa-cart-plus"></i>
                            <i class="car-down fa fa-angle-down"></i>
                            <span class="cart-total"><span class="products"><b>0</b> <span class="text_product">Tоваров,</span></span><span class="prices">на <b>0.00
                                            р.</b></span></span>
                        </button>

                        <ul class="dropdown-menu pull-right">
                            <li>
                                <p class="text-center">В корзине пусто!</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="box-search  col-xs-12  col-sm-8 col-md-4 col-sm-pull-4 col-md-pull-2 search-top">
                <div id="searchtop">
                    <div id="search" class="input-group pt20">
                        <input type="text" name="search" value="" placeholder="Поиск товара по каталогу" class="form-control input-lg search-autocomplete" />
                        <div class="input-group-btn categories">
                            <button id="change_category" type="button" class="btn btn-search-select dropdown-toggle" data-toggle="dropdown">
                                <span class="category-name">Везде&nbsp;</span>&nbsp;<span class="fa fa-angle-down fa-fw car-down"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a onclick="return false;" data-idsearch="0">Везде</a></li>
                                <li><a onclick="return false;" data-idsearch="1">АВТОПРИНАДЛЕЖНОСТИ</a>
                                </li>

                                <li><a onclick="return false;" data-idsearch="21">Все для сантехники</a>
                                </li>

                                <li><a onclick="return false;" data-idsearch="64">ЗИМНИЕ ТОВАРЫ</a></li>

                                <li><a onclick="return false;" data-idsearch="312">ножницы бытовые</a></li>

                                <li><a onclick="return false;" data-idsearch="55">САДОВО-ОГОРОДНЫЙ
                                        ИНВЕНТАРЬ</a></li>

                                <li><a onclick="return false;" data-idsearch="68">СРЕДСТВА ИНДИВИДУАЛЬНОЙ
                                        ЗАЩИТЫ</a></li>

                                <li><a onclick="return false;" data-idsearch="9">СТРОЙ ИНСТРУМЕНТЫ И
                                        ТОВАРЫ</a>
                                </li>

                                <li><a onclick="return false;" data-idsearch="6">ХОЗ ТОВАРЫ</a></li>

                                <li><a onclick="return false;" data-idsearch="4">ЭЛЕКТРОТОВАРЫ</a></li>

                            </ul>
                            <input id="selected_category" type="hidden" name="category_id" value="0" />

                        </div>
                        <span class="input-group-btn button_search">
                                <button type="button" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </span>
                    </div>
                    <div id="search_word" class="hidden-xs hidden-sm">Я ищу, например, <a>Шланги</a></div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .hide-cat {
            display: block;
        }

        .hide-cat-hide {
            display: none !important;
        }
    </style>
    <div class="container" id="category">
        <div class="row">
            <div class="col-sm-12 col-md-3 menu-box ">
                <nav id="menu" class="btn-group btn-block open">
                    <button type="button" class="btn btn-menu btn-block dropdown-toggle" data-toggle="dropdown" id="but">
                        <i class="fa fa-bars"></i>
                        <span class="text-category">Категории</span>
                    </button>

                    <ul id="menu-list" class="dropdown-menu hide-cat">
                        <li class="hidden-md hidden-lg"><a class="dropdown-img" href="delivery.php">Доставка</a></li>
                        <li class="hidden-md hidden-lg"><a class="dropdown-img" href="oplata.php">Оплата</a></li>
                        <li class="hidden-md hidden-lg"><a class="dropdown-img" href="about_us.php">О нас</a></li>
                        <li class="hidden-md hidden-lg"><a class="dropdown-img" href="Kontakct.php">Контакты</a></li>
                        <?php
                        $elems1 = mysqli_query($conn, "SELECT DISTINCT `third_name` FROM `category`");
                        foreach ($elems1 as $i1 => $elem1) { ?>
                            <li class="dropdown">
                                <span class="toggle-child"><i class="fa fa-plus plus"></i><i class="fa fa-minus minus"></i></span>
                                <a class="parent-link dropdown-img"><?= $elem1['third_name'] ?><i class="fa fa-angle-down arrow"></i></a> <!-- Категория 3 -->

                                <div class="ns-dd dropdown-menu-simple nsmenu-type-category-simple">
                                    <div class="dropdown-inner">
                                        <ul class="list-unstyled nsmenu-haschild">
                                            <?php $elems2 = mysqli_query($conn, "SELECT DISTINCT `second_name`, `second_id`, `third_id` FROM `category` WHERE `third_id`= '$i1'");
                                            foreach ($elems2 as $i2 => $elem2) { ?>
                                                <li class="nsmenu-issubchild">
                                                    <a><?= $elem2['second_name'] ?><i class="fa fa-angle-down arrow"></i></a> <!-- Категория 2 -->
                                                    <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                        <?php $elems3 = mysqli_query($conn, "SELECT DISTINCT `first_name` FROM `category` WHERE `third_id`='$i1' AND `second_id` = '$elem2[second_id]'");
                                                        foreach ($elems3 as $i3 => $elem3) { ?>
                                                            <li class=""><a><?= $elem3['first_name'] ?></a></li> <!-- Категория 1 -->
                                                        <?php } ?>
                                                    </ul>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>

                    </ul>
                </nav>

            </div>
            <script>
                window.addEventListener('DOMContentLoaded', (event) => {
                    $(window).scroll(function() {
                        if ($(this).scrollTop() > 200) {
                            $('#menu-list').removeClass('hide-cat');
                            $('#menu-list').addClass('hide-cat-hide');
                        } else {
                            $('#menu-list').removeClass('hide-cat-hide');
                            $('#menu-list').addClass('hide-cat');
                        }
                    });
                    $('#but').on("click", function() {
                        console.log('adasd');
                        $('#menu-list').removeClass('hide-cat-hide');
                    });
                });
            </script>
            <div class="col-md-9 hidden-xs hidden-sm clearfix">
                <nav id="additional-menu" class="navbar hmenu_type">
                    <div>
                        <ul class="nav navbar-nav">
                            <li><a class="no-img-parent-link" href="delivery.php">
                                    Доставка</a></li>
                            <li><a class="no-img-parent-link" href="oplata.php">
                                    Оплата</a></li>
                            <li><a class="no-img-parent-link" href="about_us.php">
                                    О нас</a></li>
                            <li><a class="no-img-parent-link" href="Kontakct.php">
                                    Контакты</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            $(document).ready(function() {
                var width_fmns = viewport().width;
                if (width_fmns >= 300) {
                    if ($("#top-fixed").length == 0) {
                        var menu_fix = '<div class="menu_fix col-sm-3 col-md-3"></div>';
                        var phone_fix = '<div class="phone_fix col-sm-2 col-md-3 "></div>';
                        var search_fix = '<div class="search_fix col-md-4 col-md-pull-2"><div id="search-fixed-top"></div></div>';
                        var cart_fix = '<div class="col-sm-3 col-md-2 col-md-push-4 cart_fix"></div>';

                        $('#top').before('<div id="top-fixed" class="hidden-xs hidden-sm"><div class="container"><div class="row">' + menu_fix + ' ' + phone_fix + ' ' + cart_fix + ' ' + search_fix + ' </div></div></div>');
                        $('#menu').clone().appendTo('#top-fixed .menu_fix');
                        $('#phone').clone().appendTo('#top-fixed .phone_fix');
                        $('#search').clone().appendTo('#top-fixed #search-fixed-top');
                        $('header .shopping-cart').clone().appendTo('#top-fixed .cart_fix');
                    }
                } else {
                    $('#top-fixed').remove();
                }
                $(window).resize(function() {
                    var width_fmns = viewport().width;

                    if (width_fmns >= 992) {
                        if ($("#top-fixed").length == 0) {
                            var menu_fix = '<div class="menu_fix col-sm-3 col-md-3"></div>';
                            var phone_fix = '<div class="phone_fix col-sm-2 col-md-3 "></div>';
                            var search_fix = '<div class="search_fix col-md-4 col-md-pull-2"><div id="search-fixed-top"></div></div>';
                            var cart_fix = '<div class="col-sm-3 col-md-2 col-md-push-4 cart_fix"></div>';

                            $('#top').before('<div id="top-fixed" class="hidden-xs hidden-sm"><div class="container"><div class="row">' + menu_fix + ' ' + phone_fix + ' ' + cart_fix + ' ' + search_fix + ' </div></div></div>');
                            $('#menu').clone().appendTo('#top-fixed .menu_fix');
                            $('#phone').clone().appendTo('#top-fixed .phone_fix');
                            $('#search').clone().appendTo('#top-fixed #search-fixed-top');
                            $('header .shopping-cart').clone().appendTo('#top-fixed .cart_fix');
                            $('#menu #menu-list').menuAim({
                                activateCallback: activateSubmenu,
                                deactivateCallback: deactivateSubmenu,
                            });

                            function activateSubmenu(row) {
                                if ($(row).hasClass('dropdown')) {
                                    $(row).addClass('menu-open');
                                }
                            }

                            function deactivateSubmenu(row) {
                                $(row).removeClass('menu-open');
                            }

                            function exitMenu(row) {
                                return true;
                            }

                            $('.dropdown-menu-simple .nsmenu-haschild').menuAim({
                                activateCallback: activateSubmenu2level,
                                deactivateCallback: deactivateSubmenu2level,
                            });

                            function activateSubmenu2level(row) {
                                if ($(row).hasClass('nsmenu-issubchild')) {
                                    $(row).addClass('menu-open-2level');
                                }
                            }

                            function deactivateSubmenu2level(row) {
                                $(row).removeClass('menu-open-2level');
                            }

                            function exitMenu2level(row) {
                                return true;
                            }

                            $('.dropdown-menu-simple .nsmenu-ischild-simple').menuAim({
                                activateCallback: activateSubmenu4level,
                                deactivateCallback: deactivateSubmenu4level,
                            });

                            function activateSubmenu4level(row) {

                                $(row).addClass('menu-open-4level');
                            }

                            function deactivateSubmenu4level(row) {
                                $(row).removeClass('menu-open-4level');
                            }

                            function exitMenu4level(row) {
                                return true;
                            }
                        }
                    } else {
                        $('#top-fixed').remove();
                    }
                });

                $(window).scroll(function() {
                    if ($(this).scrollTop() > 200) {
                        $('#category').addClass('category');
                    } else {
                        $('#category').removeClass('category');
                    }
                });
                $('#category #menu-list').menuAim({
                    activateCallback: activateSubmenu_fixed,
                    deactivateCallback: deactivateSubmenu_fixed,
                });

                function activateSubmenu_fixed(row) {
                    $(row).addClass('menu-open');
                }

                function deactivateSubmenu_fixed(row) {
                    $(row).removeClass('menu-open');
                }

                function exitMenu_fixed(row) {
                    return true;
                }

                $('#top-fixed .dropdown-menu-simple .nsmenu-haschild').menuAim({
                    activateCallback: activateSubmenu2level_fixed,
                    deactivateCallback: deactivateSubmenu2level_fixed,
                });

                function activateSubmenu2level_fixed(row) {
                    $(row).addClass('menu-open-2level');
                }

                function deactivateSubmenu2level_fixed(row) {
                    $(row).removeClass('menu-open-2level');
                }

                function exitMenu2level_fixed(row) {
                    return true;
                }


                $('#top-fixed #search a').bind('click', function() {
                    $("#top-fixed #selected_category").val($(this).attr('data-idsearch'));
                    $('#top-fixed .category-name').html($(this).html());
                });
                $('#top-fixed .btn-search').bind('click', function() {
                    url = $('base').attr('href') + 'index.php?route=product/search';

                    var value = $('#top-fixed input[name=\'search\']').val();

                    if (value) {
                        url += '&search=' + encodeURIComponent(value);
                    } else {
                        url += '&search=';
                    }

                    var category_id = $('#top-fixed input[name=\'category_id\']').prop('value');

                    if (category_id > 0) {
                        url += '&category_id=' + encodeURIComponent(category_id) + '&sub_category=true';
                    }
                    location = url;

                });
            });
        });
    </script>
</header>
<body class="information-information-4">
<p id="back-top"><a rel="nofollow" class="btn btn-default" href="#top">
    <i class="fa fa-chevron-up" style="font-size:18px;"></i></a></p>
<div class="container" style="margin-bottom: 50px">
    <h1>О нас</h1>
    <h2 style="text-align: center; font-weight: 600">Торговая компания Yzh-Optor</h2>
    <p>         Наша торговая компания Yzh-Optor предлагает огромный ассортимент садово-огородного инвентаря, строительных
        инструментов, электротоваров, продукции хозяйственного назначения, а также у нас недорого можно купить зимние
        товары (снегоуборочный инвентарь, товары для развлечений).</p>
    <div class="banner"><img src="img/banner_assort__large.jpg"></div>
    <p>
        С выбором интересующей категории продукции сложностей не возникнет, благодаря отлично проработанной навигации и
        способу поиска товаров по группам, назначению, стоимости. Если при выборе все-таки возникнут вопросы, наши
        консультанты готовы прийти на помощь 24 часа в сутки.
    </p>
    <i>Что мы предлагаем своим клиентам?</i>
    <p>Итак, сразу отметим, что у нас можно совершить оптовые и розничные закупки. В первом случае покупатели могут
        рассчитывать на предоставление дополнительных скидок, что позволит с еще большей финансовой выгодой приобрести
        интересующие товары отличного качества. </p>
    <h3>Сотрудничая с нами, вы сможете купить:</h3>
    <ul>
        <li>Садово-огородный инвентарь (системы индивидуального полива, товары для выращивания рассады, садовые
            тачки);
        </li>
        <li>Электротовары (фонарики и паяльники, розетки, удлинители, ТЭН для водонагревателя и т.п.);</li>
        <li>Строительные инструмента (сварочное оборудование, расходные материалы, измерительные инструменты);</li>
        <li>Автомобильные принадлежности (различные виды аксессуаров, автомобильная химия, инструменты).</li>
    </ul>
    <p>Все это и многое другое, что может пригодиться в использовании дома или на предприятии на выгодных условиях можно
        приобрести с доставкой в нашей торговой компании Yzh-Optor.</p>
    <i>Преимущества сотрудничества с Yzh-Optor</i>
    <p>Наша торговая компания предлагает приобрести различную продукцию отличного качества с доставкой по Южноуральску, а также в
        любой другой город России. </p>
    <h3>Наши преимущества:</h3>
    <ul>
        <li>Каталог постоянно обновляется, для удобного выбора товаров предусматривается наличие фото, подробного
            описания продукции с указанием характеристик, стоимости.
        </li>
        <li>Оформить заказа можно по телефону, который указан на сайте или воспользовавшись предложением обратной
            связи.
        </li>
        <li>Оперативность и качество организации доставки по России и странам СНГ.</li>
        <li>Оплата осуществляется удобным для клиента способом (наличный/безналичный расчет).</li>
        <li>В магазине постоянно действуют акции и скидки, благодаря чему вы можете совершать покупки с приличными
            финансовыми выгодами.
        </li>
    </ul>
    <p>Обращайтесь в любое удобное для себя время, наши сотрудники, учитывая ваши пожелания и требования, помогут с
        оформлением заказа, организуют доставку приобретенной продукции на указанный адрес. С нами выгодно, надежно и
        удобно. Звоните прямо сейчас!</p>
    <b>Обратная связь: </b><br /><br />
    <p dir="ltr"
    style="line-height:1.38;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;padding:0pt 0pt 12pt 0pt;">
     <span style="font-size:10.5pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Интернет-магазин:</span><span
         style="font-size:10.5pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"> </span><span
         style="font-size: 10.5pt; font-family: Arial; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;"><a
         href="https://wa.me/+79268800893" target="_blank">+7 (926) 880-08-93</a></span></p>
 <p dir="ltr"
    style="line-height:1.38;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;padding:0pt 0pt 12pt 0pt;">
     <span style="font-size:10.5pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Интернет-магазин:</span><span
         style="font-size:10.5pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"> </span><span
         style="font-size: 10.5pt; font-family: Arial; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;"><a
         href="https://wa.me/+79823048935" target="_blank">+7 (982) 304-89-35</a></span></p>
    <b>Email: <span style="font-weight: normal">Yuzh.Optor@mail.ru</span></b>

     <!-- скрипт звонка -->
     <div class="hide-call mfp-bg mfp-ready hide-zvonok"></div>
     <div class="hide-call mfp-wrap mfp-close-btn-in mfp-auto-cursor mfp-ready hide-zvonok" tabindex="-1" style="overflow: hidden auto;"><div class="mfp-container mfp-ajax-holder mfp-s-ready"><div class="mfp-content"><div id="popup-callback" class="wcb-4">
         <div class="popup-heading"><i class=""></i>&nbsp;&nbsp;Заказать обратный звонок</div>
         <div class="popup-center">
             <form id="callback_data" data-ajax-submit="" enctype="multipart/form-data" method="post">
                     <div class="col-xs-12">
                                 <div class="form-group sections_block_rquaired">
                         <div class="input-group margin-bottom-sm">			
                              <input id="contact-name" class="form-control contact-name" type="text" placeholder="Ваше имя" value="" name="name">		
                             <span class="input-group-addon"><i class="icon-append-1 fa fa-user fa-fw"></i></span>
                         </div>
                         <div id="error_name_callback" class="error_callback"></div>
                     </div>
                                             <div class="form-group sections_block_rquaired">
                         <div class="input-group margin-bottom-sm">			
                              <input id="contact-phone" class="form-control contact-phone" type="text" placeholder="Ваш телефон" value="" name="phone">		
                             <span class="input-group-addon"><i class="icon-append-1 fa fa-phone-square fa-fw"></i></span>
                         </div>
                         <div id="error_phone_callback" class="error_callback"></div>
                     </div>
                                             <div class="form-group sections_block">
                         <div class="input-group margin-bottom-sm">			
                              <input id="contact-email" class="form-control contact-email" type="text" placeholder="Email" value="" name="email_buyer">		
                             <span class="input-group-addon"><i class="icon-append-1 fa fa-envelope fa-fw"></i></span>
                         </div>
                         <div id="error_email_callback" class="error_callback"></div>
                     </div>
                                             <div class="form-group sections_block">
                         <div class="input-group margin-bottom-sm">			
                              <input id="contact-comment" class="form-control contact-comment" type="text" placeholder="Комментарий" value="" name="comment_buyer">		
                             <span class="input-group-addon"><i class="icon-append-1 fa fa-comment fa-fw"></i></span>
                         </div>
                         <div id="error_comment_callback" class="error_callback"></div>
                     </div>
                                             <div class="form-group">
                         <input type="text" name="time_callback_on" value="" class="form-control start" placeholder="Когда Вам Перезвонить:">
                         <input type="hidden" name="time_callback_off" value="">
                     </div>
                               
                 <input type="hidden" id="callback_url" value="" name="url_site">	
             </div>
             
             
             <div class="anytext-callback marb col-xs-12 text-center"></div>
             </form>
         </div>
         <div class="popup-footer">
             <div class="col-xs-12 text-center">
             <button onclick="sendCallback();" type="submit" class="btn-callback ladda-button" data-style="expand-left"><span class="ladda-label">Заказать звонок</span></button>
             </div>
         </div>
     <link rel="stylesheet" href="catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css"> 
     <script src="catalog/view/javascript/jquery/datetimepicker/moment.js"></script>
     <script src="catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js"></script>
     <script>
     $('.start').datetimepicker({
         pickDate: true,
         minDate : moment(),
         pickTime: true
     });
     $(document).ready(function() {
         var ContactouterHeight = $('#callbackpro_contacts').outerHeight()-6;
         $(function(){$('#callbackpro_contacts').css({'top':-ContactouterHeight});});
         });
     </script>
     <button title="Close (Esc)" type="button" class="mfp-close" id="close-call">×</button></div></div><div class="mfp-preloader"><img src="catalog/view/theme/newstore/image/ring-alt-3.svg"></div></div></div>
 <!-- конец его бля -->


</div>
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="footer-ribbon">
                <span>Мы ценим каждого покупателя!</span>
            </div>

            <div class="row">
                <div class="newsletter">
                    <div class="col-xs-12 col-md-3 text-xs-center-newsletter text-newsletter text-md-right">
                        <span>Подписаться на рассылку</span>
                    </div>
                    <div class="col-xs-12 col-md-6 text-xs-center-newsletter">
                        <input type="text" class="form-control" id="input-newsletter" placeholder="Введите ваш адрес электронной почты" value="">
                        <span id="error-msg"></span>
                    </div>
                    <div class="col-xs-12 col-md-3 text-xs-center-newsletter text-md-left">
                        <button type="button" id="subcribe" class="btn btn-newsletter" value="Подписаться"><i class="fa fa-envelope fa-fw"></i>Подписаться
                        </button>
                    </div>
                </div>
            </div>

            <div class="row banner-footer">
                <div class="col-sm-6 col-md-3">
                    <div class="block-banner-footer  ">
                        <div class="icon-banner-footer">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="text-footer-banner">
                            <div class="banner-title-footer">
                                <h3>ЗАКАЗ ПО ТЕЛЕФОНУ</h3>
                            </div>
                            <span class="banner-description-footer">+7 (926) 880-08-93 <br>+7 (982) 304-89-35</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="block-banner-footer  ">
                        <div class="icon-banner-footer">
                            <i class="fa fa-percent"></i>
                        </div>
                        <div class="text-footer-banner">
                            <div class="banner-title-footer">
                                <h3>СКИДКИ</h3>
                            </div>
                            <span class="banner-description-footer">ПОСТОЯННЫМ ПОКУПАТЕЛЯМ!</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="block-banner-footer  ">
                        <div class="icon-banner-footer">
                            <i class="fa fa-truck"></i>
                        </div>
                        <div class="text-footer-banner">
                            <div class="banner-title-footer">
                                <h3> ДОСТАВКА ЗАКАЗОВ</h3>
                            </div>
                            <span class="banner-description-footer">По России и СНГ!</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="block-banner-footer  ">
                        <div class="icon-banner-footer">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="text-footer-banner">
                            <div class="banner-title-footer">
                                <h3>График Работы</h3>
                            </div>
                            <span class="banner-description-footer">Ежедневно C 9:00 до 21:00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h3> Информация</h3>
                    <ul class="list-unstyled">
                        <li><a href="about_us.php">О нас</a></li>
                        <li><a href="delivery.php">Информация о доставке</a></li>
                        <li><a href="terms.php">Условия соглашения</a></li>
                    </ul>
                    <h3></h3>
                    <ul class="list-unstyled">
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h3> Дополнительно</h3>
                    <ul class="list-unstyled">
                        <li><a href="constructor/404.php">Карта сайта</a></li>
                        <li><a href="constructor/404.php">Связаться с нами</a></li>
                        <li><a href="constructor/404.php">Возврат товара</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h3> Личный кабинет</h3>
                    <ul class="list-unstyled">
                        <li><a href="constructor/404.php">Личный кабинет</a></li>
                        <li><a href="constructor/404.php">История заказов</a></li>
                        <li><a href="constructor/404.php">Мои закладки</a></li>
                        <li><a href="constructor/404.php">Рассылка новостей</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h3>Наши Контакты</h3>
                    <ul class="list-unstyled">
                        <li><a href="tel:+79268800893" target="_blank"><i class=" fa-width"></i>+7 (926)
                                880-08-93</a>
                        <li><a href="tel:+79823048935" target="_blank"><i class=" fa-width"></i>+7 (982)
                                304-89-35</a>
                        </li>
                        <li><a target="_blank" href="mailto:Yuzh.Optor@mail.ru"><i class=" fa-width"></i>
                                Yuzh.Optor@mail.ru</a></li>
                        <li>
                            <a href="https://api.whatsapp.com/send/?phone=79268800893"><i class="fa fa-whatsapp fa-width"></i> +7 (926) 880-08-93</a><br />
                            <a href="https://api.whatsapp.com/send/?phone=79823048935"><i class="fa fa-whatsapp fa-width"></i> +7 (982) 304-89-35</a>
                        </li>
                    </ul>
                    <p>Торговая компания Yuzh.Optor &copy; 2022</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h3>О нашем магазине</h3>
                    <div class="description_store_footer">
                        <div class="shop-about-description-short" style="outline-color: rgb(0, 156, 240); margin: 0px 0px 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 700; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: Arial, " Helvetica Neue ", Helvetica, sans-serif; vertical-align: baseline;">Строительные и
                        хозтовары по самым низким
                        ценам !!!
                    </div>
                    <div class="shop-about-description-full" style="outline-color: rgb(0, 156, 240); margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: Arial, " Helvetica Neue ", Helvetica, sans-serif; vertical-align: baseline;">Наша компания
                    предлагает большой ассортимент
                    строительных инструментов , садово-огородный инвентарь , сантехника ,крепёж ,
                    автоаксессуары ,
                    хозяйственные товары.
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
        </div>
    </div>
    </div>
</footer>
<div id="tcb-call">
    <div class="tcb-phone">
        <div class="tcb-phone-img"></div>
    </div>
    <div class="tcb-layout1"></div>
    <div class="tcb-layout2"></div>
    <div class="tcb-layout3"></div>
</div>

</body>

</html>