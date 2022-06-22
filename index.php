<?php
require 'constructor/connect.php';
$dir_img = __DIR__ . '/img/tovaru/';
?>

<!DOCTYPE html>
<html dir="ltr" lang="ru">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

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
    <meta property="og:url" content="index.html" />
    <meta property="og:image" content="img/LOGO.png" />
    <meta property="og:site_name" content="Торговая компания Yuzh.Optor" />
    <link href="index.html" rel="canonical" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="preload" as="style" />
    <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="img/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/_50c36ab27da8bb5ead9c87671a74d2a9.css" />
    <script defer src="js/jquery-3.6.0.min.js"></script>
    <script defer src="js/ns-cache/_64b8609b55b5e3556b172af674a9b309.js"></script>
    <style>
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
            $.each(['Days', 'Hours', 'Minutes', 'Sec'], function(i) {
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
        var link_checkout = "checkout/index.html";
        var link_newstorecheckout = "cart/index.html?route=checkout/newstorecheckout";
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
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "mc.yandex.ru/metrika/tag.js", "ym");

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
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="common-home">

    <p id="back-top"><a rel="nofollow" class="btn btn-default" href="#top"><i class="fa fa-chevron-up" style="font-size:18px;"></i></a></p>

    <header>
        <div class="container">
            <div class="row vertical-align">
                <div class="col-xs-6 col-sm-12 col-md-3 text-center text-left-md logo-top">
                    <div id="logo">
                        <a href="index.html">
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

                            <form action="constructor/search.php?go" class="form-search">
                            <input id="searching" type="text" name="search_text" value="" placeholder="Поиск товара по каталогу" class="form-control input-lg search-autocomplete" />
                            <img src="" alt="">
                            <p id="items_search"></p>
                            <!-- <div class="input-group-btn categories">
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

                            </div> -->
                            <span class="input-group-btn button_search">
                                <input type="submit" class="btn btn-search" name="search_form" value="Поиск"><i class="fa fa-search"></i>
                            </span>
                            </form>
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
                            <li class="hidden-md hidden-lg"><a class="dropdown-img" href="delivery.html">Доставка</a></li>
                            <li class="hidden-md hidden-lg"><a class="dropdown-img" href="oplata.html">Оплата</a></li>
                            <li class="hidden-md hidden-lg"><a class="dropdown-img" href="about_us.html">О нас</a></li>
                            <li class="hidden-md hidden-lg"><a class="dropdown-img" href="Kontakct.html">Контакты</a></li>
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
                <div class="col-md-9 hidden-xs hidden-sm clearfix">
                    <nav id="additional-menu" class="navbar hmenu_type">
                        <div>
                            <ul class="nav navbar-nav">
                                <li><a class="no-img-parent-link" href="delivery.html">
                                        Доставка</a></li>
                                <li><a class="no-img-parent-link" href="oplata.html">
                                        Оплата</a></li>
                                <li><a class="no-img-parent-link" href="about_us.html">
                                        О нас</a></li>
                                <li><a class="no-img-parent-link" href="Kontakct.html">
                                        Контакты</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
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
    <span itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="name" content="Торговая компания Yuzh.Optor">
        <meta itemprop="logo" content="img/LOGO.png">
        <meta itemprop="url" content="categories/">
        <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <meta itemprop="addressLocality" content="Республика Башкортостан">
            <meta itemprop="streetAddress" content="450097, Республика Башкортостан, город Уфа, Демьяна Бедного, 12, корп. 1">
            <meta itemprop="addressCountry" content="Российская Федерация">
        </span>
        <meta itemprop="telephone" content="+7 (926) 880-08-93">
        <meta itemprop="email" content="Yuzh.Optor@mail.ru">
    </span>
    <div class="container">
        <div class="row">
            <div class="sw-20 col-sm-4 col-md-3 position-no-owl hidden-xs hidden-sm">
                <div id="menu-header-open"></div>
            </div>
            <script>
                if (window.matchMedia("(min-width: 992px)").matches) {
                    $('header #menu-list').addClass("nsmenu-block");
                }
                $(window).resize(function() {
                    if ($(window).width() > 992) {
                        $('header #menu-list').addClass("nsmenu-block");
                    } else {
                        $('header #menu-list').removeClass("nsmenu-block");
                    }
                });
            </script>
            <div class="sw-80 col-md-9">
                <div id="carousel-example-generic" class="carousel slide owl-carousel" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox" style="height: 285px !important;">
                        <div class="item active">
                            <img src="img/image/cache/catalog/slide/3cd41d7615087debd08018cb3b5e1edf-1140x380.jpg" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/image/cache/catalog/slide/1kesfypegejdpiq2pwcipmg-1140x380.png" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/image/cache/catalog/slide/tovary-dlya-doma_111043_1-1140x380.jpg" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        ...
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="row banner-blocks-container banner-block-44858">

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="banner-item is_a_link" onclick="banner_link_open('oplata')">
                        <div class="banner-image">
                            <img src="img/image/cache/catalog/image/icon/oplata-60x60.png" alt="Оплата">
                        </div>
                        <div class="banner-info">
                            <div class="banner-title">Оплата</div>
                            <div class="banner-description">Узнайте как оплатить!</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="banner-item is_a_link">
                        <div class="banner-image">
                            <img src="img/image/cache/catalog/image/icon/truck_photo-60x60.png" alt="Доставка">
                        </div>
                        <div class="banner-info">
                            <div class="banner-title">Доставка</div>
                            <div class="banner-description">Мы отправим ваш заказ в любую точку России и СНГ!</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="banner-item ">
                        <div class="banner-image">
                            <img src="img/image/cache/catalog/image/icon/vopros-60x60.png" alt="Поддержка 24/7">
                        </div>
                        <div class="banner-info">
                            <div class="banner-title">Поддержка 24/7</div>
                            <div class="banner-description">У Вас возникли вопросы?</div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="container-module">
                    <div class="title-module"><span>Перчатки</span></div>
                    <div class="product-slider">
                        <div class="container-modules latest_gv latest_grid0" id="cont1">
                        <?php
                            $elems = mysqli_query($conn, "SELECT * FROM `items` WHERE `second_id`='14' limit 5");
                            foreach ($elems as $elem) {
                                switch (strlen($elem['id'])) {
                                    case 1:
                                        $elem['id'] = '000' . $elem['id'];
                                        break;
                                    case 2:
                                        $elem['id'] = '00' . $elem['id'];
                                        break;
                                    case 3:
                                        $elem['id'] = '0' . $elem['id'];
                                        break;
                                    default:
                                        break;
                                }   
                            ?>
                                <div class="item no-slider col-xs-12 col-sm-6 col-md-4 col-lg-1-5" id="hide-items" onclick="item_click(this, event)">
                                    <div class="product-thumb transition">
                                        <div class="image">
                                            <div class="stickers-ns">
                                                <!-- <div class="sticker-ns bestseller">
                                                <i class="fa fa fa-rocket "></i>
                                                <span>Лидер продаж!</span>
                                            </div>
                                            <div class="sticker-ns popular">
                                                <i class="fa fa fa-eye "></i>
                                                <span>Самые просматриваемые</span>
                                            </div> -->
                                            </div>
                                            <a href="#">
                                                <!-- FIXME '#' Сделать ссылку на элемент -->
                                                <img src="img/tovaru/<?= $elem['img'] ?>" alt='<?= $elem['name'] ?>' title="<?= $elem['name'] ?>" class="img-responsive lazyloaded">
                                            </a>
                                        </div>

                                        <div class="caption">
                                            <div class="product-name">
                                                <a href="#"><?= $elem['name'] ?></a>
                                                <!-- FIXME Сделать ссылку на элемент -->
                                            </div>
                                            <div class="product-model"><?= $elem['id'] ?></div>
                                            <div class="rating">
                                                <span class="rating-box">
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>

                                                    <span class="quantity-reviews">
                                                        <!-- FIXME Сделать ссылку на элемент -->
                                                        <a data-placement="right" data-toggle="tooltip" title="" href="#" data-original-title="отзывов">0</a>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="quantity_plus_minus">
                                                <div class="quantity_cont">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-quantity-minus" type="button">-</button>
                                                        </span>
                                                        <input id="input_quantity_mod_latest_grid06243" class="form-control input-number-quantity6243" name="quantity" size="2" value="1">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-quantity-plus" type="button">+</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <div class="cart">
                                                    <button class="btn btn-general" type="button" >
                                                        <i class="fa fa-shopping-basket"></i><span>В корзину</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="actions-quick-order">
                                                <div class="quick-order">
                                                    <button class="btn btn-fastorder" type="button" data-original-title="Купить в 1 клик">
                                                        <i class="fa fa-shopping-bag fa-fw"></i> Купить в 1 клик
                                                    </button>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            <?php
                            };
                            ?>
                        </div>
                        <div class="showmore-latest0 box-showmore">
                            <div class="ajaxloadingLatest spin-ajax"></div>
                            <span data-nextpage="2" onclick="take_items('cont1', 'second_id', '14', 5, 10)" class="latest-ajax-load0" id="show_more">Показать еще</span>
                        </div>
                    </div>
                </div>
                <div class="container-module">
                    <div class="title-module"><span>Поливочный инвентарь</span></div>
                    <div class="product-slider">
                    <div class="container-modules latest_gv latest_grid0" id="cont2">
                        <?php
                            $elems = mysqli_query($conn, "SELECT * FROM `items` WHERE `second_id`='11' limit 5");
                            foreach ($elems as $elem) {
                                switch (strlen($elem['id'])) {
                                    case 1:
                                        $elem['id'] = '000' . $elem['id'];
                                        break;
                                    case 2:
                                        $elem['id'] = '00' . $elem['id'];
                                        break;
                                    case 3:
                                        $elem['id'] = '0' . $elem['id'];
                                        break;
                                    default:
                                        break;
                                }   
                            ?>
                                <div class="item no-slider col-xs-12 col-sm-6 col-md-4 col-lg-1-5" id="hide-items" onclick="item_click(this, event)">
                                    <div class="product-thumb transition">
                                        <div class="image">
                                            <div class="stickers-ns">
                                                <!-- <div class="sticker-ns bestseller">
                                                <i class="fa fa fa-rocket "></i>
                                                <span>Лидер продаж!</span>
                                            </div>
                                            <div class="sticker-ns popular">
                                                <i class="fa fa fa-eye "></i>
                                                <span>Самые просматриваемые</span>
                                            </div> -->
                                            </div>
                                            <a href="#">
                                                <!-- FIXME '#' Сделать ссылку на элемент -->
                                                <img src="img/tovaru/<?= $elem['img'] ?>" alt='<?= $elem['name'] ?>' title="<?= $elem['name'] ?>" class="img-responsive lazyloaded">
                                            </a>
                                        </div>

                                        <div class="caption">
                                            <div class="product-name">
                                                <a href="#"><?= $elem['name'] ?></a>
                                                <!-- FIXME Сделать ссылку на элемент -->
                                            </div>
                                            <div class="product-model"><?= $elem['id'] ?></div>
                                            <div class="rating">
                                                <span class="rating-box">
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>

                                                    <span class="quantity-reviews">
                                                        <!-- FIXME Сделать ссылку на элемент -->
                                                        <a data-placement="right" data-toggle="tooltip" title="" href="#" data-original-title="отзывов">0</a>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="quantity_plus_minus">
                                                <div class="quantity_cont">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-quantity-minus" type="button">-</button>
                                                        </span>
                                                        <input id="input_quantity_mod_latest_grid06243" class="form-control input-number-quantity6243" name="quantity" size="2" value="1">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-quantity-plus" type="button">+</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <div class="cart">
                                                    <button class="btn btn-general" type="button" >
                                                        <i class="fa fa-shopping-basket"></i><span>В корзину</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="actions-quick-order">
                                                <div class="quick-order">
                                                    <button class="btn btn-fastorder" type="button" data-original-title="Купить в 1 клик">
                                                        <i class="fa fa-shopping-bag fa-fw"></i> Купить в 1 клик
                                                    </button>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            <?php
                            };
                            ?>
                        </div>
                        <div class="showmore-latest0 box-showmore">
                            <div class="ajaxloadingLatest spin-ajax"></div>
                            <span data-nextpage="2" onclick="take_items('cont2', 'second_id', '11', 5, 10)" class="latest-ajax-load0" id="show_more">Показать еще</span>
                        </div>
                    </div>  
                </div>
                <div class="categorywall-container categorywall-0">
                    <div class="title-module"><span>Популярные категории</span></div>
                    <div class="wall-category-box">
                        <div class="box-item col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="item-category  parent_category ">
                                <div class="wall-cat-image show-sub-cat-0">
                                    <img src="https://xpert-ufa.ru/image/cache/catalog/image/pupular_category/95921_2-150x150.jpg" alt="СТРОЙ ИНСТРУМЕНТЫ И ТОВАРЫ">
                                </div>
                                <div class="wall-cat-name">
                                    <div class="display-table">
                                        <div class="display-table-cell"><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/">СТРОЙ ИНСТРУМЕНТЫ И ТОВАРЫ</a></div>
                                    </div>
                                </div>
                                <div class="item-sub-category nswc-host">
                                    <div class="nswc-viewport" style="padding-right: 14px; height: 155px; overflow: hidden;">
                                        <div class="nswc-container" style="overflow: hidden;">
                                            <div class="subcategory-name"><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/gaz-plita-gorelki/">ГАЗ-ПЛИТА-ГОРЕЛКИ</a></div>
                                            <div class="subcategory-name"><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/zamki/">ЗАМКИ</a></div>
                                            <div class="subcategory-name"><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/izmeritelnye-instrumenty/">ИЗМЕРИТЕЛЬНЫЕ ИНСТРУМЕНТЫ</a></div>
                                            <div class="subcategory-name"><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/instrument-malyarnyy-i-shtukaturnyy/">ИНСТРУМЕНТ МАЛЯРНЫЙ И ШТУКАТУРНЫЙ</a></div>
                                            <div class="subcategory-name"><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/krepezh/">КРЕПЕЖ</a></div>
                                            <div class="subcategory-name"><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/">РАСХОДНЫЕ МАТЕРИАЛЫ</a></div>
                                            <div class="subcategory-name"><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/ruchnoy-instrument/">РУЧНОЙ ИНСТРУМЕНТ</a></div>
                                            <div class="subcategory-name"><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/svarochnoe-oborudovanie/">СВАРОЧНОЕ ОБОРУДОВАНИЕ</a></div>
                                        </div>
                                    </div>
                                    <div class="nswc-scrollbar" style="position: absolute; top: 0px; right: 0px; overflow: hidden; height: 152px;">
                                        <div class="nswc-thumb" style="position: absolute; left: 0px; width: 100%; top: 0px; height: 118.575px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="item-category ">
                                <div class="wall-cat-image show-sub-cat-0">
                                    <a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/instrumenty-dlya-sada/vedra/"><img src="https://xpert-ufa.ru/image/cache/catalog/image/pupular_category/27953642163111e8ae1fe8039a18cbef_a781eb93299111ebbe151c1b0db29d29-500x500-150x150.png" alt="Ведра"></a>
                                </div>
                                <div class="wall-cat-name">
                                    <div class="display-table">
                                        <div class="display-table-cell"><a href="https://xpert-ufa.ru/sadovo-ogorodnyy-inventar/instrumenty-dlya-sada/vedra/">Ведра</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="item-category ">
                                <div class="wall-cat-image show-sub-cat-0">
                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/disk-almaznyy-/"><img src="https://xpert-ufa.ru/image/cache/catalog/image/pupular_category/2cc86d6cc67a11e68c733c970e011047_3bd1db41361011ebbe161c1b0db29d29-500x500-150x150.jpg" alt="Диск Алмазный "></a>
                                </div>
                                <div class="wall-cat-name">
                                    <div class="display-table">
                                        <div class="display-table-cell"><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/raskhodnye-materialy/disk-almaznyy-/">Диск Алмазный </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="item-category ">
                                <div class="wall-cat-image show-sub-cat-0">
                                    <a href="https://xpert-ufa.ru/elektrotovary/svetilniki/"><img src="https://xpert-ufa.ru/image/cache/catalog/image/pupular_category/7876e744c27411eabe0c1c1b0db29d29_40f93b3f5fc911ebbe1a1c1b0db29d29-500x500-150x150.jpg" alt="Светильники"></a>
                                </div>
                                <div class="wall-cat-name">
                                    <div class="display-table">
                                        <div class="display-table-cell"><a href="https://xpert-ufa.ru/elektrotovary/svetilniki/">Светильники</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="item-category ">
                                <div class="wall-cat-image show-sub-cat-0">
                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/instrument-malyarnyy-i-shtukaturnyy/serpyanka-setka-shtukaturnaya/"><img src="https://xpert-ufa.ru/image/cache/catalog/image/pupular_category/5972713_image_large-150x150.jpg" alt="Серпянка,Сетка Штукатурная"></a>
                                </div>
                                <div class="wall-cat-name">
                                    <div class="display-table">
                                        <div class="display-table-cell"><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/instrument-malyarnyy-i-shtukaturnyy/serpyanka-setka-shtukaturnaya/">Серпянка,Сетка Штукатурная</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="item-category ">
                                <div class="wall-cat-image show-sub-cat-0">
                                    <a href="https://xpert-ufa.ru/avtoprinadlezhnosti/avtoaksessuary/avto-salfetki/"><img src="https://xpert-ufa.ru/image/cache/catalog/image/pupular_category/autosalfetki-150x150.jpg" alt="Авто салфетки"></a>
                                </div>
                                <div class="wall-cat-name">
                                    <div class="display-table">
                                        <div class="display-table-cell"><a href="https://xpert-ufa.ru/avtoprinadlezhnosti/avtoaksessuary/avto-salfetki/">Авто салфетки</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="item-category ">
                                <div class="wall-cat-image show-sub-cat-0">
                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/izmeritelnye-instrumenty/ugolok-lineyka/"><img src="https://xpert-ufa.ru/image/cache/catalog/image/pupular_category/3af342b3459d11e5aad6f835ddca8acb_327c7180348c11ebbe161c1b0db29d29-500x500-150x150.jpg" alt="Уголок-линейка"></a>
                                </div>
                                <div class="wall-cat-name">
                                    <div class="display-table">
                                        <div class="display-table-cell"><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/izmeritelnye-instrumenty/ugolok-lineyka/">Уголок-линейка</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="item-category ">
                                <div class="wall-cat-image show-sub-cat-0">
                                    <a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/instrument-malyarnyy-i-shtukaturnyy/shpatel/"><img src="https://xpert-ufa.ru/image/cache/catalog/image/pupular_category/2e9f6a214a5711ebbe181c1b0db29d29_ebda8048a35611ebbe1c1c1b0db29d29-500x500-150x150.jpg" alt="Шпатель"></a>
                                </div>
                                <div class="wall-cat-name">
                                    <div class="display-table">
                                        <div class="display-table-cell"><a href="https://xpert-ufa.ru/stroy-instrumenty-i-tovary/instrument-malyarnyy-i-shtukaturnyy/shpatel/">Шпатель</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-module">
                    <div class="title-module"><span>Автопринадлежности</span></div>
                    <div class="product-slider">
                    <div class="container-modules latest_gv latest_grid0" id="cont3">
                        <?php
                            $elems = mysqli_query($conn, "SELECT * FROM `items` WHERE `third_id`='0' limit 5");
                            foreach ($elems as $elem) {
                                switch (strlen($elem['id'])) {
                                    case 1:
                                        $elem['id'] = '000' . $elem['id'];
                                        break;
                                    case 2:
                                        $elem['id'] = '00' . $elem['id'];
                                        break;
                                    case 3:
                                        $elem['id'] = '0' . $elem['id'];
                                        break;
                                    default:
                                        break;
                                }   
                            ?>
                                <div class="item no-slider col-xs-12 col-sm-6 col-md-4 col-lg-1-5" id="hide-items" onclick="item_click(this, event)">
                                    <div class="product-thumb transition">
                                        <div class="image">
                                            <div class="stickers-ns">
                                                <!-- <div class="sticker-ns bestseller">
                                                <i class="fa fa fa-rocket "></i>
                                                <span>Лидер продаж!</span>
                                            </div>
                                            <div class="sticker-ns popular">
                                                <i class="fa fa fa-eye "></i>
                                                <span>Самые просматриваемые</span>
                                            </div> -->
                                            </div>
                                            <a href="#">
                                                <!-- FIXME '#' Сделать ссылку на элемент -->
                                                <img src="img/tovaru/<?= $elem['img'] ?>" alt='<?= $elem['name'] ?>' title="<?= $elem['name'] ?>" class="img-responsive lazyloaded">
                                            </a>
                                        </div>

                                        <div class="caption">
                                            <div class="product-name">
                                                <a href="#"><?= $elem['name'] ?></a>
                                                <!-- FIXME Сделать ссылку на элемент -->
                                            </div>
                                            <div class="product-model"><?= $elem['id'] ?></div>
                                            <div class="rating">
                                                <span class="rating-box">
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>

                                                    <span class="quantity-reviews">
                                                        <!-- FIXME Сделать ссылку на элемент -->
                                                        <a data-placement="right" data-toggle="tooltip" title="" href="#" data-original-title="отзывов">0</a>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="quantity_plus_minus">
                                                <div class="quantity_cont">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-quantity-minus" type="button">-</button>
                                                        </span>
                                                        <input id="input_quantity_mod_latest_grid06243" class="form-control input-number-quantity6243" name="quantity" size="2" value="1">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-quantity-plus" type="button">+</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <div class="cart">
                                                    <button class="btn btn-general" type="button" >
                                                        <i class="fa fa-shopping-basket"></i><span>В корзину</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="actions-quick-order">
                                                <div class="quick-order">
                                                    <button class="btn btn-fastorder" type="button" data-original-title="Купить в 1 клик">
                                                        <i class="fa fa-shopping-bag fa-fw"></i> Купить в 1 клик
                                                    </button>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            <?php
                            };
                            ?>
                        </div>
                        <div class="showmore-latest0 box-showmore">
                            <div class="ajaxloadingLatest spin-ajax"></div>
                            <span data-nextpage="2" onclick="take_items('cont3', 'third_id', '0', 5, 10)" class="latest-ajax-load0" id="show_more">Показать еще</span>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="box-bg-full bg_mode_pos_2">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 pos2">
                            <div class="container-module">
                                <div class="title-module"><span style="color:#FF760D;">Ручной инструмент</span></div>
                                <div class="product-slider">
                                    <div class="container-modules latest_gv latest_grid0">
                                        <?php
                                        $elems = mysqli_query($conn, "SELECT * FROM `items` WHERE `second_id`='22' limit 2");
                                        foreach ($elems as $elem) {
                                            switch (strlen($elem['id'])) {
                                                case 1:
                                                    $elem['id'] = '000' . $elem['id'];
                                                    break;
                                                case 2:
                                                    $elem['id'] = '00' . $elem['id'];
                                                    break;
                                                case 3:
                                                    $elem['id'] = '0' . $elem['id'];
                                                    break;
                                                default:
                                                    break;
                                            }
                                        ?>

                                            <div class="item no-slider col-xs-12 col-md-6" id="hide-items" onclick="item_click(this, event)">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <div class="stickers-ns">
                                                            <!-- <div class="sticker-ns bestseller">
                                                            <i class="fa fa fa-rocket "></i>
                                                            <span>Лидер продаж!</span>
                                                        </div>
                                                        <div class="sticker-ns popular">
                                                            <i class="fa fa fa-eye "></i>
                                                            <span>Самые просматриваемые</span>
                                                        </div> -->
                                                        </div>
                                                        <a>
                                                            <!-- FIXME '#' Сделать ссылку на элемент -->
                                                            <img src="img/tovaru/<?= $elem['img'] ?>" alt='<?= $elem['name'] ?>' title="<?= $elem['name'] ?>" class="img-responsive lazyloaded">
                                                        </a>
                                                    </div>

                                                    <div class="caption">
                                                        <div class="product-name">
                                                            <a><?= $elem['name'] ?></a>
                                                            <!-- FIXME Сделать ссылку на элемент -->
                                                        </div>
                                                        <div class="product-model"><?= $elem['id'] ?></div>
                                                        <div class="rating">
                                                            <span class="rating-box">
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>

                                                                <span class="quantity-reviews">
                                                                    <!-- FIXME Сделать ссылку на элемент -->
                                                                    <a data-placement="right" data-toggle="tooltip" title="" data-original-title="отзывов">0</a>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="quantity_plus_minus">
                                                            <div class="quantity_cont">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-quantity-minus" type="button">-</button>
                                                                    </span>
                                                                    <input id="input_quantity_mod_latest_grid06243" class="form-control input-number-quantity6243" name="quantity" size="2" value="1">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-quantity-plus" type="button">+</button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="cart">
                                                                <button class="btn btn-general" type="button" >
                                                                    <i class="fa fa-shopping-basket"></i><span>В корзину</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        };
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 pos3">
                            <div class="container-module">
                                <div class="title-module""><span style=" color:#0AA839;">Вам может понравиться</span></div>
                                <div class="product-slider">
                                    <div class="container-modules latest_gv latest_grid0">
                                        <?php
                                        $rnd_mass = mysqli_query($conn, "SELECT DISTINCT `first_id` FROM `items`")->fetch_all(MYSQLI_ASSOC);
                                        $rnd = $rnd_mass[array_rand($rnd_mass, 1)]['first_id'];
                                        $elems = mysqli_query($conn, "SELECT * FROM `items` WHERE `first_id`= $rnd limit 2");
                                        foreach ($elems as $elem) {
                                            switch (strlen($elem['id'])) {
                                                case 1:
                                                    $elem['id'] = '000' . $elem['id'];
                                                    break;
                                                case 2:
                                                    $elem['id'] = '00' . $elem['id'];
                                                    break;
                                                case 3:
                                                    $elem['id'] = '0' . $elem['id'];
                                                    break;
                                                default:
                                                    break;
                                            }
                                        ?>

                                            <div class="item no-slider col-xs-12 col-md-6" id="hide-items" onclick="item_click(this, event)">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <div class="stickers-ns">
                                                            <!-- <div class="sticker-ns bestseller">
                                                            <i class="fa fa fa-rocket "></i>
                                                            <span>Лидер продаж!</span>
                                                        </div>
                                                        <div class="sticker-ns popular">
                                                            <i class="fa fa fa-eye "></i>
                                                            <span>Самые просматриваемые</span>
                                                        </div> -->
                                                        </div>
                                                        <a href="#">
                                                            <!-- FIXME '#' Сделать ссылку на элемент -->
                                                            <img src="img/tovaru/<?= $elem['img'] ?>" alt='<?= $elem['name'] ?>' class="img-responsive lazyloaded">
                                                        </a>
                                                    </div>

                                                    <div class="caption">
                                                        <div class="product-name">
                                                            <a href="#"><?= $elem['name'] ?></a>
                                                            <!-- FIXME Сделать ссылку на элемент -->
                                                        </div>
                                                        <div class="product-model"><?= $elem['id'] ?></div>
                                                        <div class="rating">
                                                            <span class="rating-box">
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>

                                                                <span class="quantity-reviews">
                                                                    <!-- FIXME Сделать ссылку на элемент -->
                                                                    <a data-placement="right" data-toggle="tooltip" title="" href="#" data-original-title="отзывов">0</a>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="quantity_plus_minus">
                                                            <div class="quantity_cont">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-quantity-minus" type="button">-</button>
                                                                    </span>
                                                                    <input id="input_quantity_mod_latest_grid06243" class="form-control input-number-quantity6243" name="quantity" size="2" value="1">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-quantity-plus" type="button">+</button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="cart">
                                                                <button class="btn btn-general" type="button" >
                                                                    <i class="fa fa-shopping-basket"></i><span>В корзину</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="actions-quick-order">
                                                            <div class="quick-order">
                                                                <button class="btn btn-fastorder" type="button" data-original-title="Купить в 1 клик">
                                                                    <i class="fa fa-shopping-bag fa-fw"></i> Купить в 1 клик
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="actions-quick-order">
                                                    <div class="quick-order">
                                                        <?php $name = str_replace('"', "", $elem['name']); ?>
                                                        <button class="btn btn-fastorder " type="button" data-original-title="Купить в 1 клик">
                                                            <i class="fa fa-shopping-bag fa-fw"></i> Купить в 1 клик
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        };
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- скрипт звонка -->

    <div class="hide-call mfp-bg mfp-ready hide-zvonok"></div>
    <div class="hide-call mfp-wrap mfp-close-btn-in mfp-auto-cursor mfp-ready hide-zvonok" tabindex="-1" style="overflow: hidden auto;">
        <div class="mfp-container mfp-ajax-holder mfp-s-ready">
            <div class="mfp-content">
                <div id="popup-callback" class="wcb-4">
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
                            minDate: moment(),
                            pickTime: true
                        });
                        $(document).ready(function() {
                            var ContactouterHeight = $('#callbackpro_contacts').outerHeight() - 6;
                            $(function() {
                                $('#callbackpro_contacts').css({
                                    'top': -ContactouterHeight
                                });
                            });
                        });
                    </script>
                    <button title="Close (Esc)" type="button" class="mfp-close" id="close-call">×</button>
                </div>
            </div>
            <div class="mfp-preloader"><img src="catalog/view/theme/newstore/image/ring-alt-3.svg"></div>
        </div>
    </div>

    <script>
        // function get_modal_callbacking() {
        //     $.magnificPopup.open({
        //         tLoading: loading_masked_img,
        //         items: {
        //             src: 'index.php?route=extension/module/callback',
        //             type: 'ajax'
        //         },
        //     });
        // }
    </script>

    <div id="close-yey" class="hider">

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
                            <li><a href="about_us.html">О нас</a></li>
                            <li><a href="delivery.html">Информация о доставке</a></li>
                            <li><a href="terms.html">Условия соглашения</a></li>
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
    <script src="js/move.js"></script>
</body>
</html>