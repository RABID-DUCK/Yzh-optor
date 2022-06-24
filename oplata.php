<?php
require 'constructor/connect.php';
$dir_img = __DIR__ . '/img/tovaru/';
?>
<!DOCTYPE html>
<html dir="ltr" lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Информация об оплате | Торговая компания Yzh.Optor</title>
    <base href=".">
    <meta name="description" content="Информация об оплате торговой компании Yzh.Optor">
    <meta name="keywords" content="Информация об оплате | Торговая компания Yzh.Optor">
    <meta property="og:title" content="Информация об оплате | Торговая компания Yzh.Optor">
    <meta property="og:type" content="website">
    <meta property="og:url" content="oplata">
    <meta property="og:image" content="img/LOGO.png">
    <meta property="og:site_name" content="Торговая компания Yzh.Optor">
    <link href="img/image/catalog/favicon(1).png" rel="icon">
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
            src: url('catalog/view/theme/newstore/font-awesome/fonts/fontawesome-webfont.eot?v=4.7.0');
            src: url('catalog/view/theme/newstore/font-awesome/fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('catalog/view/theme/newstore/font-awesome/fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('catalog/view/theme/newstore/font-awesome/fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'), url('catalog/view/theme/newstore/font-awesome/fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('catalog/view/theme/newstore/font-awesome/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
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
    <link rel="stylesheet"
          href="./Информация об оплате _ Торговая компания Yzh.Optor_files/_50c36ab27da8bb5ead9c87671a74d2a9.css">
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
    <script async="" src="./Информация об оплате _ Торговая компания Yzh.Optor_files/tag.js.Без названия"></script>
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
    <script src="./Информация об оплате _ Торговая компания Yzh.Optor_files/_19c1abe7ff4dbe82c1949dc4febe3529.js.Без названия"></script>
    <style type="text/css"></style>
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
        var text_showmore = 'Показать еще';
        var color_schem = '3';
        var loading_masked_img = '<img src="catalog/view/theme/newstore/image/ring-alt-' + color_schem + '.svg" />';

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
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(80874508, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true,
            ecommerce: "dataLayer"
        });
    </script>
    <noscript>
        <div><img src="#" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    <style>.htop-b-pc img {
        margin: 0 auto;
    }</style>
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
    <style type="text/css">/* Themes */
    .theme--light.v-card {
        background-color: #fff;
        border-color: #fff;
        color: rgba(0, 0, 0, 0.87);
    }

    .theme--dark.v-card {
        background-color: #424242;
        border-color: #424242;
        color: #fff;
    }

    .v-card {
        box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
        text-decoration: none;
    }

    .v-card > *:first-child:not(.v-btn):not(.v-chip) {
        border-top-left-radius: inherit;
        border-top-right-radius: inherit;
    }

    .v-card > *:last-child:not(.v-btn):not(.v-chip) {
        border-bottom-left-radius: inherit;
        border-bottom-right-radius: inherit;
    }

    .v-card--flat {
        box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.2), 0px 0px 0px 0px rgba(0, 0, 0, 0.14), 0px 0px 0px 0px rgba(0, 0, 0, 0.12);
    }

    .v-card--hover {
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        transition-property: box-shadow;
    }

    .v-card--hover:hover {
        box-shadow: 0px 5px 5px -3px rgba(0, 0, 0, 0.2), 0px 8px 10px 1px rgba(0, 0, 0, 0.14), 0px 3px 14px 2px rgba(0, 0, 0, 0.12);
    }

    .v-card__title {
        align-items: center;
        display: flex;
        flex-wrap: wrap;
        padding: 16px;
    }

    .v-card__title--primary {
        padding-top: 24px;
    }

    .v-card__text {
        padding: 16px;
        width: 100%;
    }

    .v-card__actions {
        align-items: center;
        display: flex;
        padding: 8px;
    }

    .v-card__actions > *,
    .v-card__actions .v-btn {
        margin: 0;
    }

    .v-card__actions .v-btn + .v-btn {
        margin-left: 8px;
    }
    </style>
    <style type="text/css">/* Themes */
    .theme--light.v-sheet {
        background-color: #fff;
        border-color: #fff;
        color: rgba(0, 0, 0, 0.87);
    }

    .theme--dark.v-sheet {
        background-color: #424242;
        border-color: #424242;
        color: #fff;
    }

    .v-sheet {
        display: block;
        border-radius: 2px;
        position: relative;
        transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
    }

    .v-sheet--tile {
        border-radius: 0;
    }
    </style>
    <style type="text/css">.v-autocomplete.v-input > .v-input__control > .v-input__slot {
        cursor: text;
    }

    .v-autocomplete input {
        align-self: center;
    }

    .v-autocomplete--is-selecting-index input {
        opacity: 0;
    }

    .v-autocomplete.v-text-field--enclosed:not(.v-text-field--solo):not(.v-text-field--single-line) .v-select__slot > input {
        margin-top: 24px;
    }

    .v-autocomplete:not(.v-input--is-disabled).v-select.v-text-field input {
        pointer-events: inherit;
    }

    .v-autocomplete__content.v-menu__content {
        border-radius: 0;
    }

    .v-autocomplete__content.v-menu__content .v-card {
        border-radius: 0;
    }
    </style>
    <style type="text/css">.theme--light.v-text-field > .v-input__control > .v-input__slot:before {
        border-color: rgba(0, 0, 0, 0.42);
    }

    .theme--light.v-text-field:not(.v-input--has-state) > .v-input__control > .v-input__slot:hover:before {
        border-color: rgba(0, 0, 0, 0.87);
    }

    .theme--light.v-text-field.v-input--is-disabled > .v-input__control > .v-input__slot:before {
        border-image: repeating-linear-gradient(to right, rgba(0, 0, 0, 0.38) 0px, rgba(0, 0, 0, 0.38) 2px, transparent 2px, transparent 4px) 1 repeat;
    }

    .theme--light.v-text-field.v-input--is-disabled > .v-input__control > .v-input__slot:before .v-text-field__prefix,
    .theme--light.v-text-field.v-input--is-disabled > .v-input__control > .v-input__slot:before .v-text-field__suffix {
        color: rgba(0, 0, 0, 0.38);
    }

    .theme--light.v-text-field__prefix,
    .theme--light.v-text-field__suffix {
        color: rgba(0, 0, 0, 0.54);
    }

    .theme--light.v-text-field--solo > .v-input__control > .v-input__slot {
        border-radius: 2px;
        background: #fff;
    }

    .theme--light.v-text-field--solo-inverted.v-text-field--solo > .v-input__control > .v-input__slot {
        background: rgba(0, 0, 0, 0.16);
    }

    .theme--light.v-text-field--solo-inverted.v-text-field--solo.v-input--is-focused > .v-input__control > .v-input__slot {
        background: #424242;
    }

    .theme--light.v-text-field--solo-inverted.v-text-field--solo.v-input--is-focused > .v-input__control > .v-input__slot .v-label,
    .theme--light.v-text-field--solo-inverted.v-text-field--solo.v-input--is-focused > .v-input__control > .v-input__slot input {
        color: #fff;
    }

    .theme--light.v-text-field--box > .v-input__control > .v-input__slot {
        background: rgba(0, 0, 0, 0.06);
    }

    .theme--light.v-text-field--box .v-text-field__prefix {
        max-height: 32px;
        margin-top: 22px;
    }

    .theme--light.v-text-field--box.v-input--is-dirty .v-text-field__prefix,
    .theme--light.v-text-field--box.v-input--is-focused .v-text-field__prefix,
    .theme--light.v-text-field--box.v-text-field--placeholder .v-text-field__prefix {
        margin-top: 22px;
        transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
    }

    .theme--light.v-text-field--box:not(.v-input--is-focused) > .v-input__control > .v-input__slot:hover {
        background: rgba(0, 0, 0, 0.12);
    }

    .theme--light.v-text-field--outline > .v-input__control > .v-input__slot {
        border: 2px solid rgba(0, 0, 0, 0.54);
    }

    .theme--light.v-text-field--outline:not(.v-input--is-focused):not(.v-input--has-state) > .v-input__control > .v-input__slot:hover {
        border: 2px solid rgba(0, 0, 0, 0.87);
    }

    .theme--dark.v-text-field > .v-input__control > .v-input__slot:before {
        border-color: rgba(255, 255, 255, 0.7);
    }

    .theme--dark.v-text-field:not(.v-input--has-state) > .v-input__control > .v-input__slot:hover:before {
        border-color: #fff;
    }

    .theme--dark.v-text-field.v-input--is-disabled > .v-input__control > .v-input__slot:before {
        border-image: repeating-linear-gradient(to right, rgba(255, 255, 255, 0.5) 0px, rgba(255, 255, 255, 0.5) 2px, transparent 2px, transparent 4px) 1 repeat;
    }

    .theme--dark.v-text-field.v-input--is-disabled > .v-input__control > .v-input__slot:before .v-text-field__prefix,
    .theme--dark.v-text-field.v-input--is-disabled > .v-input__control > .v-input__slot:before .v-text-field__suffix {
        color: rgba(255, 255, 255, 0.5);
    }

    .theme--dark.v-text-field__prefix,
    .theme--dark.v-text-field__suffix {
        color: rgba(255, 255, 255, 0.7);
    }

    .theme--dark.v-text-field--solo > .v-input__control > .v-input__slot {
        border-radius: 2px;
        background: #424242;
    }

    .theme--dark.v-text-field--solo-inverted.v-text-field--solo > .v-input__control > .v-input__slot {
        background: rgba(255, 255, 255, 0.16);
    }

    .theme--dark.v-text-field--solo-inverted.v-text-field--solo.v-input--is-focused > .v-input__control > .v-input__slot {
        background: #fff;
    }

    .theme--dark.v-text-field--solo-inverted.v-text-field--solo.v-input--is-focused > .v-input__control > .v-input__slot .v-label,
    .theme--dark.v-text-field--solo-inverted.v-text-field--solo.v-input--is-focused > .v-input__control > .v-input__slot input {
        color: rgba(0, 0, 0, 0.87);
    }

    .theme--dark.v-text-field--box > .v-input__control > .v-input__slot {
        background: rgba(0, 0, 0, 0.1);
    }

    .theme--dark.v-text-field--box .v-text-field__prefix {
        max-height: 32px;
        margin-top: 22px;
    }

    .theme--dark.v-text-field--box.v-input--is-dirty .v-text-field__prefix,
    .theme--dark.v-text-field--box.v-input--is-focused .v-text-field__prefix,
    .theme--dark.v-text-field--box.v-text-field--placeholder .v-text-field__prefix {
        margin-top: 22px;
        transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
    }

    .theme--dark.v-text-field--box:not(.v-input--is-focused) > .v-input__control > .v-input__slot:hover {
        background: rgba(0, 0, 0, 0.2);
    }

    .theme--dark.v-text-field--outline > .v-input__control > .v-input__slot {
        border: 2px solid rgba(255, 255, 255, 0.7);
    }

    .theme--dark.v-text-field--outline:not(.v-input--is-focused):not(.v-input--has-state) > .v-input__control > .v-input__slot:hover {
        border: 2px solid #fff;
    }

    .application--is-rtl .v-text-field .v-label {
        transform-origin: top right;
    }

    .application--is-rtl .v-text-field .v-counter {
        margin-left: 0;
        margin-right: 8px;
    }

    .application--is-rtl .v-text-field--enclosed .v-input__append-outer {
        margin-left: 0;
        margin-right: 16px;
    }

    .application--is-rtl .v-text-field--enclosed .v-input__prepend-outer {
        margin-left: 16px;
        margin-right: 0;
    }

    .application--is-rtl .v-text-field--reverse input {
        text-align: left;
    }

    .application--is-rtl .v-text-field--reverse .v-label {
        transform-origin: top left;
    }

    .application--is-rtl .v-text-field__prefix {
        text-align: left;
        padding-right: 0;
        padding-left: 4px;
    }

    .application--is-rtl .v-text-field__suffix {
        padding-left: 0;
        padding-right: 4px;
    }

    .application--is-rtl .v-text-field--reverse .v-text-field__prefix {
        text-align: right;
        padding-left: 0;
        padding-right: 4px;
    }

    .application--is-rtl .v-text-field--reverse .v-text-field__suffix {
        padding-left: 0;
        padding-right: 4px;
    }

    .v-text-field {
        padding-top: 12px;
        margin-top: 4px;
    }

    .v-text-field input {
        flex: 1 1 auto;
        line-height: 20px;
        padding: 8px 0 8px;
        max-width: 100%;
        min-width: 0px;
        width: 100%;
    }

    .v-text-field .v-input__prepend-inner,
    .v-text-field .v-input__append-inner {
        align-self: flex-start;
        display: inline-flex;
        margin-top: 4px;
        line-height: 1;
        user-select: none;
    }

    .v-text-field .v-input__prepend-inner {
        margin-right: auto;
        padding-right: 4px;
    }

    .v-text-field .v-input__append-inner {
        margin-left: auto;
        padding-left: 4px;
    }

    .v-text-field .v-counter {
        margin-left: 8px;
        white-space: nowrap;
    }

    .v-text-field .v-label {
        max-width: 90%;
        overflow: hidden;
        text-overflow: ellipsis;
        top: 6px;
        transform-origin: top left;
        white-space: nowrap;
        pointer-events: none;
    }

    .v-text-field .v-label--active {
        max-width: 133%;
        transform: translateY(-18px) scale(0.75);
    }

    .v-text-field > .v-input__control > .v-input__slot {
        cursor: text;
        transition: background 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
    }

    .v-text-field > .v-input__control > .v-input__slot:before,
    .v-text-field > .v-input__control > .v-input__slot:after {
        bottom: -1px;
        content: '';
        left: 0;
        position: absolute;
        transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
        width: 100%;
    }

    .v-text-field > .v-input__control > .v-input__slot:before {
        border-style: solid;
        border-width: thin 0 0 0;
    }

    .v-text-field > .v-input__control > .v-input__slot:after {
        border-color: currentColor;
        border-style: solid;
        border-width: thin 0 thin 0;
        transform: scaleX(0);
    }

    .v-text-field__details {
        display: flex;
        flex: 1 0 auto;
        max-width: 100%;
        overflow: hidden;
    }

    .v-text-field__prefix,
    .v-text-field__suffix {
        align-self: center;
        cursor: default;
    }

    .v-text-field__prefix {
        text-align: right;
        padding-right: 4px;
    }

    .v-text-field__suffix {
        padding-left: 4px;
        white-space: nowrap;
    }

    .v-text-field--reverse .v-text-field__prefix {
        text-align: left;
        padding-right: 0;
        padding-left: 4px;
    }

    .v-text-field--reverse .v-text-field__suffix {
        padding-left: 0;
        padding-right: 4px;
    }

    .v-text-field > .v-input__control > .v-input__slot > .v-text-field__slot {
        display: flex;
        flex: 1 1 auto;
        position: relative;
    }

    .v-text-field--box,
    .v-text-field--full-width,
    .v-text-field--outline {
        position: relative;
    }

    .v-text-field--box > .v-input__control > .v-input__slot,
    .v-text-field--full-width > .v-input__control > .v-input__slot,
    .v-text-field--outline > .v-input__control > .v-input__slot {
        align-items: stretch;
        min-height: 56px;
    }

    .v-text-field--box input,
    .v-text-field--full-width input,
    .v-text-field--outline input {
        margin-top: 22px;
    }

    .v-text-field--box.v-text-field--single-line input,
    .v-text-field--full-width.v-text-field--single-line input,
    .v-text-field--outline.v-text-field--single-line input {
        margin-top: 12px;
    }

    .v-text-field--box .v-label,
    .v-text-field--full-width .v-label,
    .v-text-field--outline .v-label {
        top: 18px;
    }

    .v-text-field--box .v-label--active,
    .v-text-field--full-width .v-label--active,
    .v-text-field--outline .v-label--active {
        transform: translateY(-6px) scale(0.75);
    }

    .v-text-field--box > .v-input__control > .v-input__slot {
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
    }

    .v-text-field--box > .v-input__control > .v-input__slot:before {
        border-style: solid;
        border-width: thin 0 thin 0;
    }

    .v-text-field.v-text-field--enclosed {
        margin: 0;
        padding: 0;
    }

    .v-text-field.v-text-field--enclosed:not(.v-text-field--box) .v-progress-linear__background {
        display: none;
    }

    .v-text-field.v-text-field--enclosed .v-input__prepend-outer,
    .v-text-field.v-text-field--enclosed .v-input__prepend-inner,
    .v-text-field.v-text-field--enclosed .v-input__append-inner,
    .v-text-field.v-text-field--enclosed .v-input__append-outer {
        margin-top: 16px;
    }

    .v-text-field.v-text-field--enclosed .v-text-field__details,
    .v-text-field.v-text-field--enclosed > .v-input__control > .v-input__slot {
        padding: 0 12px;
    }

    .v-text-field.v-text-field--enclosed .v-text-field__details {
        margin-bottom: 8px;
    }

    .v-text-field--reverse input {
        text-align: right;
    }

    .v-text-field--reverse .v-label {
        transform-origin: top right;
    }

    .v-text-field--reverse > .v-input__control > .v-input__slot,
    .v-text-field--reverse .v-text-field__slot {
        flex-direction: row-reverse;
    }

    .v-text-field--solo > .v-input__control > .v-input__slot:before,
    .v-text-field--outline > .v-input__control > .v-input__slot:before,
    .v-text-field--full-width > .v-input__control > .v-input__slot:before,
    .v-text-field--solo > .v-input__control > .v-input__slot:after,
    .v-text-field--outline > .v-input__control > .v-input__slot:after,
    .v-text-field--full-width > .v-input__control > .v-input__slot:after {
        display: none;
    }

    .v-text-field--outline {
        margin-bottom: 16px;
        transition: border 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
    }

    .v-text-field--outline > .v-input__control > .v-input__slot {
        background: transparent !important;
        border-radius: 4px;
    }

    .v-text-field--outline .v-text-field__prefix {
        margin-top: 22px;
        max-height: 32px;
    }

    .v-text-field--outline .v-input__prepend-outer,
    .v-text-field--outline .v-input__append-outer {
        margin-top: 18px;
    }

    .v-text-field--outline.v-input--is-dirty .v-text-field__prefix,
    .v-text-field--outline.v-input--is-focused .v-text-field__prefix,
    .v-text-field--outline.v-text-field--placeholder .v-text-field__prefix {
        margin-top: 22px;
        transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
    }

    .v-text-field--outline.v-input--is-focused > .v-input__control > .v-input__slot,
    .v-text-field--outline.v-input--has-state > .v-input__control > .v-input__slot {
        border: 2px solid currentColor;
        transition: border 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
    }

    .v-text-field.v-text-field--solo .v-label {
        top: calc(50% - 10px);
    }

    .v-text-field.v-text-field--solo .v-input__control {
        min-height: 48px;
        padding: 0;
    }

    .v-text-field.v-text-field--solo:not(.v-text-field--solo-flat) > .v-input__control > .v-input__slot {
        box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
    }

    .v-text-field.v-text-field--solo .v-text-field__slot {
        align-items: center;
    }

    .v-text-field.v-text-field--solo .v-input__append-inner,
    .v-text-field.v-text-field--solo .v-input__prepend-inner {
        align-self: center;
        margin-top: 0;
    }

    .v-text-field.v-text-field--solo .v-input__prepend-outer,
    .v-text-field.v-text-field--solo .v-input__append-outer {
        margin-top: 12px;
    }

    .v-text-field.v-input--is-focused > .v-input__control > .v-input__slot:after {
        transform: scaleX(1);
    }

    .v-text-field.v-input--has-state > .v-input__control > .v-input__slot:before {
        border-color: currentColor;
    }
    </style>
    <style type="text/css">.theme--light.v-select .v-select__selections {
        color: rgba(0, 0, 0, 0.87);
    }

    .theme--light.v-select.v-input--is-disabled .v-select__selections {
        color: rgba(0, 0, 0, 0.38);
    }

    .theme--light.v-select .v-chip--disabled,
    .theme--light.v-select .v-select__selection--disabled {
        color: rgba(0, 0, 0, 0.38);
    }

    .theme--light.v-select.v-text-field--solo-inverted.v-input--is-focused .v-select__selections {
        color: #fff;
    }

    .theme--dark.v-select .v-select__selections {
        color: #fff;
    }

    .theme--dark.v-select.v-input--is-disabled .v-select__selections {
        color: rgba(255, 255, 255, 0.5);
    }

    .theme--dark.v-select .v-chip--disabled,
    .theme--dark.v-select .v-select__selection--disabled {
        color: rgba(255, 255, 255, 0.5);
    }

    .theme--dark.v-select.v-text-field--solo-inverted.v-input--is-focused .v-select__selections {
        color: rgba(0, 0, 0, 0.87);
    }

    .v-select {
        position: relative;
    }

    .v-select > .v-input__control > .v-input__slot {
        cursor: pointer;
    }

    .v-select .v-chip {
        flex: 0 1 auto;
    }

    .v-select .fade-transition-leave-active {
        position: absolute;
        left: 0;
    }

    .v-select.v-input--is-dirty ::placeholder {
        color: transparent !important;
    }

    .v-select:not(.v-input--is-dirty):not(.v-input--is-focused) .v-text-field__prefix {
        line-height: 20px;
        position: absolute;
        top: 7px;
        transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
    }

    .v-select.v-text-field--enclosed:not(.v-text-field--single-line) .v-select__selections {
        padding-top: 24px;
    }

    .v-select.v-text-field input {
        flex: 1 1;
        margin-top: 0;
        min-width: 0;
        pointer-events: none;
        position: relative;
    }

    .v-select.v-select--is-menu-active .v-input__icon--append .v-icon {
        transform: rotate(180deg);
    }

    .v-select.v-select--chips input {
        margin: 0;
    }

    .v-select.v-select--chips .v-select__selections {
        min-height: 42px;
    }

    .v-select.v-select--chips.v-select--chips--small .v-select__selections {
        min-height: 32px;
    }

    .v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--box .v-select__selections,
    .v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--enclosed .v-select__selections {
        min-height: 68px;
    }

    .v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--box.v-select--chips--small .v-select__selections,
    .v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--enclosed.v-select--chips--small .v-select__selections {
        min-height: 56px;
    }

    .v-select.v-text-field--reverse .v-select__slot,
    .v-select.v-text-field--reverse .v-select__selections {
        flex-direction: row-reverse;
    }

    .v-select__selections {
        align-items: center;
        display: flex;
        flex: 1 1 auto;
        flex-wrap: wrap;
        line-height: 18px;
    }

    .v-select__selection {
        max-width: 90%;
    }

    .v-select__selection--comma {
        align-items: center;
        display: inline-flex;
        margin: 7px 4px 7px 0;
    }

    .v-select__slot {
        position: relative;
        align-items: center;
        display: flex;
        width: 100%;
    }

    .v-select:not(.v-text-field--single-line) .v-select__slot > input {
        align-self: flex-end;
    }
    </style>
    <style type="text/css">.theme--light.v-chip {
        background: #e0e0e0;
        color: rgba(0, 0, 0, 0.87);
    }

    .theme--light.v-chip--disabled {
        color: rgba(0, 0, 0, 0.38);
    }

    .theme--dark.v-chip {
        background: #555;
        color: #fff;
    }

    .theme--dark.v-chip--disabled {
        color: rgba(255, 255, 255, 0.5);
    }

    .application--is-rtl .v-chip__close {
        margin: 0 8px 0 2px;
    }

    .application--is-rtl .v-chip--removable .v-chip__content {
        padding: 0 12px 0 4px;
    }

    .application--is-rtl .v-chip--select-multi {
        margin: 4px 0 4px 4px;
    }

    .application--is-rtl .v-chip .v-avatar {
        margin-right: -12px;
        margin-left: 8px;
    }

    .application--is-rtl .v-chip .v-icon--right {
        margin-right: 12px;
        margin-left: -8px;
    }

    .application--is-rtl .v-chip .v-icon--left {
        margin-right: -8px;
        margin-left: 12px;
    }

    .v-chip {
        align-items: center;
        border-radius: 28px;
        display: inline-flex;
        font-size: 13px;
        margin: 4px;
        outline: none;
        position: relative;
        transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
        vertical-align: middle;
    }

    .v-chip .v-chip__content {
        align-items: center;
        border-radius: 28px;
        cursor: default;
        display: inline-flex;
        height: 32px;
        justify-content: space-between;
        padding: 0 12px;
        vertical-align: middle;
        white-space: nowrap;
        z-index: 1;
    }

    .v-chip--removable .v-chip__content {
        padding: 0 4px 0 12px;
    }

    .v-chip .v-avatar {
        height: 32px !important;
        margin-left: -12px;
        margin-right: 8px;
        min-width: 32px;
        width: 32px !important;
    }

    .v-chip .v-avatar img {
        height: 100%;
        width: 100%;
    }

    .v-chip:focus:not(.v-chip--disabled),
    .v-chip--active,
    .v-chip--selected {
        border-color: rgba(0, 0, 0, 0.13);
        box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
    }

    .v-chip:focus:not(.v-chip--disabled):after,
    .v-chip--active:after,
    .v-chip--selected:after {
        background: currentColor;
        border-radius: inherit;
        content: '';
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        transition: inherit;
        width: 100%;
        pointer-events: none;
        opacity: 0.13;
    }

    .v-chip--label {
        border-radius: 2px;
    }

    .v-chip--label .v-chip__content {
        border-radius: 2px;
    }

    .v-chip.v-chip.v-chip--outline {
        background: transparent !important;
        border: 1px solid currentColor;
        color: #9e9e9e;
        height: 32px;
    }

    .v-chip.v-chip.v-chip--outline .v-avatar {
        margin-left: -13px;
    }

    .v-chip--small {
        height: 24px !important;
    }

    .v-chip--small .v-avatar {
        height: 24px !important;
        min-width: 24px;
        width: 24px !important;
    }

    .v-chip--small .v-icon {
        font-size: 20px;
    }

    .v-chip__close {
        align-items: center;
        color: inherit;
        display: flex;
        font-size: 20px;
        margin: 0 2px 0 8px;
        text-decoration: none;
        user-select: none;
    }

    .v-chip__close > .v-icon {
        color: inherit !important;
        font-size: 20px;
        cursor: pointer;
        opacity: 0.5;
    }

    .v-chip__close > .v-icon:hover {
        opacity: 1;
    }

    .v-chip--disabled .v-chip__close {
        pointer-events: none;
    }

    .v-chip--select-multi {
        margin: 4px 4px 4px 0;
    }

    .v-chip .v-icon {
        color: inherit;
    }

    .v-chip .v-icon--right {
        margin-left: 12px;
        margin-right: -8px;
    }

    .v-chip .v-icon--left {
        margin-left: -8px;
        margin-right: 12px;
    }
    </style>
    <style type="text/css">/* Themes */
    .theme--light.v-icon {
        color: rgba(0, 0, 0, 0.54);
    }

    .theme--light.v-icon.v-icon--disabled {
        color: rgba(0, 0, 0, 0.38) !important;
    }

    .theme--dark.v-icon {
        color: #fff;
    }

    .theme--dark.v-icon.v-icon--disabled {
        color: rgba(255, 255, 255, 0.5) !important;
    }

    .v-icon {
        align-items: center;
        display: inline-flex;
        font-feature-settings: 'liga';
        font-size: 24px;
        justify-content: center;
        line-height: 1;
        transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
        vertical-align: text-bottom;
    }

    .v-icon--right {
        margin-left: 16px;
    }

    .v-icon--left {
        margin-right: 16px;
    }

    .v-icon.v-icon.v-icon--link {
        cursor: pointer;
    }

    .v-icon--disabled {
        pointer-events: none;
        opacity: 0.6;
    }

    .v-icon--is-component {
        height: 24px;
    }
    </style>
    <style type="text/css">.v-menu {
        display: block;
        vertical-align: middle;
    }

    .v-menu--inline {
        display: inline-block;
    }

    .v-menu__activator {
        align-items: center;
        cursor: pointer;
        display: flex;
    }

    .v-menu__activator * {
        cursor: pointer;
    }

    .v-menu__content {
        position: absolute;
        display: inline-block;
        border-radius: 2px;
        max-width: 80%;
        overflow-y: auto;
        overflow-x: hidden;
        contain: content;
        will-change: transform;
        box-shadow: 0px 5px 5px -3px rgba(0, 0, 0, 0.2), 0px 8px 10px 1px rgba(0, 0, 0, 0.14), 0px 3px 14px 2px rgba(0, 0, 0, 0.12);
    }

    .v-menu__content--active {
        pointer-events: none;
    }

    .v-menu__content--fixed {
        position: fixed;
    }

    .v-menu__content > .card {
        contain: content;
        backface-visibility: hidden;
    }

    .v-menu > .v-menu__content {
        max-width: none;
    }

    .v-menu-transition-enter .v-list__tile {
        min-width: 0;
        pointer-events: none;
    }

    .v-menu-transition-enter-to .v-list__tile {
        pointer-events: auto;
        transition-delay: 0.1s;
    }

    .v-menu-transition-leave-active,
    .v-menu-transition-leave-to {
        pointer-events: none;
    }

    .v-menu-transition-enter,
    .v-menu-transition-leave-to {
        opacity: 0;
    }

    .v-menu-transition-enter-active,
    .v-menu-transition-leave-active {
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .v-menu-transition-enter.v-menu__content--auto {
        transition: none !important;
    }

    .v-menu-transition-enter.v-menu__content--auto .v-list__tile {
        opacity: 0;
        transform: translateY(-15px);
    }

    .v-menu-transition-enter.v-menu__content--auto .v-list__tile--active {
        opacity: 1;
        transform: none !important;
        pointer-events: auto;
    }
    </style>
    <style type="text/css">/** Theme */
    .theme--light.v-input--selection-controls.v-input--is-disabled .v-icon {
        color: rgba(0, 0, 0, 0.26) !important;
    }

    .theme--dark.v-input--selection-controls.v-input--is-disabled .v-icon {
        color: rgba(255, 255, 255, 0.3) !important;
    }

    .application--is-rtl .v-input--selection-controls .v-input--selection-controls__input {
        margin-right: 0;
        margin-left: 8px;
    }

    .v-input--selection-controls {
        margin-top: 16px;
        padding-top: 4px;
    }

    .v-input--selection-controls .v-input__append-outer,
    .v-input--selection-controls .v-input__prepend-outer {
        margin-top: 0;
        margin-bottom: 0;
    }

    .v-input--selection-controls .v-input__control {
        flex-grow: 0;
        width: auto;
    }

    .v-input--selection-controls:not(.v-input--hide-details) .v-input__slot {
        margin-bottom: 12px;
    }

    .v-input--selection-controls__input {
        color: inherit;
        display: inline-flex;
        flex: 0 0 auto;
        height: 24px;
        position: relative;
        margin-right: 8px;
        transition: 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        transition-property: color, transform;
        width: 24px;
        user-select: none;
    }

    .v-input--selection-controls__input input {
        position: absolute;
        opacity: 0;
        width: 100%;
        height: 100%;
        cursor: pointer;
        user-select: none;
    }

    .v-input--selection-controls__input + .v-label {
        cursor: pointer;
        user-select: none;
    }

    .v-input--selection-controls__ripple {
        border-radius: 50%;
        cursor: pointer;
        height: 34px;
        position: absolute;
        transition: inherit;
        width: 34px;
        left: -12px;
        top: calc(50% - 24px);
        margin: 7px;
    }

    .v-input--selection-controls__ripple:before {
        border-radius: inherit;
        bottom: 0;
        content: '';
        position: absolute;
        opacity: 0.2;
        left: 0;
        right: 0;
        top: 0;
        transform-origin: center center;
        transform: scale(0.2);
        transition: inherit;
    }

    .v-input--selection-controls__ripple .v-ripple__container {
        transform: scale(1.4);
    }

    .v-input--selection-controls.v-input .v-label {
        align-items: center;
        display: inline-flex;
        top: 0;
        height: auto;
    }

    .v-input--selection-controls.v-input--is-focused .v-input--selection-controls__ripple:before,
    .v-input--selection-controls .v-radio--is-focused .v-input--selection-controls__ripple:before {
        background: currentColor;
        transform: scale(0.8);
    }
    </style>
    <style type="text/css">/* Theme */
    .theme--light.v-input:not(.v-input--is-disabled) input,
    .theme--light.v-input:not(.v-input--is-disabled) textarea {
        color: rgba(0, 0, 0, 0.87);
    }

    .theme--light.v-input input::placeholder,
    .theme--light.v-input textarea::placeholder {
        color: rgba(0, 0, 0, 0.38);
    }

    .theme--light.v-input--is-disabled .v-label,
    .theme--light.v-input--is-disabled input,
    .theme--light.v-input--is-disabled textarea {
        color: rgba(0, 0, 0, 0.38);
    }

    .theme--dark.v-input:not(.v-input--is-disabled) input,
    .theme--dark.v-input:not(.v-input--is-disabled) textarea {
        color: #fff;
    }

    .theme--dark.v-input input::placeholder,
    .theme--dark.v-input textarea::placeholder {
        color: rgba(255, 255, 255, 0.5);
    }

    .theme--dark.v-input--is-disabled .v-label,
    .theme--dark.v-input--is-disabled input,
    .theme--dark.v-input--is-disabled textarea {
        color: rgba(255, 255, 255, 0.5);
    }

    .v-input {
        align-items: flex-start;
        display: flex;
        flex: 1 1 auto;
        font-size: 16px;
        text-align: left;
    }

    .v-input .v-progress-linear {
        top: calc(100% - 1px);
        left: 0;
        margin: 0;
        position: absolute;
    }

    .v-input input {
        max-height: 32px;
    }

    .v-input input:invalid,
    .v-input textarea:invalid {
        box-shadow: none;
    }

    .v-input input:focus,
    .v-input textarea:focus,
    .v-input input:active,
    .v-input textarea:active {
        outline: none;
    }

    .v-input .v-label {
        height: 20px;
        line-height: 20px;
    }

    .v-input__append-outer,
    .v-input__prepend-outer {
        display: inline-flex;
        margin-bottom: 4px;
        margin-top: 4px;
        line-height: 1;
    }

    .v-input__append-outer .v-icon,
    .v-input__prepend-outer .v-icon {
        user-select: none;
    }

    .v-input__append-outer {
        margin-left: 9px;
    }

    .v-input__prepend-outer {
        margin-right: 9px;
    }

    .v-input__control {
        display: flex;
        flex-direction: column;
        height: auto;
        flex-grow: 1;
        flex-wrap: wrap;
        width: 100%;
    }

    .v-input__icon {
        align-items: center;
        display: inline-flex;
        height: 24px;
        flex: 1 0 auto;
        justify-content: center;
        min-width: 24px;
        width: 24px;
    }

    .v-input__icon--clear {
        border-radius: 50%;
    }

    .v-input__slot {
        align-items: center;
        color: inherit;
        display: flex;
        margin-bottom: 8px;
        min-height: inherit;
        position: relative;
        transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
        width: 100%;
    }

    .v-input--is-disabled:not(.v-input--is-readonly) {
        pointer-events: none;
    }

    .v-input--is-loading > .v-input__control > .v-input__slot:before,
    .v-input--is-loading > .v-input__control > .v-input__slot:after {
        display: none;
    }

    .v-input--hide-details > .v-input__control > .v-input__slot {
        margin-bottom: 0;
    }

    .v-input--has-state.error--text .v-label {
        animation: shake 0.6s cubic-bezier(0.25, 0.8, 0.5, 1);
    }
    </style>
    <style type="text/css">.theme--light.v-label {
        color: rgba(0, 0, 0, 0.54);
    }

    .theme--light.v-label--is-disabled {
        color: rgba(0, 0, 0, 0.38);
    }

    .theme--dark.v-label {
        color: rgba(255, 255, 255, 0.7);
    }

    .theme--dark.v-label--is-disabled {
        color: rgba(255, 255, 255, 0.5);
    }

    .v-label {
        font-size: 16px;
        line-height: 1;
        min-height: 8px;
        transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
    }
    </style>
    <style type="text/css">/* Theme */
    .theme--light.v-messages {
        color: rgba(0, 0, 0, 0.54);
    }

    .theme--dark.v-messages {
        color: rgba(255, 255, 255, 0.7);
    }

    .application--is-rtl .v-messages {
        text-align: right;
    }

    .v-messages {
        flex: 1 1 auto;
        font-size: 12px;
        min-height: 12px;
        min-width: 1px;
        position: relative;
    }

    .v-messages__message {
        line-height: normal;
        word-break: break-word;
        overflow-wrap: break-word;
        word-wrap: break-word;
        hyphens: auto;
    }
    </style>
    <style type="text/css">.theme--light.v-divider {
        border-color: rgba(0, 0, 0, 0.12);
    }

    .theme--dark.v-divider {
        border-color: rgba(255, 255, 255, 0.12);
    }

    .v-divider {
        display: block;
        flex: 1 1 0px;
        max-width: 100%;
        height: 0px;
        max-height: 0px;
        border: solid;
        border-width: thin 0 0 0;
        transition: inherit;
    }

    .v-divider--inset:not(.v-divider--vertical) {
        margin-left: 72px;
        max-width: calc(100% - 72px);
    }

    .v-divider--vertical {
        align-self: stretch;
        border: solid;
        border-width: 0 thin 0 0;
        display: inline-flex;
        height: inherit;
        min-height: 100%;
        max-height: 100%;
        max-width: 0px;
        width: 0px;
        vertical-align: text-bottom;
    }

    .v-divider--vertical.v-divider--inset {
        margin-top: 8px;
        min-height: 0;
        max-height: calc(100% - 16px);
    }
    </style>
    <style type="text/css">.theme--light.v-subheader {
        color: rgba(0, 0, 0, 0.54);
    }

    .theme--dark.v-subheader {
        color: rgba(255, 255, 255, 0.7);
    }

    .v-subheader {
        align-items: center;
        display: flex;
        height: 48px;
        font-size: 14px;
        font-weight: 500;
        padding: 0 16px 0 16px;
    }

    .v-subheader--inset {
        margin-left: 56px;
    }
    </style>
    <style type="text/css">/* Themes */
    .theme--light.v-list {
        background: #fff;
        color: rgba(0, 0, 0, 0.87);
    }

    .theme--light.v-list .v-list--disabled {
        color: rgba(0, 0, 0, 0.38);
    }

    .theme--light.v-list .v-list__tile__sub-title {
        color: rgba(0, 0, 0, 0.54);
    }

    .theme--light.v-list .v-list__tile__mask {
        color: rgba(0, 0, 0, 0.38);
        background: #eee;
    }

    .theme--light.v-list .v-list__tile--link:hover,
    .theme--light.v-list .v-list__tile--highlighted,
    .theme--light.v-list .v-list__group__header:hover {
        background: rgba(0, 0, 0, 0.04);
    }

    .theme--light.v-list .v-list__group--active:before,
    .theme--light.v-list .v-list__group--active:after {
        background: rgba(0, 0, 0, 0.12);
    }

    .theme--light.v-list .v-list__group--disabled .v-list__tile {
        color: rgba(0, 0, 0, 0.38) !important;
    }

    .theme--light.v-list .v-list__group--disabled .v-list__group__header__prepend-icon .v-icon {
        color: rgba(0, 0, 0, 0.38) !important;
    }

    .theme--dark.v-list {
        background: #424242;
        color: #fff;
    }

    .theme--dark.v-list .v-list--disabled {
        color: rgba(255, 255, 255, 0.5);
    }

    .theme--dark.v-list .v-list__tile__sub-title {
        color: rgba(255, 255, 255, 0.7);
    }

    .theme--dark.v-list .v-list__tile__mask {
        color: rgba(255, 255, 255, 0.5);
        background: #494949;
    }

    .theme--dark.v-list .v-list__tile--link:hover,
    .theme--dark.v-list .v-list__tile--highlighted,
    .theme--dark.v-list .v-list__group__header:hover {
        background: rgba(255, 255, 255, 0.08);
    }

    .theme--dark.v-list .v-list__group--active:before,
    .theme--dark.v-list .v-list__group--active:after {
        background: rgba(255, 255, 255, 0.12);
    }

    .theme--dark.v-list .v-list__group--disabled .v-list__tile {
        color: rgba(255, 255, 255, 0.5) !important;
    }

    .theme--dark.v-list .v-list__group--disabled .v-list__group__header__prepend-icon .v-icon {
        color: rgba(255, 255, 255, 0.5) !important;
    }

    .application--is-rtl .v-list__tile__title {
        text-align: right;
    }

    .application--is-rtl .v-list__tile__content {
        text-align: right;
    }

    .v-list {
        list-style-type: none;
        padding: 8px 0 8px;
        transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
    }

    .v-list > div {
        transition: inherit;
    }

    .v-list__tile {
        align-items: center;
        color: inherit;
        display: flex;
        font-size: 16px;
        font-weight: 400;
        height: 48px;
        margin: 0;
        padding: 0 16px;
        position: relative;
        text-decoration: none;
        transition: background 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
    }

    .v-list__tile--link {
        cursor: pointer;
        user-select: none;
    }

    .v-list__tile__content,
    .v-list__tile__action {
        height: 100%;
    }

    .v-list__tile__title,
    .v-list__tile__sub-title {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
        width: 100%;
    }

    .v-list__tile__title {
        height: 24px;
        line-height: 24px;
        position: relative;
        text-align: left;
    }

    .v-list__tile__sub-title {
        font-size: 14px;
    }

    .v-list__tile__avatar {
        display: flex;
        justify-content: flex-start;
        min-width: 56px;
    }

    .v-list__tile__action {
        display: flex;
        justify-content: flex-start;
        min-width: 56px;
        align-items: center;
    }

    .v-list__tile__action .v-btn {
        padding: 0;
        margin: 0;
    }

    .v-list__tile__action .v-btn--icon {
        margin: -6px;
    }

    .v-list__tile__action .v-radio.v-radio {
        margin: 0;
    }

    .v-list__tile__action .v-input--selection-controls {
        padding: 0;
        margin: 0;
    }

    .v-list__tile__action .v-input--selection-controls .v-messages {
        display: none;
    }

    .v-list__tile__action .v-input--selection-controls .v-input__slot {
        margin: 0;
    }

    .v-list__tile__action-text {
        color: #9e9e9e;
        font-size: 12px;
    }

    .v-list__tile__action--stack {
        align-items: flex-end;
        justify-content: space-between;
        padding-top: 8px;
        padding-bottom: 8px;
        white-space: nowrap;
        flex-direction: column;
    }

    .v-list__tile__content {
        text-align: left;
        flex: 1 1 auto;
        overflow: hidden;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        flex-direction: column;
    }

    .v-list__tile__content ~ .v-list__tile__avatar {
        justify-content: flex-end;
    }

    .v-list__tile__content ~ .v-list__tile__action:not(.v-list__tile__action--stack) {
        justify-content: flex-end;
    }

    .v-list__tile--active .v-list__tile__action:first-of-type .v-icon {
        color: inherit;
    }

    .v-list__tile--avatar {
        height: 56px;
    }

    .v-list--dense {
        padding-top: 4px;
        padding-bottom: 4px;
    }

    .v-list--dense .v-subheader {
        font-size: 13px;
        height: 40px;
    }

    .v-list--dense .v-list__group .v-subheader {
        height: 40px;
    }

    .v-list--dense .v-list__tile {
        font-size: 13px;
    }

    .v-list--dense .v-list__tile--avatar {
        height: 48px;
    }

    .v-list--dense .v-list__tile:not(.v-list__tile--avatar) {
        height: 40px;
    }

    .v-list--dense .v-list__tile .v-icon {
        font-size: 22px;
    }

    .v-list--dense .v-list__tile__sub-title {
        font-size: 13px;
    }

    .v-list--disabled {
        pointer-events: none;
    }

    .v-list--two-line .v-list__tile {
        height: 72px;
    }

    .v-list--two-line.v-list--dense .v-list__tile {
        height: 60px;
    }

    .v-list--three-line .v-list__tile {
        height: 88px;
    }

    .v-list--three-line .v-list__tile__avatar {
        margin-top: -18px;
    }

    .v-list--three-line .v-list__tile__sub-title {
        white-space: initial;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        display: -webkit-box;
    }

    .v-list--three-line.v-list--dense .v-list__tile {
        height: 76px;
    }

    .v-list > .v-list__group:before {
        top: 0;
    }

    .v-list > .v-list__group:before .v-list__tile__avatar {
        margin-top: -14px;
    }

    .v-list__group {
        padding: 0;
        position: relative;
        transition: inherit;
    }

    .v-list__group:before,
    .v-list__group:after {
        content: '';
        height: 1px;
        left: 0;
        position: absolute;
        transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
        width: 100%;
    }

    .v-list__group--active ~ .v-list__group:before {
        display: none;
    }

    .v-list__group__header {
        align-items: center;
        cursor: pointer;
        display: flex;
        list-style-type: none;
    }

    .v-list__group__header > div:not(.v-list__group__header__prepend-icon):not(.v-list__group__header__append-icon) {
        flex: 1 1 auto;
        overflow: hidden;
    }

    .v-list__group__header .v-list__group__header__append-icon,
    .v-list__group__header .v-list__group__header__prepend-icon {
        padding: 0 16px;
        user-select: none;
    }

    .v-list__group__header--sub-group {
        align-items: center;
        display: flex;
    }

    .v-list__group__header--sub-group div .v-list__tile {
        padding-left: 0;
    }

    .v-list__group__header--sub-group .v-list__group__header__prepend-icon {
        padding: 0 0 0 40px;
        margin-right: 8px;
    }

    .v-list__group__header .v-list__group__header__prepend-icon {
        display: flex;
        justify-content: flex-start;
        min-width: 56px;
    }

    .v-list__group__header--active .v-list__group__header__append-icon .v-icon {
        transform: rotate(-180deg);
    }

    .v-list__group__header--active .v-list__group__header__prepend-icon .v-icon {
        color: inherit;
    }

    .v-list__group__header--active.v-list__group__header--sub-group .v-list__group__header__prepend-icon .v-icon {
        transform: rotate(-180deg);
    }

    .v-list__group__items {
        position: relative;
        padding: 0;
        transition: inherit;
    }

    .v-list__group__items > div {
        display: block;
    }

    .v-list__group__items--no-action .v-list__tile {
        padding-left: 72px;
    }

    .v-list__group--disabled {
        pointer-events: none;
    }

    .v-list--subheader {
        padding-top: 0;
    }
    </style>
    <style type="text/css">.v-avatar {
        align-items: center;
        border-radius: 50%;
        display: inline-flex;
        justify-content: center;
        position: relative;
        text-align: center;
        vertical-align: middle;
    }

    .v-avatar img,
    .v-avatar .v-icon,
    .v-avatar .v-image {
        border-radius: 50%;
        display: inline-flex;
        height: inherit;
        width: inherit;
    }

    .v-avatar--tile {
        border-radius: 0;
    }

    .v-avatar--tile img,
    .v-avatar--tile .v-icon,
    .v-avatar--tile .v-image {
        border-radius: 0;
    }
    </style>
    <style type="text/css">/* Theme */
    .theme--light.v-counter {
        color: rgba(0, 0, 0, 0.54);
    }

    .theme--dark.v-counter {
        color: rgba(255, 255, 255, 0.7);
    }

    .v-counter {
        flex: 0 1 auto;
        font-size: 12px;
        min-height: 12px;
        line-height: 1;
    }
    </style>
    <style type="text/css">.v-progress-linear {
        background: transparent;
        margin: 1rem 0;
        overflow: hidden;
        width: 100%;
        position: relative;
    }

    .v-progress-linear__bar {
        width: 100%;
        height: inherit;
        position: relative;
        transition: 0.2s cubic-bezier(0.4, 0, 0.6, 1);
        z-index: 1;
    }

    .v-progress-linear__bar__determinate {
        height: inherit;
        transition: 0.2s cubic-bezier(0.4, 0, 0.6, 1);
    }

    .v-progress-linear__bar__indeterminate .long,
    .v-progress-linear__bar__indeterminate .short {
        height: inherit;
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        will-change: left, right;
        width: auto;
        background-color: inherit;
    }

    .v-progress-linear__bar__indeterminate--active .long {
        animation: indeterminate;
        animation-duration: 2.2s;
        animation-iteration-count: infinite;
    }

    .v-progress-linear__bar__indeterminate--active .short {
        animation: indeterminate-short;
        animation-duration: 2.2s;
        animation-iteration-count: infinite;
    }

    .v-progress-linear__background {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        transition: 0.3s ease-in;
    }

    .v-progress-linear__content {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 2;
    }

    .v-progress-linear--query .v-progress-linear__bar__indeterminate--active .long {
        animation: query;
        animation-duration: 2s;
        animation-iteration-count: infinite;
    }

    .v-progress-linear--query .v-progress-linear__bar__indeterminate--active .short {
        animation: query-short;
        animation-duration: 2s;
        animation-iteration-count: infinite;
    }

    @-moz-keyframes indeterminate {
        0% {
            left: -90%;
            right: 100%;
        }
        60% {
            left: -90%;
            right: 100%;
        }
        100% {
            left: 100%;
            right: -35%;
        }
    }

    @-webkit-keyframes indeterminate {
        0% {
            left: -90%;
            right: 100%;
        }
        60% {
            left: -90%;
            right: 100%;
        }
        100% {
            left: 100%;
            right: -35%;
        }
    }

    @-o-keyframes indeterminate {
        0% {
            left: -90%;
            right: 100%;
        }
        60% {
            left: -90%;
            right: 100%;
        }
        100% {
            left: 100%;
            right: -35%;
        }
    }

    @keyframes indeterminate {
        0% {
            left: -90%;
            right: 100%;
        }
        60% {
            left: -90%;
            right: 100%;
        }
        100% {
            left: 100%;
            right: -35%;
        }
    }

    @-moz-keyframes indeterminate-short {
        0% {
            left: -200%;
            right: 100%;
        }
        60% {
            left: 107%;
            right: -8%;
        }
        100% {
            left: 107%;
            right: -8%;
        }
    }

    @-webkit-keyframes indeterminate-short {
        0% {
            left: -200%;
            right: 100%;
        }
        60% {
            left: 107%;
            right: -8%;
        }
        100% {
            left: 107%;
            right: -8%;
        }
    }

    @-o-keyframes indeterminate-short {
        0% {
            left: -200%;
            right: 100%;
        }
        60% {
            left: 107%;
            right: -8%;
        }
        100% {
            left: 107%;
            right: -8%;
        }
    }

    @keyframes indeterminate-short {
        0% {
            left: -200%;
            right: 100%;
        }
        60% {
            left: 107%;
            right: -8%;
        }
        100% {
            left: 107%;
            right: -8%;
        }
    }

    @-moz-keyframes query {
        0% {
            right: -90%;
            left: 100%;
        }
        60% {
            right: -90%;
            left: 100%;
        }
        100% {
            right: 100%;
            left: -35%;
        }
    }

    @-webkit-keyframes query {
        0% {
            right: -90%;
            left: 100%;
        }
        60% {
            right: -90%;
            left: 100%;
        }
        100% {
            right: 100%;
            left: -35%;
        }
    }

    @-o-keyframes query {
        0% {
            right: -90%;
            left: 100%;
        }
        60% {
            right: -90%;
            left: 100%;
        }
        100% {
            right: 100%;
            left: -35%;
        }
    }

    @keyframes query {
        0% {
            right: -90%;
            left: 100%;
        }
        60% {
            right: -90%;
            left: 100%;
        }
        100% {
            right: 100%;
            left: -35%;
        }
    }

    @-moz-keyframes query-short {
        0% {
            right: -200%;
            left: 100%;
        }
        60% {
            right: 107%;
            left: -8%;
        }
        100% {
            right: 107%;
            left: -8%;
        }
    }

    @-webkit-keyframes query-short {
        0% {
            right: -200%;
            left: 100%;
        }
        60% {
            right: 107%;
            left: -8%;
        }
        100% {
            right: 107%;
            left: -8%;
        }
    }

    @-o-keyframes query-short {
        0% {
            right: -200%;
            left: 100%;
        }
        60% {
            right: 107%;
            left: -8%;
        }
        100% {
            right: 107%;
            left: -8%;
        }
    }

    @keyframes query-short {
        0% {
            right: -200%;
            left: 100%;
        }
        60% {
            right: 107%;
            left: -8%;
        }
        100% {
            right: 107%;
            left: -8%;
        }
    }
    </style>
    <style type="text/css">.vue-slider-dot {
        position: absolute;
        -webkit-transition: all 0s;
        transition: all 0s;
        z-index: 5
    }

    .vue-slider-dot:focus {
        outline: none
    }

    .vue-slider-dot-tooltip {
        position: absolute;
        visibility: hidden
    }

    .vue-slider-dot-hover:hover .vue-slider-dot-tooltip, .vue-slider-dot-tooltip-show {
        visibility: visible
    }

    .vue-slider-dot-tooltip-top {
        top: -10px;
        left: 50%;
        -webkit-transform: translate(-50%, -100%);
        transform: translate(-50%, -100%)
    }

    .vue-slider-dot-tooltip-bottom {
        bottom: -10px;
        left: 50%;
        -webkit-transform: translate(-50%, 100%);
        transform: translate(-50%, 100%)
    }

    .vue-slider-dot-tooltip-left {
        left: -10px;
        top: 50%;
        -webkit-transform: translate(-100%, -50%);
        transform: translate(-100%, -50%)
    }

    .vue-slider-dot-tooltip-right {
        right: -10px;
        top: 50%;
        -webkit-transform: translate(100%, -50%);
        transform: translate(100%, -50%)
    }</style>
    <style type="text/css">.vue-slider-marks {
        position: relative;
        width: 100%;
        height: 100%
    }

    .vue-slider-mark {
        position: absolute;
        z-index: 1
    }

    .vue-slider-ltr .vue-slider-mark, .vue-slider-rtl .vue-slider-mark {
        width: 0;
        height: 100%;
        top: 50%
    }

    .vue-slider-ltr .vue-slider-mark-step, .vue-slider-rtl .vue-slider-mark-step {
        top: 0
    }

    .vue-slider-ltr .vue-slider-mark-label, .vue-slider-rtl .vue-slider-mark-label {
        top: 100%;
        margin-top: 10px
    }

    .vue-slider-ltr .vue-slider-mark {
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .vue-slider-ltr .vue-slider-mark-step {
        left: 0
    }

    .vue-slider-ltr .vue-slider-mark-label {
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%)
    }

    .vue-slider-rtl .vue-slider-mark {
        -webkit-transform: translate(50%, -50%);
        transform: translate(50%, -50%)
    }

    .vue-slider-rtl .vue-slider-mark-step {
        right: 0
    }

    .vue-slider-rtl .vue-slider-mark-label {
        right: 50%;
        -webkit-transform: translateX(50%);
        transform: translateX(50%)
    }

    .vue-slider-btt .vue-slider-mark, .vue-slider-ttb .vue-slider-mark {
        width: 100%;
        height: 0;
        left: 50%
    }

    .vue-slider-btt .vue-slider-mark-step, .vue-slider-ttb .vue-slider-mark-step {
        left: 0
    }

    .vue-slider-btt .vue-slider-mark-label, .vue-slider-ttb .vue-slider-mark-label {
        left: 100%;
        margin-left: 10px
    }

    .vue-slider-btt .vue-slider-mark {
        -webkit-transform: translate(-50%, 50%);
        transform: translate(-50%, 50%)
    }

    .vue-slider-btt .vue-slider-mark-step {
        top: 0
    }

    .vue-slider-btt .vue-slider-mark-label {
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%)
    }

    .vue-slider-ttb .vue-slider-mark {
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .vue-slider-ttb .vue-slider-mark-step {
        bottom: 0
    }

    .vue-slider-ttb .vue-slider-mark-label {
        bottom: 50%;
        -webkit-transform: translateY(50%);
        transform: translateY(50%)
    }

    .vue-slider-mark-label, .vue-slider-mark-step {
        position: absolute
    }</style>
    <style type="text/css">.vue-slider {
        position: relative;
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        display: block;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
    }

    .vue-slider-rail {
        position: relative;
        width: 100%;
        height: 100%;
        -webkit-transition-property: width, height, left, right, top, bottom;
        transition-property: width, height, left, right, top, bottom
    }

    .vue-slider-process {
        position: absolute;
        z-index: 1
    }</style>
    <style><
    style > < br >

    @font-face {
        font-family: Gilroy;
        src: url(data:font/woff2;base64,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) format("woff2");
        font-weight: 300 400;
        font-style: normal
    }

    @font-face {
        font-family: Gilroy;
        src: url(data:font/woff2;base64,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) format("woff2");
        font-weight: 600;
        font-style: normal
    }

     </style>
    </style></head>
<body class="information-information-7">
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
                            <span class="drop-icon-info"><i class="car-down fa fa-angle-down"></i></span>
                        </div>
                        <ul class="dropdown-menu drop-contacts">
                            <li class="info-contact">
                                <a href="javascript:void(0)" onclick="get_modal_callbacking()"><i
                                        class="fa fa-phone-square" aria-hidden="true"></i> Заказать звонок</a></li>
                            <li class="line-contact"></li>
                            <li>
                                <a target="_blank" href="mailto:Yuzh.Optor@mail.ru">
                                    <div class="icon-image"><img src="img/image/cache/catalog/image/znacki/i-20x20.jpg"
                                                                 alt="Yzh.Optor@mail.ru"></div>
                                    Yuzh.Optor@mail.ru </a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send/?phone=79268800893" target="_blank">
                                    <div class="icon-image"><i class="fa fa-whatsapp"></i></div>
                                    +7 (926) 880-08-93 </a>
                                <a href="https://api.whatsapp.com/send/?phone=79823048935" target="_blank">
                                    <div class="icon-image"><i class="fa fa-whatsapp"></i></div>
                                    +7 (982) 304-89-35 </a>
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
                                    class="text_product">Tоваров,</span></span><span
                                    class="prices">на <b>0.00 р.</b></span></span>
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
                        <div class="input-group-btn ">
                            <button id="change_category" type="button" class="btn btn-search-select dropdown-toggle"
                                    data-toggle="dropdown">
                                <span class="category-name">Везде&nbsp;</span>&nbsp;<span
                                    class="fa fa-angle-down fa-fw car-down"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#" onclick="return false;" data-idsearch="0">Везде</a></li>
                                <li><a href="#" onclick="return false;"
                                       data-idsearch="1">АВТОПРИНАДЛЕЖНОСТИ</a></li>

                                <li><a href="#" onclick="return false;" data-idsearch="21">Все для
                                    сантехники</a></li>

                                <li><a href="#" onclick="return false;" data-idsearch="64">ЗИМНИЕ ТОВАРЫ</a>
                                </li>

                                <li><a href="#" onclick="return false;" data-idsearch="312">ножницы
                                    бытовые</a></li>

                                <li><a href="#" onclick="return false;" data-idsearch="55">САДОВО-ОГОРОДНЫЙ
                                    ИНВЕНТАРЬ</a></li>

                                <li><a href="#" onclick="return false;" data-idsearch="68">СРЕДСТВА
                                    ИНДИВИДУАЛЬНОЙ ЗАЩИТЫ</a></li>

                                <li><a href="#" onclick="return false;" data-idsearch="9">СТРОЙ ИНСТРУМЕНТЫ И
                                    ТОВАРЫ</a></li>

                                <li><a href="#" onclick="return false;" data-idsearch="6">ХОЗ ТОВАРЫ</a></li>

                                <li><a href="#" onclick="return false;" data-idsearch="4">ЭЛЕКТРОТОВАРЫ</a>
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
<div class="container">
    <ul class="breadcrumb " itemscope="" itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="">
                <meta itemprop="name" content="Главная">
                <span><i class="fa fa-home"></i></span>
            </a>
            <meta itemprop="position" content="1">
        </li>
        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <link itemprop="item" href="oplata">
            <span itemprop="name">Оплата</span>
            <meta itemprop="position" content="2">
        </li>
    </ul>
    <div class="row">
        <div id="content" class="col-sm-12">
            <h1>Информация об оплате | Торговая компания Yzh.Optor</h1>
            <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><img
                    src="img/image/catalog/image/znacki/11_.png" style="width: 25%;"><span
                    style="font-size:12.499999999999998pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"><br></span>
            </p>
            <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span
                    style="font-size:12.499999999999998pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"><br></span>
            </p>
            <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span
                    style="font-size:12.499999999999998pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Наличные</span>
            </p>
            <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span
                    style="font-size:10.5pt;font-family:Arial;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Оплата наличными в магазине.</span>
            </p>
            <p><b style="font-weight:normal;" id="docs-internal-guid-0ca53aed-7fff-99a3-b790-e0b11bf5f081"><br></b></p>
            <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span
                    style="font-size:12.499999999999998pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Банковский перевод</span>
            </p>
            <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span
                    style="font-size:10.5pt;font-family:Arial;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Оплата на расчетный счет компании для ИП и юр. лиц. </span><span
                    style="font-size:10.5pt;font-family:Arial;color:#000000;background-color:#f6f6f6;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">После оформления заказа будет сформирован счёт на оплату и отправлен Вам по электронной почте. Вместе с заказом при получении будут переданы все необходимые для бухгалтерии документы (оригинал счёта, товарная накладная, счёт-фактура и акт об оказании услуг).</span>
            </p>
            <p><b style="font-weight:normal;"><br></b></p>
            <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span
                    style="font-size:12.499999999999998pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Безналичный расчет</span>
            </p>
            <p></p>
            <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span
                    style="font-size:10.5pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Оплата через банковские карты на месте в магазине. (Безналичный расчет на сайте временно недоступен).</span>
            </p>
            <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span
                    style="font-size:10.5pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"><br></span>
            </p>
            <p dir="ltr"
               style="margin-top: 0pt; margin-bottom: 0pt; color: rgb(51, 51, 51); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 14px; line-height: 1.38; text-align: justify; padding: 0pt 0pt 12pt;">
                <span style="font-size: 12.5pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">Обратная связь:</span><span
                    style="font-size: 10.5pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">&nbsp;</span>
            </p>
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
            <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span
                    style="font-size: 10.5pt; font-family: Arial; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;"></span>
            </p>
            <p dir="ltr"
               style="margin-top: 0pt; margin-bottom: 12pt; color: rgb(51, 51, 51); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 14px; line-height: 1.38; text-align: justify;">
                <span style="font-size: 10.5pt; font-family: Arial; color: rgb(0, 0, 0); font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">Email:</span><span
                    style="font-size: 10.5pt; font-family: Arial; color: rgb(0, 0, 0); font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;"> Yuzh.Optor@mail.ru</span>
            </p></div>
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


<script><!--
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

<div class="mallbery-caa"
     style="z-index: 2147483647 !important; text-transform: none !important; position: fixed;"></div>
</body>
<div id="sm-wrapper"></div>
</html>