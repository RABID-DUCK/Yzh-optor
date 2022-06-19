<?php 
    require '../constructor/connect.php';
    $dir_img = __DIR__ . './../img/tovaru/';
?>


<!DOCTYPE HTML>
<html dir="ltr" lang="ru">

<!-- Mirrored from Yuzh.Optor.ru/about_us by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jun 2022 11:13:23 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

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
    <link href="../index.html" rel="canonical" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <link href="../catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="preload" as="style" />
    <link href="../catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="../img/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/_50c36ab27da8bb5ead9c87671a74d2a9.css" />
    <script defer src="../js/jquery-3.6.0.min.js"></script>
    <script defer src="../js/ns-cache/_64b8609b55b5e3556b172af674a9b309.js"></script>
    <script defer src="../js/script.js"></script>
    <style>
        .fa {
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
    <link rel="stylesheet" href="../css/ns-cache/_50c36ab27da8bb5ead9c87671a74d2a9.css" />
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
    <script src="../js/ns-cache/_64b8609b55b5e3556b172af674a9b309.js"></script>
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
        var link_checkout = "checkout/index.html";
        var link_newstorecheckout = "cart/index.html?route=checkout/newstorecheckout";
        var color_schem = '3';
        var loading_masked_img = '<img src="../img/catalog/view/theme/newstore/image/ring-alt-' + color_schem + '.svg" />';

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
    <link rel="shortcut icon" href="../img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
</head>

<?php 
 $third_name = mysqli_query($conn, "SELECT `third_name` FROM category");
 $second_name = mysqli_query($conn, "SELECT `second_name` FROM category");
 $first_name = mysqli_query($conn, "SELECT `first_name` FROM category");
?>

<body class="product-category-1">
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

                    <ul id="menu-list" class="dropdown-menu">
                        <li>
                            <a class="dropdown-img" href="javascript:void(0);"></a>
                        </li>
                    <li class="hidden-md hidden-lg">
                        <a class="dropdown-img" href="../delivery.html">Доставка</a>
                    </li>        

                    <?php foreach((array)$third_name as $u_third): ?>
                            <li class="dropdown ">
                                <span class="toggle-child">
                                    <i class="fa fa-plus plus"></i>
                                    <i class="fa fa-minus minus"></i>
                                </span>    
                        <a href="AVTOPRINADLEZhNOSTI" class="parent-link dropdown-img">
                                <i class="fa fa-angle-down arrow"></i><?= $u_third ?></a>          
                        <?php endforeach; ?>

                        <div class="ns-dd dropdown-menu-simple nsmenu-type-category-simple">
                             <div class="dropdown-inner">

                             <?php foreach((array)$second_name as $u_second): ?>
                        <ul class="list-unstyled nsmenu-haschild">
                                <li class="nsmenu-issubchild"><a href="#/avtoaksessuary/">
                                    <i class="fa fa-angle-down arrow"></i> <?= $u_second ?></a>
                                <?php endforeach; ?>

                                <?php foreach((array)$first_name as $u_first): ?>
                                <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                    <li class="">
                                        <a href="#/avtoaksessuary/avto-salfetki/"><?= $u_first ?></a>
                                    </li>   
                                <?php endforeach; ?>      

                            </li>    
                    </li>                              
                </ul>

                    </nav>
                </div>
                <div class="phone_fix col-sm-2 col-md-3 ">
                    <div id="phone">
                        <div class="contact-header">
                            <div class="dropdown-toggle">
                                <div class="additional-tel dth">
                                    <a href="tel:+79268800893" target="_blank">
                                    +7 (926) 880-08-93</a><br>
                                    <a href="tel:+9823048935" target="_blank">
                                    +7 (982) 304-89-35</a>
                                </div>
                                <span class="drop-icon-info"><i class="car-down fa fa-angle-down"></i></span>
                            </div>
                            <ul class="dropdown-menu drop-contacts">
                                <li class="info-contact">
                                    <a href="javascript:void(0)" onclick="get_modal_callbacking()"><i
                                            class="fa fa-phone-square" aria-hidden="true"></i> Заказать звонок</a>
                                </li>
                                <li class="line-contact"></li>
                                <li>
                                    <a target="_blank" href="mailto:Yuzh.Optor@mail.ru">
                                        <div class="icon-image"><img
                                                src="../img/image/cache/catalog/image/znacki/i-20x20.jpg"
                                                alt="Yuzh.Optor@mail.ru"></div>
                                                Yuzh.Optor@mail.ru
                                    </a>
                                </li>
                                <li>
                                    <a href="https://api.whatsapp.com/send/?phone=79268800893" target="_blank">
                                        <div class="icon-image"><i class="fa fa-whatsapp"></i></div>
                                        +7 (926) 880-08-93
                                    </a>
                                    <a href="https://api.whatsapp.com/send/?phone=9823048935" target="_blank">
                                        <div class="icon-image"><i class="fa fa-whatsapp"></i></div>
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
                                    <li><a href="#" onclick="return false;" data-idsearch="0">Везде</a></li>
                                    <li><a href="#" onclick="return false;" data-idsearch="1">АВТОПРИНАДЛЕЖНОСТИ</a>
                                    </li>

                                    <li><a href="#" onclick="return false;" data-idsearch="21">Все для сантехники</a>
                                    </li>

                                    <li><a href="#" onclick="return false;" data-idsearch="64">ЗИМНИЕ ТОВАРЫ</a></li>

                                    <li><a href="#" onclick="return false;" data-idsearch="312">ножницы бытовые</a></li>

                                    <li><a href="#" onclick="return false;" data-idsearch="55">САДОВО-ОГОРОДНЫЙ
                                            ИНВЕНТАРЬ</a></li>

                                    <li><a href="#" onclick="return false;" data-idsearch="68">СРЕДСТВА ИНДИВИДУАЛЬНОЙ
                                            ЗАЩИТЫ</a></li>

                                    <li><a href="#" onclick="return false;" data-idsearch="9">СТРОЙ ИНСТРУМЕНТЫ И
                                            ТОВАРЫ</a></li>

                                    <li><a href="#" onclick="return false;" data-idsearch="6">ХОЗ ТОВАРЫ</a></li>

                                    <li><a href="#" onclick="return false;" data-idsearch="4">ЭЛЕКТРОТОВАРЫ</a></li>

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
                        <a href="../index.html">
                            <img src="../img/LOGO.png" title="Торговая компания Yuzh.Optor"
                                alt="Торговая компания Yuzh.Optor" class="img-responsive" style="filter: invert(1);" />
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
                                                src="../img/image/cache/catalog/image/znacki/i-20x20.jpg"
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
                <div class="box-cart  col-xs-12 col-xs-12 col-sm-4 col-md-2 col-md-push-4 col-sm-push-8">
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
                <div class="box-search  col-xs-12  col-sm-8 col-md-4 col-sm-pull-4 col-md-pull-2 search-top">
                    <div id="searchtop">
                        <div id="search" class="input-group pt20">
                            <input type="text" name="search" value="" placeholder="Поиск товара по каталогу"
                                class="form-control input-lg search-autocomplete" />
                            <div class="input-group-btn categories">
                                <button id="change_category" type="button" class="btn btn-search-select dropdown-toggle"
                                    data-toggle="dropdown">
                                    <span class="category-name">Везде&nbsp;</span>&nbsp;<span
                                        class="fa fa-angle-down fa-fw car-down"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#" onclick="return false;" data-idsearch="0">Везде</a></li>
                                    <li><a href="#" onclick="return false;" data-idsearch="1">АВТОПРИНАДЛЕЖНОСТИ</a>
                                    </li>

                                    <li><a href="#" onclick="return false;" data-idsearch="21">Все для сантехники</a>
                                    </li>

                                    <li><a href="#" onclick="return false;" data-idsearch="64">ЗИМНИЕ ТОВАРЫ</a></li>

                                    <li><a href="#" onclick="return false;" data-idsearch="312">ножницы бытовые</a></li>

                                    <li><a href="#" onclick="return false;" data-idsearch="55">САДОВО-ОГОРОДНЫЙ
                                            ИНВЕНТАРЬ</a></li>

                                    <li><a href="#" onclick="return false;" data-idsearch="68">СРЕДСТВА ИНДИВИДУАЛЬНОЙ
                                            ЗАЩИТЫ</a></li>

                                    <li><a href="#" onclick="return false;" data-idsearch="9">СТРОЙ ИНСТРУМЕНТЫ И
                                            ТОВАРЫ</a>
                                    </li>

                                    <li><a href="#" onclick="return false;" data-idsearch="6">ХОЗ ТОВАРЫ</a></li>

                                    <li><a href="#" onclick="return false;" data-idsearch="4">ЭЛЕКТРОТОВАРЫ</a></li>

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
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 menu-box ">
                    <nav id="menu" class="btn-group btn-block">
                        <button type="button" class="btn btn-menu btn-block dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bars"></i>
                            <span class="text-category">Категории</span>
                        </button>
                        <ul id="menu-list" class="dropdown-menu">

                            <li>
                                <a class="dropdown-img" href="javascript:void(0);">
                                </a>
                            </li>
                            <li class="hidden-md hidden-lg">
                                <a class="dropdown-img" href="../delivery.html">
                                    Доставка </a>
                            </li>
                            <li class="dropdown ">
                                <span class="toggle-child">
                                    <i class="fa fa-plus plus"></i>
                                    <i class="fa fa-minus minus"></i>
                                </span>
                                <a href="avtoprinadlezhnosti/index.html" class="parent-link dropdown-img">
                                    <i class="fa fa-angle-down arrow"></i>
                                    АВТОПРИНАДЛЕЖНОСТИ </a>

                                <div class="ns-dd dropdown-menu-simple nsmenu-type-category-simple">
                                    <div class="dropdown-inner">
                                        <ul class="list-unstyled nsmenu-haschild">
                                            <li class="nsmenu-issubchild">
                                                <a href="avtoprinadlezhnosti/avtoaksessuary/index.html"><i
                                                        class="fa fa-angle-down arrow"></i> Автоаксессуары </a>
                                                <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                    <li class="">
                                                        <a
                                                            href="avtoprinadlezhnosti/avtoaksessuary/avto-salfetki/index.html">
                                                            Авто салфетки </a>
                                                    </li>
                                                    <li class="">
                                                        <a
                                                            href="avtoprinadlezhnosti/avtoaksessuary/zhilet-signalnyy/index.html">
                                                            Жилет сигнальный </a>
                                                    </li>
                                                    <li class="">
                                                        <a
                                                            href="avtoprinadlezhnosti/avtoaksessuary/kanistra/index.html">
                                                            Канистра </a>
                                                    </li>
                                                    <li class="">
                                                        <a
                                                            href="avtoprinadlezhnosti/avtoaksessuary/prikurivatel/index.html">
                                                            Прикуриватель </a>
                                                    </li>
                                                    <li class="">
                                                        <a
                                                            href="avtoprinadlezhnosti/avtoaksessuary/shchetki-skrebki/index.html">
                                                            Щетки-скребки </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nsmenu-issubchild">
                                                <a href="avtoprinadlezhnosti/avtoinstrumenty/index.html"><i
                                                        class="fa fa-angle-down arrow"></i> Автоинструменты </a>
                                                <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                    <li class="">
                                                        <a
                                                            href="avtoprinadlezhnosti/avtoinstrumenty/blok-odnorolnyy-s-kryukom/index.html">
                                                            Блок однорольный с крюком </a>
                                                    </li>
                                                    <li class="">
                                                        <a
                                                            href="avtoprinadlezhnosti/avtoinstrumenty/vorotok/index.html">
                                                            Вороток </a>
                                                    </li>
                                                    <li class="">
                                                        <a
                                                            href="avtoprinadlezhnosti/avtoinstrumenty/klyuch-balonnyy/index.html">
                                                            Ключ балонный </a>
                                                    </li>
                                                    <li class="">
                                                        <a
                                                            href="avtoprinadlezhnosti/avtoinstrumenty/kompressory-/index.html">
                                                            Компрессоры </a>
                                                    </li>
                                                    <li class="">
                                                        <a
                                                            href="avtoprinadlezhnosti/avtoinstrumenty/lebedka/index.html">
                                                            Лебедка </a>
                                                    </li>
                                                    <li class="">
                                                        <a
                                                            href="avtoprinadlezhnosti/avtoinstrumenty/montazhka/index.html">
                                                            Монтажка </a>
                                                    </li>
                                                    <li class="">
                                                        <a
                                                            href="avtoprinadlezhnosti/avtoinstrumenty/nabor-dlya-remonta/index.html">
                                                            Набор для ремонта </a>
                                                    </li>
                                                    <li class="">
                                                        <a
                                                            href="avtoprinadlezhnosti/avtoinstrumenty/styazhka-gruza/index.html">
                                                            Стяжка груза </a>
                                                    </li>
                                                    <li class="">
                                                        <a
                                                            href="avtoprinadlezhnosti/avtoinstrumenty/tal-tsepnaya/index.html">
                                                            Таль Цепная </a>
                                                    </li>
                                                    <li class="">
                                                        <a
                                                            href="avtoprinadlezhnosti/avtoinstrumenty/tross-buksirovochnyy/index.html">
                                                            Тросс буксировочный </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nsmenu-issubchild">
                                                <a href="avtoprinadlezhnosti/avtokhimiya/index.html"><i
                                                        class="fa fa-angle-down arrow"></i> Автохимия </a>
                                                <ul class="list-unstyled nsmenu-ischild nsmenu-ischild-simple">
                                                    <li class="">
                                                        <a
                                                            href="avtoprinadlezhnosti/avtokhimiya/antirzhavchina-smazka/index.html">
                                                            Антиржавчина - Смазка </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="avtoprinadlezhnosti/avtokhimiya/maslo/index.html">
                                                            Масло </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9 hidden-xs hidden-sm clearfix">
                    <nav id="additional-menu" class="navbar hmenu_type">
                        <div>
                            <ul class="nav navbar-nav">
                                <li><a class="no-img-parent-link" href="../delivery.html">
                                        Доставка</a></li>
                                <li><a class="no-img-parent-link" href="../oplata.html">
                                        Оплата</a></li>
                                <li><a class="no-img-parent-link" href="../about_us.html">
                                        О нас</a></li>
                                <li><a class="no-img-parent-link" href="../Kontakct.html">
                                        Контакты</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <script>
            window.addEventListener('DOMContentLoaded', (event) => {
                $(document).ready(function () {
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
                    $(window).resize(function () {
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


                    $(window).scroll(function () {
                        if ($(this).scrollTop() > 200) {
                            $('header .shopping-cart #cart').removeClass('open');
                            $('#top-fixed').addClass('sticky-header-1');
                        } else {
                            $('#top-fixed').removeClass('sticky-header-1');
                        }
                    });
                    $('#top-fixed #menu-list').menuAim({
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


                    $('#top-fixed #search a').bind('click', function () {
                        $("#top-fixed #selected_category").val($(this).attr('data-idsearch'));
                        $('#top-fixed .category-name').html($(this).html());
                    });
                    $('#top-fixed .btn-search').bind('click', function () {
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
        <ul class="breadcrumb " itemscope="" itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="../index.html">
                    <meta itemprop="name" content="Главная">
                    <span><i class="fa fa-home"></i></span>
                </a>
                <meta itemprop="position" content="1">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <link itemprop="item" href="#/">
                <span itemprop="name">АВТОПРИНАДЛЕЖНОСТИ</span>
                <meta itemprop="position" content="2">
            </li>
        </ul>
        <div class="row">
            <div id="content" class="col-sm-12 ns-smv">


                <h1>АВТОПРИНАДЛЕЖНОСТИ</h1>
                <div class="text_refine">Уточнить поиск <i class="fa fa-level-down"></i></div>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail subcategory">
                            <a href="#/avtoaksessuary/">
                                <div>
                                    <img alt="Автоаксессуары" src="../img/image/cache/no_image-120x120.png">
                                </div>
                                <div class="name-wrapper">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <h5>Автоаксессуары</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail subcategory">
                            <a href="#/avtoinstrumenty/">
                                <div>
                                    <img alt="Автоинструменты" src="../img/image/cache/no_image-120x120.png">
                                </div>
                                <div class="name-wrapper">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <h5>Автоинструменты</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail subcategory">
                            <a href="#/avtokhimiya/">
                                <div>
                                    <img alt="Автохимия" src="../img/image/cache/no_image-120x120.png">
                                </div>
                                <div class="name-wrapper">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <h5>Автохимия</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <div>

                

                    <div class="row row-price category-page" style="margin-left: -10px; margin-right: -10px;">
                        <div class="product-layout product-grid grid4 col-lg-1-5 col-md-3 col-sm-6 col-xs-12">
                            <div class="product-thumb">
                                <div class="quickview"><a class="btn btn-quickview"
                                        onclick="quickview_open(1,'1,25,3007,3299,3527,3488,3557,6372,4089,3896,4145,3869,4127,4729,6197');"><i
                                            class="fa fa-external-link fa-fw"></i>Просмотр</a></div>
                                <div class="image">
                                    <div class="stickers-ns">
                                        <div class="sticker-ns popular">
                                            <i class="fa fa fa-eye "></i>
                                            <span>Самые просматриваемые</span>
                                        </div>
                                    </div>

                                    <div class="image-carousel-category owl-carousel owl-theme"
                                        style="opacity: 1; display: block;">
                                        <div class="owl-wrapper-outer">
                                            <div class="owl-wrapper"
                                                style="width: 344px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                                                <div class="owl-item" style="width: 172px;"><a
                                                        href="#/avtoaksessuary/shchetki-skrebki/batareyki-alkalinovye-gp-super-alkaline-lr03-24a-aaa-2sht-na-blistere-"><img
                                                            data-src="../img/image/cache/catalog/2/4/5/2455/2455-228x228.jpg"
                                                            src="../img/image/cache/catalog/2/4/5/2455/2455-228x228.jpg"
                                                            alt="Авто щетка 20см АВ019 (Турция) [36]"
                                                            title="Авто щетка 20см АВ019 (Турция) [36]"
                                                            class="img-responsive lazyloaded"></a></div>
                                            </div>
                                        </div>
                                        <div class="owl-controls clickable" style="display: none;">
                                            <div class="owl-buttons">
                                                <div class="owl-prev">
                                                    <div class="btn btn-carousel-image-additional next-prod"><i
                                                            class="fa fa-angle-left arrow"></i></div>
                                                </div>
                                                <div class="owl-next">
                                                    <div class="btn btn-carousel-image-additional prev-prod"><i
                                                            class="fa fa-angle-right arrow"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="caption">
                                    <div class="product-name"><a
                                            href="#/avtoaksessuary/shchetki-skrebki/batareyki-alkalinovye-gp-super-alkaline-lr03-24a-aaa-2sht-na-blistere-">Авто
                                            щетка 20см АВ019 (Турция) [36]</a></div>
                                    <div class="product-model">2455</div>
                                    <div class="product-description">..</div>

                                    <div id="option_productpage_1" class="option productpage-opt" style="height: 0px;">
                                    </div>

                                    <div class="rating">
                                        <span class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="quantity-reviews"><a data-placement="right"
                                                    data-toggle="tooltip" title=""
                                                    href="#/avtoaksessuary/shchetki-skrebki/batareyki-alkalinovye-gp-super-alkaline-lr03-24a-aaa-2sht-na-blistere-/#tab-review"
                                                    data-original-title="отзывов">0</a></span>
                                        </span>
                                    </div>
                                    <div class="quantity_plus_minus">
                                        <div class="quantity_cont">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-quantity-minus"
                                                        onclick="btnminus_cat_price_page1('1');"
                                                        type="button">-</button>
                                                </span>
                                                <input id="input_quantity_page1"
                                                    class="form-control input-number-quantity1" name="quantity"
                                                    onkeyup="validate_quantity(this,'1')"
                                                    oninput="recalc_quantity(1,1, ,'','.row-price','productpage');"
                                                    size="2" value="1">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-quantity-plus"
                                                        onclick="btnplus_cat_price_page1('1');" type="button">+</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        function btnminus_cat_price_page1(minimum) {
                                            var $input = $('#input_quantity_page1');
                                            var count = parseInt($input.val()) - parseInt(minimum);
                                            count = count < parseInt(1) ? parseInt(1) : count;
                                            $input.val(count);
                                            $input.change();
                                            recalc_quantity(1, count,, '', '.row-price', 'productpage');
                                        }
                                        function btnplus_cat_price_page1(minimum) {
                                            var $input = $('#input_quantity_page1');
                                            var count = parseInt($input.val()) + parseInt(minimum);
                                            $input.val(count);
                                            $input.change();
                                            recalc_quantity(1, count,, '', '.row-price', 'productpage');
                                        };																				
                                    </script>
                                    <div class="actions">
                                        <div class="wishlist"><button class="btn btn-wishlist" type="button"
                                                data-toggle="tooltip" title="" onclick="wishlist.add('1');"
                                                data-original-title="В закладки"><i class="fa fa-heart"></i></button>
                                        </div>
                                        <div class="cart"><button class="btn btn-general" type="button"
                                                onclick="cart.add('1','productpage', get_cart_quantity('1','.row-price'));"><i
                                                    class="fa fa-shopping-basket"></i> <span>В корзину</span></button>
                                        </div>

                                        <div class="compare"><button class="btn btn-compare" type="button"
                                                data-toggle="tooltip" title="" onclick="compare.add('1');"
                                                data-original-title="В сравнение"><i
                                                    class="fa fa-exchange"></i></button></div>
                                        <div class="list-quick-order">
                                            <button class="btn btn-fastorder " type="button" data-toggle="tooltip"
                                                onclick="fastorder_open(1);" title=""
                                                data-original-title="Купить в 1 клик">
                                                <i class="fa fa-shopping-bag fa-fw"></i>
                                                <span class="hidden-xs">Купить в 1 клик</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="actions-quick-order grid-quick-order">
                                        <div class="quick-order">
                                            <button class="btn btn-fastorder " type="button" data-toggle="tooltip"
                                                onclick="fastorder_open(1);" title=""
                                                data-original-title="Купить в 1 клик">
                                                <i class="fa fa-shopping-bag fa-fw"></i>
                                                Купить в 1 клик </button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="product-layout product-grid grid4 col-lg-1-5 col-md-3 col-sm-6 col-xs-12">
                            <div class="product-thumb">
                                <div class="quickview"><a class="btn btn-quickview"
                                        onclick="quickview_open(25,'1,25,3007,3299,3527,3488,3557,6372,4089,3896,4145,3869,4127,4729,6197');"><i
                                            class="fa fa-external-link fa-fw"></i>Просмотр</a></div>
                                <div class="image">
                                    <div class="stickers-ns">
                                        <div class="sticker-ns popular">
                                            <i class="fa fa fa-eye "></i>
                                            <span>Самые просматриваемые</span>
                                        </div>
                                    </div>

                                    <div class="image-carousel-category owl-carousel owl-theme"
                                        style="opacity: 1; display: block;">
                                        <div class="owl-wrapper-outer">
                                            <div class="owl-wrapper"
                                                style="width: 344px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                                                <div class="owl-item" style="width: 172px;"><a
                                                        href="#/avtoaksessuary/shchetki-skrebki/avto-shchetka-17sm-av021turtsiya-%5B36%5D"><img
                                                            data-src="../img/image/cache/catalog/2/4/5/2454/2455-228x228.jpg"
                                                            src="../img/image/cache/catalog/2/4/5/2454/2455-228x228.jpg"
                                                            alt="Авто-щетка 17см АВ021(Турция) [36]"
                                                            title="Авто-щетка 17см АВ021(Турция) [36]"
                                                            class="img-responsive lazyloaded"></a></div>
                                            </div>
                                        </div>
                                        <div class="owl-controls clickable" style="display: none;">
                                            <div class="owl-buttons">
                                                <div class="owl-prev">
                                                    <div class="btn btn-carousel-image-additional next-prod"><i
                                                            class="fa fa-angle-left arrow"></i></div>
                                                </div>
                                                <div class="owl-next">
                                                    <div class="btn btn-carousel-image-additional prev-prod"><i
                                                            class="fa fa-angle-right arrow"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="caption">
                                    <div class="product-name"><a
                                            href="#/avtoaksessuary/shchetki-skrebki/avto-shchetka-17sm-av021turtsiya-%5B36%5D">Авто-щетка
                                            17см АВ021(Турция) [36]</a></div>
                                    <div class="product-model">2454</div>
                                    <div class="product-description">..</div>

                                    <div id="option_productpage_25" class="option productpage-opt" style="height: 0px;">
                                    </div>

                                    <div class="rating">
                                        <span class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="quantity-reviews"><a data-placement="right"
                                                    data-toggle="tooltip" title=""
                                                    href="#/avtoaksessuary/shchetki-skrebki/avto-shchetka-17sm-av021turtsiya-%5B36%5D/#tab-review"
                                                    data-original-title="отзывов">0</a></span>
                                        </span>
                                    </div>
                                    <div class="quantity_plus_minus">
                                        <div class="quantity_cont">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-quantity-minus"
                                                        onclick="btnminus_cat_price_page25('1');"
                                                        type="button">-</button>
                                                </span>
                                                <input id="input_quantity_page25"
                                                    class="form-control input-number-quantity25" name="quantity"
                                                    onkeyup="validate_quantity(this,'1')"
                                                    oninput="recalc_quantity(25,1, ,'','.row-price','productpage');"
                                                    size="2" value="1">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-quantity-plus"
                                                        onclick="btnplus_cat_price_page25('1');"
                                                        type="button">+</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        function btnminus_cat_price_page25(minimum) {
                                            var $input = $('#input_quantity_page25');
                                            var count = parseInt($input.val()) - parseInt(minimum);
                                            count = count < parseInt(1) ? parseInt(1) : count;
                                            $input.val(count);
                                            $input.change();
                                            recalc_quantity(25, count,, '', '.row-price', 'productpage');
                                        }
                                        function btnplus_cat_price_page25(minimum) {
                                            var $input = $('#input_quantity_page25');
                                            var count = parseInt($input.val()) + parseInt(minimum);
                                            $input.val(count);
                                            $input.change();
                                            recalc_quantity(25, count,, '', '.row-price', 'productpage');
                                        };																				
                                    </script>
                                    <div class="actions">
                                        <div class="wishlist"><button class="btn btn-wishlist" type="button"
                                                data-toggle="tooltip" title="" onclick="wishlist.add('25');"
                                                data-original-title="В закладки"><i class="fa fa-heart"></i></button>
                                        </div>
                                        <div class="cart"><button class="btn btn-general" type="button"
                                                onclick="cart.add('25','productpage', get_cart_quantity('25','.row-price'));"><i
                                                    class="fa fa-shopping-basket"></i> <span>В корзину</span></button>
                                        </div>

                                        <div class="compare"><button class="btn btn-compare" type="button"
                                                data-toggle="tooltip" title="" onclick="compare.add('25');"
                                                data-original-title="В сравнение"><i
                                                    class="fa fa-exchange"></i></button></div>
                                        <div class="list-quick-order">
                                            <button class="btn btn-fastorder " type="button" data-toggle="tooltip"
                                                onclick="fastorder_open(25);" title=""
                                                data-original-title="Купить в 1 клик">
                                                <i class="fa fa-shopping-bag fa-fw"></i>
                                                <span class="hidden-xs">Купить в 1 клик</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="actions-quick-order grid-quick-order">
                                        <div class="quick-order">
                                            <button class="btn btn-fastorder " type="button" data-toggle="tooltip"
                                                onclick="fastorder_open(25);" title=""
                                                data-original-title="Купить в 1 клик">
                                                <i class="fa fa-shopping-bag fa-fw"></i>
                                                Купить в 1 клик </button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>




                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <br>
            <div class="category_description psbt">
                <div>АВТОПРИНАДЛЕЖНОСТИ</div>
            </div>
        </div>
    </div>
    </div>

    <script>
        $(window).load(function () {
            if (localStorage.getItem('display') != 'price') {
                $(".additional-image").removeClass('hidden');
                $(".image-carousel-category").owlCarousel({
                    singleItem: true,
                    navigation: true,
                    pagination: false,
                    navigationText: ['<div class="btn btn-carousel-image-additional next-prod"><i class="fa fa-angle-left arrow"></i></div>', '<div class="btn btn-carousel-image-additional prev-prod"><i class="fa fa-angle-right arrow"></i></div>'],
                    transitionStyle: 'fade'
                });
            }
            $('#list-view').click(function (e) {
                $(".additional-image").addClass('hidden');
                e.preventDefault();
                setTimeout(function () {
                    $(".image-carousel-category").each(function () {
                        var items = $(this);
                        for (var i = 0; i < items.length; i++) {
                            if ($(items).data('owlCarousel')) {
                                $(items).data('owlCarousel').destroy();
                            }
                            $(".additional-image").removeClass('hidden');
                            $(items).owlCarousel({
                                navigation: true,
                                singleItem: true,
                                pagination: false,
                                navigationText: ['<div class="btn btn-carousel-image-additional list next-prod"><i class="fa fa-angle-left arrow"></i></div>', '<div class="btn btn-carousel-image-additional prev-prod"><i class="fa fa-angle-right arrow"></i></div>'],
                                transitionStyle: 'fade'
                            });
                        }
                    });
                }, 200);
            });
            $('#grid-view,#grid-view4').click(function (e) {
                $(".additional-image").addClass('hidden');
                e.preventDefault();
                setTimeout(function () {
                    $(".image-carousel-category").each(function () {
                        var items = $(this);
                        for (var i = 0; i < items.length; i++) {
                            if ($(items).data('owlCarousel')) {
                                $(items).data('owlCarousel').destroy();
                            }
                            $(".additional-image").removeClass('hidden');
                            $(items).owlCarousel({
                                navigation: true,
                                pagination: false,
                                navigationText: ['<div class="btn btn-carousel-image-additional list next-prod"><i class="fa fa-angle-left arrow"></i></div>', '<div class="btn btn-carousel-image-additional prev-prod"><i class="fa fa-angle-right arrow"></i></div>'],
                                singleItem: true,
                                transitionStyle: 'fade'
                            });
                        }
                    });
                }, 200);
            });
            $('#price-view').click(function (e) {
                $(".additional-image").addClass('hidden');
                e.preventDefault();
                $(".image-carousel-category").each(function () {
                    var items = $(this);
                    for (var i = 0; i < items.length; i++) {
                        $(items).data('owlCarousel').destroy();
                    }
                });
            });
        });
    </script>
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
                            <li><a href="sitemap/index.html">Карта сайта</a></li>
                            <li><a href="contact-us/index.html">Связаться с нами</a></li>
                            <li><a href="add-return/index.html">Возврат товара</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h3> Личный кабинет</h3>
                        <ul class="list-unstyled">
                            <li><a href="my-account/index.html">Личный кабинет</a></li>
                            <li><a href="order-history/index.html">История заказов</a></li>
                            <li><a href="wishlist/index.html">Мои закладки</a></li>
                            <li><a href="newsletter/index.html">Рассылка новостей</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h3>Наши Контакты</h3>
                        <ul class="list-unstyled">
                            <li><a href="tel:+79268800893" target="_blank"><i class=" fa-width"></i>+7 (926)
                                    880-08-93</a>
                            </li><li><a href="tel:+79823048935" target="_blank"><i class=" fa-width"></i>+7 (982)
                                    304-89-35</a>
                            </li>
                            <li><a target="_blank" href="mailto:Yuzh.Optor@mail.ru"><i class=" fa-width"></i>
                                    Yuzh.Optor@mail.ru</a></li>
                            <li>
                                <a href="https://api.whatsapp.com/send/?phone=79268800893"><i class="fa fa-whatsapp fa-width"></i> +7 (926) 880-08-93</a><br>
                                <a href="https://api.whatsapp.com/send/?phone=79823048935"><i class="fa fa-whatsapp fa-width"></i> +7 (982) 304-89-35</a>
                            </li>
                        </ul>
                        <p>Торговая компания Yuzh.Optor © 2022</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <h3>О нашем магазине</h3>
                        <div class="description_store_footer">
                            <div class="shop-about-description-short" style="outline-color: rgb(0, 156, 240); margin: 0px 0px 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 700; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: Arial, " helvetica="" neue="" ",="" helvetica,="" sans-serif;="" vertical-align:="" baseline;"="">Строительные и
                                хозтовары по самым низким
                                ценам !!!
                            </div>
                            <div class="shop-about-description-full" style="outline-color: rgb(0, 156, 240); margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: Arial, " helvetica="" neue="" ",="" helvetica,="" sans-serif;="" vertical-align:="" baseline;"="">Наша компания
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
    </footer>

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

</body>