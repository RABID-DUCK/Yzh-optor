<?php
require 'constructor/connect.php';
$dir_img = __DIR__ . '/img/tovaru/';
?>
<!DOCTYPE html>
<!-- saved from url=(0032)contact-us/ -->
<html dir="ltr" lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Торговая компания Yuzh.Optor</title>
    <base />
    <meta name="description" content="Торговая компания Yuzh.Optor" />
    <meta name="keywords" content="Торговая компания Yuzh.Optor" />
    <meta property="og:title" content="Торговая компания Yuzh.Optor" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="index.php" />
    <meta property="og:image" content="img/LOGO.png" />
    <meta property="og:site_name" content="Торговая компания Yuzh.Optor" />
    <link href="index.php" rel="canonical" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="preload" as="style" />
    <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="img/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/_50c36ab27da8bb5ead9c87671a74d2a9.css" />
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
            font-style: bold;
            font-weight: 600;
        }

        @font-face {
            font-display: swap;
            font-family: 'Marck Script';
            src: url('catalog/view/theme/newstore/stylesheet/fonts/MarckScriptRegular.ttf');
        }
    </style>
    <link rel="stylesheet" href="css/ns-cache/_50c36ab27da8bb5ead9c87671a74d2a9.css" />
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
        <div><img src="https://mc.yandex.ru/watch/80874508" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    <style>
        .htop-b-pc img {
            margin: 0 auto;
        }
    </style>
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
</head>

<body class="information-contact">
    <p id="back-top" style="display: none;"><a rel="nofollow" class="btn btn-default" href="#top"><i
                class="fa fa-chevron-up" style="font-size:18px;"></i></a></p>
    <div id="top-fixed" class="hidden-xs hidden-sm">
        <div class="container">
            <div class="row">
                <div class="menu_fix col-sm-3 col-md-3">
                    <nav id="menu" class="btn-group btn-block">
                        <button type="button" class="btn btn-menu btn-block dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bars"></i>
                            <span class="text-category">Категории</span>
                        </button>
                    </nav>
                </div>
                <div class="phone_fix col-sm-2 col-md-3 ">
                    <div id="phone">
                        <div class="contact-header">
                            <div class="dropdown-toggle">
                                <div class="additional-tel dth">
                                    <a href="tel:+79268800893" target="_blank">
                                        +7 (926) 880-08-93 </a> <br>
                                    <a href="tel:+79823048935" target="_blank">
                                        +7 (982) 304-89-35 </a>
                                </div>
                                <span class="drop-icon-info"><i class=" fa fa-angle-down"
                                        style="animation: none"></i></span>
                            </div>
                            <ul class="dropdown-menu drop-contacts">
                                <li class="info-contact">
                                    <a href="javascript:void(0)" onclick="get_modal_callbacking()"><i
                                            class="fa fa-phone-square" aria-hidden="true">

                                        </i> Заказать звонок</a>
                                </li>
                                <li class="line-contact"></li>
                                <li>
                                    <a target="_blank" href="mailto:Yuzh.Optor@mail.ru">
                                        <div class="icon-image"><img
                                                src="img/image/cache/catalog/image/znacki/i-20x20.jpg"
                                                alt="Yuzh.Optor@mail.ru" /></div>
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
                <div class="col-sm-3 col-md-2 col-md-push-4 cart_fix">
                    <div class="shopping-cart ">
                        <div id="cart" class="btn-group btn-block">
                            <button type="button" data-toggle="dropdown" data-loading-text="Загрузка..."
                                class="btn btn-block dropdown-toggle">
                                <i class="shop-bag fa fa-cart-plus"></i>
                                <i class="car-down fa fa-angle-down"></i>
                                <span class="cart-total"><span class="products"><b>0</b> <span
                                            class="text_product">Tоваров,</span></span><span class="prices">на <b>0.00
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
                <div class="search_fix col-md-4 col-md-pull-2">
                    <div id="search-fixed-top">
                        <div id="search" class="input-group pt20">
                            <input type="text" name="search" value="" placeholder="Поиск товара по каталогу"
                                class="form-control input-lg search-autocomplete" autocompleteserach="off">
                            <ul class="dropdown-menu autosearch"></ul>
                            <div class="input-group-btn categories">
                                <button id="change_category" type="button" class="btn btn-search-select dropdown-toggle"
                                    data-toggle="dropdown">
                                    <span class="category-name">Везде&nbsp;</span>&nbsp;<span
                                        class="fa fa-angle-down fa-fw car-down"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#" onclick="return false;"
                                            data-idsearch="0">Везде</a>
                                    </li>
                                    <li><a href="#" onclick="return false;"
                                            data-idsearch="1">АВТОПРИНАДЛЕЖНОСТИ</a>
                                    </li>

                                    <li><a href="#" onclick="return false;" data-idsearch="21">Все
                                            для
                                            сантехники</a></li>

                                    <li><a href="#" onclick="return false;" data-idsearch="64">ЗИМНИЕ
                                            ТОВАРЫ</a></li>

                                    <li><a href="#" onclick="return false;"
                                            data-idsearch="312">ножницы
                                            бытовые</a></li>

                                    <li><a href="#" onclick="return false;"
                                            data-idsearch="55">САДОВО-ОГОРОДНЫЙ
                                            ИНВЕНТАРЬ</a></li>

                                    <li><a href="#" onclick="return false;"
                                            data-idsearch="68">СРЕДСТВА
                                            ИНДИВИДУАЛЬНОЙ ЗАЩИТЫ</a></li>

                                    <li><a href="#" onclick="return false;" data-idsearch="9">СТРОЙ
                                            ИНСТРУМЕНТЫ И ТОВАРЫ</a></li>

                                    <li><a href="#" onclick="return false;" data-idsearch="6">ХОЗ
                                            ТОВАРЫ</a></li>

                                    <li><a href="#" onclick="return false;"
                                            data-idsearch="4">ЭЛЕКТРОТОВАРЫ</a>
                                    </li>

                                </ul>
                                <input id="selected_category" type="hidden" name="category_id" value="">

                            </div>
                            <span class="input-group-btn button_search">
                                <button type="button" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                            $elems1 = mysqli_query($conn, "SELECT DISTINCT `third_name`, `third_id` FROM `category`");
                            foreach ($elems1 as $i1 => $elem1) { ?>
                                <li class="dropdown">
                                    <span class="toggle-child"><i class="fa fa-plus plus"></i><i class="fa fa-minus minus"></i></span>
                                    <a id="route_id" href="category.php?id=<?= $i1 ?>&ct=third_id" class="parent-link dropdown-img"><?= $elem1['third_name'] ?><i class="fa fa-angle-down arrow"></i></a> <!-- Категория 3 -->

                                    <div class="ns-dd dropdown-menu-simple nsmenu-type-category-simple">
                                        <div class="dropdown-inner">
                                            <ul class="list-unstyled nsmenu-haschild">
                                                <?php $elems2 = mysqli_query($conn, "SELECT DISTINCT `second_name`, `second_id`, `third_id` FROM `category` WHERE `third_id`= '$i1'");
                                                foreach ($elems2 as $i2 => $elem2) { ?>
                                                    <li class="nsmenu-issubchild">
                                                        <a href="category.php?id=<?= $i2 ?>&ct=second_id"><?= $elem2['second_name'] ?><i class="fa fa-angle-down arrow"></i></a> <!-- Категория 2 -->
                                                        <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                            <?php $elems3 = mysqli_query($conn, "SELECT DISTINCT `first_name`, `first_id` FROM `category` WHERE `third_id`='$i1' AND `second_id` = '$elem2[second_id]'");
                                                            foreach ($elems3 as $i3 => $elem3) { ?>
                                                                <li class=""><a href="category.php?id=<?= $i3 ?>&ct=first_id"><?= $elem3['first_name'] ?></a></li> <!-- Категория 1 -->
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
    <div class="container">
        <ul class="breadcrumb">
            <li><a href=""><i class="fa fa-home"></i></a></li>
            <li>Связаться с нами</li>
        </ul>
        <div class="row">
            <div id="content" class="col-sm-12">
                <h1>Связаться с нами</h1>
                <h3>Наш адрес</h3>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-3"><strong>Торговая компания Yzh.Optor</strong><br>
                                <address>
                                    457040, Россия, город Южноуральск, Спортивная, 36
                                </address>
                                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2319.8804544578006!2d61.26613431613852!3d54.44739688022451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43cfa37ae15571b7%3A0xee7e84f14d2a3f46!2z0YPQuy4g0KHQv9C-0YDRgtC40LLQvdCw0Y8sIDM2LCDQrtC20L3QvtGD0YDQsNC70YzRgdC6LCDQp9C10LvRj9Cx0LjQvdGB0LrQsNGPINC-0LHQuy4sIDQ1NzA0MA!5e0!3m2!1sru!2sru!4v1655149005060!5m2!1sru!2sru""
                               target=" _blank" class="btn btn-info"><i class="fa fa-map-marker"></i> Посмотреть на
                                    Google карте</a>
                            </div>
                            <div class="col-sm-3"><strong>Телефон</strong><br>
                                +7 (982) 304-89-35<br>
                                +7 (926) 880-08-93<br>
                                <br>
                            </div>
                            <div class="col-sm-3">
                                <strong>Время работы</strong><br>
                                C 9:00 до 18:00<br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="Kontakct.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <fieldset>
                        <legend>Форма связи</legend>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-name">Ваше имя</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="" id="input-name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-email">E-Mail для связи</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" value="" id="input-email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-enquiry">Сообщение</label>
                            <div class="col-sm-10">
                                <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control"></textarea>
                            </div>
                        </div>
                    </fieldset>
                    <div class="buttons">
                        <div class="pull-right">
                            <input class="btn btn-primary" type="submit" value="Отправить">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

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

    <script>

        function validateEmail($email) {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            return emailReg.test($email);
        }

        $(document).ready(function () {
            $('#subcribe').click(function () {
                var email = $('#input-newsletter').val();

                if (email == '') {
                    var error = 'Пожалуйста, введите адрес электронной почты!';
                }

                if (!validateEmail(email)) {
                    var error = 'Пожалуйста, введите действующий адрес электронной почты!';
                }

                if (error != null) {
                    $('#error-msg').html('');
                    $('#error-msg').append('<b style=\"color:red\">' + error + '</b>');
                } else {

                    var dataString = 'email=' + email;
                    $.ajax({
                        url: 'index.php?route=common/footer/addToNewsletter',
                        type: 'post',
                        data: dataString,
                        dataType: 'json',
                        success: function (json) {
                            if (json['warning']) {
                                $('#error-msg').empty('');
                                $('#input-newsletter').val('');
                                $('#error-msg').append('<b style=\"color:green\">' + json['warning'] + '</b>');
                            }
                            if (json['success']) {
                                $('#error-msg').empty('');
                                $('#input-newsletter').val('');
                                $('#error-msg').append('<b style=\"color:green\">' + json['success'] + '</b>');
                            }

                        }

                    });
                }

            })
        });
    </script>


    <script>< !--
            function price_format(n) {
                c = 2;
                d = '.';
                t = ' ';
                s_left = '';
                s_right = ' р.';
                n = n * 1.00000000;
                i = parseInt(n = Math.abs(n).toFixed(c)) + '';
                j = ((j = i.length) > 3) ? j % 3 : 0;
                return s_left + (j ? i.substr(0, j) + t : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : '') + s_right;
            }

//--></script>

    <div id="tcb-call">
        <div class="tcb-phone">
            <div class="tcb-phone-img"></div>
        </div>
        <div class="tcb-layout1"></div>
        <div class="tcb-layout2"></div>
        <div class="tcb-layout3"></div>
    </div>
    <script>
        function get_modal_callbacking() {
            $.magnificPopup.open({
                tLoading: loading_masked_img,
                items: {
                    src: 'index.php?route=extension/module/callback',
                    type: 'ajax'
                },
            });
        }
    </script>

    <div class="mallbery-caa" style="z-index: 2147483647 !important; text-transform: none !important; position: fixed;">
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
</body>

</html>