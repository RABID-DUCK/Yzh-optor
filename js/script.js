if (localStorage.getItem('display') === null) {
    localStorage.setItem('display', 'grid');
}



function init(elem, options) {
    elem.addClass('countdownHolder');
    $.each(['Days', 'Hours', 'Minutes', 'Sec'], function (i) {
        var clas;
        if (this == 'Days') { clas = "Дней"; }
        if (this == 'Hours') { clas = "Часов"; }
        if (this == 'Minutes') { clas = "минут"; }
        if (this == 'Sec') { clas = "сек"; }
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
(function (m, e, t, r, i, k, a) {
    m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
    m[i].l = 1 * new Date(); k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
})
    (window, document, "script", "../mc.yandex.ru/metrika/tag.js", "ym");

ym(80874508, "init", {
    clickmap: true,
    trackLinks: true,
    accurateTrackBounce: true,
    webvisor: true,
    ecommerce: "dataLayer"
});
$(document).ready(function () {
    var category_id_page = $('#content select[name=\'category_id\']').find("option:selected").attr("value");
    var category_id_html = $('#content select[name=\'category_id\']').find("option:selected").html();

    $("#selected_category").val(category_id_page);
    $("#category_now").val(category_id_page);
    $(".category-name").html(category_id_html);
    $('.select-category').find('.filter-option').html(category_id_html)
});
$('#search a').click(function () {
    $("#selected_category").val($(this).attr('data-idsearch'));
    $('.category-name').html($(this).html());
});
$(document).ready(function () {
    var autoSearch = $('#searchtop input[name="search"]');

    var customAutocompleteSearchtop = null;
    autoSearch.autocompleteSerach({
        delay: 500,
        responsea: function (items) {
            if (items.length) {
                for (i = 0; i < items.length; i++) {
                    this.items[items[i]['value']] = items[i];
                }
            }
            var html = '';
            if (items.length) {
                $.each(items, function (key, item) {
                    if (item.product_id != 0) {
                        html += '<li><a href="' + item.href + '" class="autosearch_link">';
                        html += '<div class="ajaxadvance">';
                        html += '<div class="image">';
                        if (item.image) {
                            html += '<img title="' + item.name + '" src="' + item.image + '"/>';
                        }
                        html += '</div>';
                        html += '<div class="content">';
                        html += '<h3 class="name">' + item.label + '</h3>';
                        if (item.model) {
                            html += '<div class="model">';
                            html += 'Модель: ' + item.model;
                            html += '</div>';
                        }
                        if (item.manufacturer) {
                            html += '<div class="manufacturer">';
                            html += 'Производитель: ' + item.manufacturer;
                            html += '</div>';
                        }
                        if (item.stock_status) {
                            html += '<div class="stock_status">';
                            html += 'Наличие: ' + item.stock_status;
                            html += '</div>';
                        }
                        if (item.price) {
                            html += '<div class="price"> ';
                            if (!item.special) {
                                html += item.price;
                            } else {
                                html += '<span class="price-old">' + item.price + '</span> <span class="price-new">' + item.special + '</span>';
                            }
                            html += '</div>';
                        }

                        if (item.rating) {
                            html += '<div class="ratings"> ';
                            for (var i = 1; i <= 5; i++) {
                                if (item.rating < i) {
                                    html += '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                } else {
                                    html += '<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                }
                            }
                            html += '</div>';
                        }
                        html += '</div>';
                        html += '</div></a></li>'
                    }
                });
                html += '<li><a class="search-view-all-result" href="index.php?route=product/search&search=' + autoSearch.val() + '">Просмотреть все результаты</a></li>';
            }
            if (html) {
                autoSearch.siblings('ul.dropdown-menu').show();
            } else {
                autoSearch.siblings('ul.dropdown-menu').hide();
            }

            $(autoSearch).siblings('ul.dropdown-menu').html(html);
        },
        source: function (request, response) {
            customAutocompleteSearchtop = this;
            $.ajax({
                url: 'index.php?route=extension/module/autosearch/ajaxLiveSearch&filter_name=' + encodeURIComponent(request),
                dataType: 'json',
                success: function (json) {
                    customAutocompleteSearchtop.responsea($.map(json, function (item) {
                        return {
                            label: item.name,
                            name: item.name1,
                            value: item.product_id,
                            model: item.model,
                            stock_status: item.stock_status,
                            image: item.image,
                            manufacturer: item.manufacturer,
                            price: item.price,
                            special: item.special,
                            category: item.category,
                            rating: item.rating,
                            reviews: item.reviews,
                            href: item.href,
                        }
                    }));
                }
            });
        },
        select: function (ui) {
            return false;
        },
        selecta: function (ui) {
            if (ui.href) {
                location = ui.href;
            }
            return false;
        },
        focus: function (event, ui) {
            return false;
        }
    });
});
$(document).on('click', '#search-fixed-top input[name="search"]', function () {
    var autoSearchFixed = $('#search-fixed-top input[name="search"]');
    var customAutocomplete = null;
    $('#search-fixed-top ul.dropdown-menu.autosearch').remove();
    autoSearchFixed.autocompleteSerach({
        delay: 500,
        responsea: function (items) {
            if (items.length) {
                for (i = 0; i < items.length; i++) {
                    this.items[items[i]['value']] = items[i];
                }
            }
            var html = '';
            if (items.length) {
                $.each(items, function (key, item) {
                    if (item.product_id != 0) {
                        html += '<li><a href="' + item.href + '" class="autosearch_link">';
                        html += '<div class="ajaxadvance">';
                        html += '<div class="image">';
                        if (item.image) {
                            html += '<img title="' + item.name + '" src="' + item.image + '"/>';
                        }
                        html += '</div>';
                        html += '<div class="content">';
                        html += '<h3 class="name">' + item.label + '</h3>';
                        if (item.model) {
                            html += '<div class="model">';
                            html += 'Модель: ' + item.model;
                            html += '</div>';
                        }
                        if (item.manufacturer) {
                            html += '<div class="manufacturer">';
                            html += 'Производитель: ' + item.manufacturer;
                            html += '</div>';
                        }
                        if (item.stock_status) {
                            html += '<div class="stock_status">';
                            html += 'Наличие: ' + item.stock_status;
                            html += '</div>';
                        }
                        if (item.price) {
                            html += '<div class="price"> ';
                            if (!item.special) {
                                html += item.price;
                            } else {
                                html += '<span class="price-old">' + item.price + '</span> <span class="price-new">' + item.special + '</span>';
                            }
                            html += '</div>';
                        }

                        if (item.rating) {
                            html += '<div class="ratings"> ';
                            for (var i = 1; i <= 5; i++) {
                                if (item.rating < i) {
                                    html += '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                } else {
                                    html += '<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                }
                            }
                            html += '</div>';
                        }
                        html += '</div>';
                        html += '</div></a></li>'
                    }
                });
                html += '<li><a class="search-view-all-result" href="index.php?route=product/search&search=' + autoSearchFixed.val() + '">Просмотреть все результаты</a></div>';
            }
            if (html) {
                autoSearchFixed.siblings('ul.dropdown-menu').show();
            } else {
                autoSearchFixed.siblings('ul.dropdown-menu').hide();
            }

            $(autoSearchFixed).siblings('ul.dropdown-menu').html(html);
        },
        source: function (request, response) {
            customAutocomplete = this;
            $.ajax({
                url: 'index.php?route=extension/module/autosearch/ajaxLiveSearch&filter_name=' + encodeURIComponent(request),
                dataType: 'json',
                success: function (json) {
                    customAutocomplete.responsea($.map(json, function (item) {
                        return {
                            label: item.name,
                            name: item.name1,
                            value: item.product_id,
                            model: item.model,
                            stock_status: item.stock_status,
                            image: item.image,
                            manufacturer: item.manufacturer,
                            price: item.price,
                            special: item.special,
                            category: item.category,
                            rating: item.rating,
                            reviews: item.reviews,
                            href: item.href
                        }
                    }));
                }
            });
        },
        select: function (ui) {
            return false;
        },
        selecta: function (ui) {
            if (ui.href) {
                location = +ui.href;
            }
            return false;
        },
        focus: function (event, ui) {
            return false;
        }
    });
});
$(document).ready(function () {
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
                function deactivateSubmenu(row) { $(row).removeClass('menu-open'); }
                function exitMenu(row) { return true; }
                $('.dropdown-menu-simple .nsmenu-haschild').menuAim({
                    activateCallback: activateSubmenu2level,
                    deactivateCallback: deactivateSubmenu2level,
                });
                function activateSubmenu2level(row) {
                    if ($(row).hasClass('nsmenu-issubchild')) {
                        $(row).addClass('menu-open-2level');
                    }
                }
                function deactivateSubmenu2level(row) { $(row).removeClass('menu-open-2level'); }
                function exitMenu2level(row) { return true; }
                $('.dropdown-menu-simple .nsmenu-ischild-simple').menuAim({
                    activateCallback: activateSubmenu4level,
                    deactivateCallback: deactivateSubmenu4level,
                });
                function activateSubmenu4level(row) {

                    $(row).addClass('menu-open-4level');
                }
                function deactivateSubmenu4level(row) { $(row).removeClass('menu-open-4level'); }
                function exitMenu4level(row) { return true; }
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
    function activateSubmenu_fixed(row) { $(row).addClass('menu-open'); }
    function deactivateSubmenu_fixed(row) { $(row).removeClass('menu-open'); }
    function exitMenu_fixed(row) { return true; }
    $('#top-fixed .dropdown-menu-simple .nsmenu-haschild').menuAim({
        activateCallback: activateSubmenu2level_fixed,
        deactivateCallback: deactivateSubmenu2level_fixed,
    });
    function activateSubmenu2level_fixed(row) { $(row).addClass('menu-open-2level'); }
    function deactivateSubmenu2level_fixed(row) { $(row).removeClass('menu-open-2level'); }
    function exitMenu2level_fixed(row) { return true; }


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
if (window.matchMedia("(min-width: 992px)").matches) {
    $('header #menu-list').addClass("nsmenu-block");
}
$(window).resize(function () {
    if ($(window).width() > 992) {
        $('header #menu-list').addClass("nsmenu-block");
    } else {
        $('header #menu-list').removeClass("nsmenu-block");
    }
});
$('#slideshow0').owlCarousel({
    items: 6,
    autoPlay: 7000,
    singleItem: true,
    navigation: true,
    navigationText: ['<span class="slideshow-btn-prev"></span>', '<span class="slideshow-btn-next"></span>'],
    pagination: true,
    transitionStyle: 'fadeUp'
});
function btnminus_cat_price_latest_gv6367(minimum) {
    var $input = $('#input_quantity_mod_latest_grid06367');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(6367, count, , '', '.latest_grid0', 'latest_gv');
}
function btnplus_cat_price_latest_gv6367(minimum) {
    var $input = $('#input_quantity_mod_latest_grid06367');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(6367, count,, '', '.latest_grid0', 'latest_gv');
};
function btnminus_cat_price_latest_gv6366(minimum) {
    var $input = $('#input_quantity_mod_latest_grid06366');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(6366, count,, '', '.latest_grid0', 'latest_gv');
}
function btnplus_cat_price_latest_gv6366(minimum) {
    var $input = $('#input_quantity_mod_latest_grid06366');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(6366, count,, '', '.latest_grid0', 'latest_gv');
};
function btnminus_cat_price_latest_gv6343(minimum) {
    var $input = $('#input_quantity_mod_latest_grid06343');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(6343, count,, '', '.latest_grid0', 'latest_gv');
}
function btnplus_cat_price_latest_gv6343(minimum) {
    var $input = $('#input_quantity_mod_latest_grid06343');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(6343, count,, '', '.latest_grid0', 'latest_gv');
};
function btnminus_cat_price_latest_gv6272(minimum) {
    var $input = $('#input_quantity_mod_latest_grid06272');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(6272, count,, '', '.latest_grid0', 'latest_gv');
}
function btnplus_cat_price_latest_gv6272(minimum) {
    var $input = $('#input_quantity_mod_latest_grid06272');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(6272, count,, '', '.latest_grid0', 'latest_gv');
};
function btnminus_cat_price_latest_gv6243(minimum) {
    var $input = $('#input_quantity_mod_latest_grid06243');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(6243, count,, '', '.latest_grid0', 'latest_gv');
}
function btnplus_cat_price_latest_gv6243(minimum) {
    var $input = $('#input_quantity_mod_latest_grid06243');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(6243, count,, '', '.latest_grid0', 'latest_gv');
};
$(document).on('click', '.latest-ajax-load0', function () {
    $.ajax({
        url: 'index.php?route=extension/module/latest_grid/getNextPage',
        type: 'post',
        data: 'page=' + $(this).attr('data-nextpage') + '&module=0&setting=YToxMjp7czo0OiJuYW1lIjtzOjA6IiI7czoxMjoidGl0bGVfbW9kdWxlIjtzOjA6IiI7czoxMToiY2F0ZWdvcnlfaWQiO3M6MzoiMTM2IjtzOjE5OiJmaWx0ZXJfc3ViX2NhdGVnb3J5IjtzOjE6IjEiO3M6MTU6InN0YXR1c19zaG93bW9yZSI7czoxOiIxIjtzOjk6ImxpbWl0X21heCI7czoyOiIyMCI7czo1OiJsaW1pdCI7czoxOiI1IjtzOjEyOiJsaW1pdF90YWJsZXQiO3M6MToiMyI7czo5OiJsaW1pdF9tb2IiO3M6MToiMiI7czo1OiJ3aWR0aCI7czozOiIyMDAiO3M6NjoiaGVpZ2h0IjtzOjM6IjIwMCI7czo2OiJzdGF0dXMiO3M6MToiMSI7fQ==',
        dataType: 'html',
        beforeSend: function () {
            $('.showmore-latest0 .ajaxloadingLatest').addClass('spin-ajax');
        },
        complete: function () {
            $('.showmore-latest0 .ajaxloadingLatest').removeClass('spin-ajax');
        },
        success: function (data) {
            $data = $(data);
            var $products = $data.find('.latest_grid0 > div.item');
            var $product_img = $products.find('a > img');

            $product_img.each(function () {
                if ($(this).attr('data-additional-hover')) {
                    var img_src = $(this).attr('data-additional-hover');
                    $(this).addClass('main-img');
                    $(this).after('<img src="' + img_src + '" class="additional-img-hover img-responsive" title="' + $(this).attr('alt') + '" />');
                }
            });
            $('.latest_grid0').append($products);
            $('.showmore-latest0').replaceWith($data.find('.showmore-latest0'));
        }
    });
});

$('.latest_grid0').each(function () {
    if ($(".latest_grid0").parents("#column-left, #column-right, .position-no-owl").length) {
        var items = $(this).children('div.item');
        items.removeClass('col-xs-12 col-sm-6 col-md-4 col-lg-3');
        items.addClass('col-xs-12 col-sm-12 col-md-12 col-lg-12');
    }
});

if (!$(".latest_grid0").parents("#column-left, #column-right, .position-no-owl").length) {
}
function btnminus_cat_price_latest_gv6241(minimum) {
    var $input = $('#input_quantity_mod_latest_grid16241');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(6241, count,, '', '.latest_grid1', 'latest_gv');
}
function btnplus_cat_price_latest_gv6241(minimum) {
    var $input = $('#input_quantity_mod_latest_grid16241');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(6241, count,, '', '.latest_grid1', 'latest_gv');
};
function btnminus_cat_price_latest_gv6242(minimum) {
    var $input = $('#input_quantity_mod_latest_grid16242');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(6242, count,, '', '.latest_grid1', 'latest_gv');
}
function btnplus_cat_price_latest_gv6242(minimum) {
    var $input = $('#input_quantity_mod_latest_grid16242');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(6242, count,, '', '.latest_grid1', 'latest_gv');
};
function btnminus_cat_price_latest_gv6007(minimum) {
    var $input = $('#input_quantity_mod_latest_grid16007');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(6007, count,, '', '.latest_grid1', 'latest_gv');
}
function btnplus_cat_price_latest_gv6007(minimum) {
    var $input = $('#input_quantity_mod_latest_grid16007');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(6007, count,, '', '.latest_grid1', 'latest_gv');
};
function btnminus_cat_price_latest_gv5905(minimum) {
    var $input = $('#input_quantity_mod_latest_grid15905');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(5905, count,, '', '.latest_grid1', 'latest_gv');
}
function btnplus_cat_price_latest_gv5905(minimum) {
    var $input = $('#input_quantity_mod_latest_grid15905');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(5905, count,, '', '.latest_grid1', 'latest_gv');
};
function btnminus_cat_price_latest_gv6088(minimum) {
    var $input = $('#input_quantity_mod_latest_grid16088');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(6088, count,, '', '.latest_grid1', 'latest_gv');
}
function btnplus_cat_price_latest_gv6088(minimum) {
    var $input = $('#input_quantity_mod_latest_grid16088');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(6088, count,, '', '.latest_grid1', 'latest_gv');
};
$(document).on('click', '.latest-ajax-load1', function () {
    $.ajax({
        url: 'index.php?route=extension/module/latest_grid/getNextPage',
        type: 'post',
        data: 'page=' + $(this).attr('data-nextpage') + '&module=1&setting=YToxMjp7czo0OiJuYW1lIjtzOjA6IiI7czoxMjoidGl0bGVfbW9kdWxlIjtzOjA6IiI7czoxMToiY2F0ZWdvcnlfaWQiO3M6MzoiMTc5IjtzOjE5OiJmaWx0ZXJfc3ViX2NhdGVnb3J5IjtzOjE6IjEiO3M6MTU6InN0YXR1c19zaG93bW9yZSI7czoxOiIxIjtzOjk6ImxpbWl0X21heCI7czoyOiIxMiI7czo1OiJsaW1pdCI7czoxOiI1IjtzOjEyOiJsaW1pdF90YWJsZXQiO3M6MToiMyI7czo5OiJsaW1pdF9tb2IiO3M6MToiMiI7czo1OiJ3aWR0aCI7czozOiIxNjAiO3M6NjoiaGVpZ2h0IjtzOjM6IjE2MCI7czo2OiJzdGF0dXMiO3M6MToiMSI7fQ==',
        dataType: 'html',
        beforeSend: function () {
            $('.showmore-latest1 .ajaxloadingLatest').addClass('spin-ajax');
        },
        complete: function () {
            $('.showmore-latest1 .ajaxloadingLatest').removeClass('spin-ajax');
        },
        success: function (data) {
            $data = $(data);
            var $products = $data.find('.latest_grid1 > div.item');
            var $product_img = $products.find('a > img');

            $product_img.each(function () {
                if ($(this).attr('data-additional-hover')) {
                    var img_src = $(this).attr('data-additional-hover');
                    $(this).addClass('main-img');
                    $(this).after('<img src="' + img_src + '" class="additional-img-hover img-responsive" title="' + $(this).attr('alt') + '" />');
                }
            });
            $('.latest_grid1').append($products);
            $('.showmore-latest1').replaceWith($data.find('.showmore-latest1'));
        }
    });
});

$('.latest_grid1').each(function () {
    if ($(".latest_grid1").parents("#column-left, #column-right, .position-no-owl").length) {
        var items = $(this).children('div.item');
        items.removeClass('col-xs-12 col-sm-6 col-md-4 col-lg-3');
        items.addClass('col-xs-12 col-sm-12 col-md-12 col-lg-12');
    }
});

if (!$(".latest_grid1").parents("#column-left, #column-right, .position-no-owl").length) {
}
$(document).ready(function () {
    if (viewport().width >= 992) {
        $('.item-sub-category').scrollpanel({
            prefix: 'nswc-'
        });
    } else {
        $(document).on('click', '.show-sub-cat-0', function () {
            $(this).parent().find('.item-sub-category').toggleClass('active-sub-menu');
        });
    }
    $(window).resize(function () {
        if (viewport().width >= 992) {
            $('.item-sub-category').scrollpanel({
                prefix: 'nswc-'
            });
        } else {
            $(document).on('click', '.show-sub-cat-0', function () {
                $(this).parent().find('.item-sub-category').toggleClass('active-sub-menu');
            });
        }
    });
    if ($(".categorywall-0").parents("#column-left, #column-right").length) {
        $('.categorywall-0 .box-item').removeClass("col-sm-6 col-md-4 col-lg-3");
        $('.categorywall-0 .box-item').addClass("col-sm-12 col-md-12 col-lg-12");
    }
});
function btnminus_cat_price_tab_catprfeatured4750(minimum) {
    var $input = $('#input_quantity_mod_tab_catprfeatured4750');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(4750, count,, '', '.tab-catprfeatured-0', 'tabcatprfeatured0');
}
function btnplus_cat_price_tab_catprfeatured4750(minimum) {
    var $input = $('#input_quantity_mod_tab_catprfeatured4750');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(4750, count, '', '.tab-catprfeatured-0', 'tabcatprfeatured0');
};
function btnminus_cat_price_tab_catprfeatured3246(minimum) {
    var $input = $('#input_quantity_mod_tab_catprfeatured3246');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(3246, count,, '', '.tab-catprfeatured-0', 'tabcatprfeatured0');
}
function btnplus_cat_price_tab_catprfeatured3246(minimum) {
    var $input = $('#input_quantity_mod_tab_catprfeatured3246');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(3246, count,, '', '.tab-catprfeatured-0', 'tabcatprfeatured0');
};
function btnminus_cat_price_tab_catprfeatured5613(minimum) {
    var $input = $('#input_quantity_mod_tab_catprfeatured5613');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(5613, count,, '', '.tab-catprfeatured-0', 'tabcatprfeatured0');
}
function btnplus_cat_price_tab_catprfeatured5613(minimum) {
    var $input = $('#input_quantity_mod_tab_catprfeatured5613');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(5613, count,, '', '.tab-catprfeatured-0', 'tabcatprfeatured0');
};
function btnminus_cat_price_tab_catprfeatured3896(minimum) {
    var $input = $('#input_quantity_mod_tab_catprfeatured3896');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(3896, count,, '', '.tab-catprfeatured-0', 'tabcatprfeatured0');
}
function btnplus_cat_price_tab_catprfeatured3896(minimum) {
    var $input = $('#input_quantity_mod_tab_catprfeatured3896');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(3896, count,, '', '.tab-catprfeatured-0', 'tabcatprfeatured0');
};
function btnminus_cat_price_tab_catprfeatured5137(minimum) {
    var $input = $('#input_quantity_mod_tab_catprfeatured5137');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(5137, count,, '', '.tab-catprfeatured-0', 'tabcatprfeatured0');
}
function btnplus_cat_price_tab_catprfeatured5137(minimum) {
    var $input = $('#input_quantity_mod_tab_catprfeatured5137');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(5137, count,, '', '.tab-catprfeatured-0', 'tabcatprfeatured0');
};
$(document).ready(function () {
    max_height_div('.product-thumb .option.tabcatprfeatured0-opt');
});
$('.tab-catprfeatured-0').owlCarousel({
    responsiveBaseWidth: ".tab-catprfeatured-0",
    itemsCustom: [[0, 1], [500, 2], [750, 3], [950, 4], [1150, 5]],
    slideSpeed: 200,
    paginationSpeed: 300,
    navigation: true,
    stopOnHover: true,
    touchDrag: false,
    pagination: false,
    navigationText: ['<div class="btn btn-carousel-module next-prod"><i class="fa fa-angle-left arrow"></i></div>', '<div class="btn btn-carousel-module prev-prod"><i class="fa fa-angle-right arrow"></i></div>'],
});
var style = document.createElement('style');
style.type = 'text/css';
var bb = '.productany48624 .title-module:after{border-bottom:2px solid #FF760D}';
var border_bottom = document.createTextNode(bb);
var head = document.getElementsByTagName('head')[0];
style.appendChild(border_bottom);
head.appendChild(style);
function btnminus_cat_price_productany48624_4208(minimum) {
    var $input = $('#input_quantity_mod_productany48624_4208');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(4208, count,, '', '.carousel_numb_productany48624', 'productany48624');
}
function btnplus_cat_price_productany48624_4208(minimum) {
    var $input = $('#input_quantity_mod_productany48624_4208');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(4208, count,, '', '.carousel_numb_productany48624', 'productany48624');
};
function btnminus_cat_price_productany48624_3022(minimum) {
    var $input = $('#input_quantity_mod_productany48624_3022');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(3022, count,, '', '.carousel_numb_productany48624', 'productany48624');
}
function btnplus_cat_price_productany48624_3022(minimum) {
    var $input = $('#input_quantity_mod_productany48624_3022');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(3022, count,, '', '.carousel_numb_productany48624', 'productany48624');
};
function btnminus_cat_price_productany48624_3942(minimum) {
    var $input = $('#input_quantity_mod_productany48624_3942');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(3942, count,, '', '.carousel_numb_productany48624', 'productany48624');
}
function btnplus_cat_price_productany48624_3942(minimum) {
    var $input = $('#input_quantity_mod_productany48624_3942');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(3942, count,, '', '.carousel_numb_productany48624', 'productany48624');
};
function btnminus_cat_price_productany48624_3201(minimum) {
    var $input = $('#input_quantity_mod_productany48624_3201');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(3201, count,, '', '.carousel_numb_productany48624', 'productany48624');
}
function btnplus_cat_price_productany48624_3201(minimum) {
    var $input = $('#input_quantity_mod_productany48624_3201');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(3201, count,, '', '.carousel_numb_productany48624', 'productany48624');
};
function btnminus_cat_price_productany48624_4281(minimum) {
    var $input = $('#input_quantity_mod_productany48624_4281');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(4281, count,, '', '.carousel_numb_productany48624', 'productany48624');
}
function btnplus_cat_price_productany48624_4281(minimum) {
    var $input = $('#input_quantity_mod_productany48624_4281');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(4281, count,, '', '.carousel_numb_productany48624', 'productany48624');
};
$(document).ready(function () {
    $('.carousel_numb_productany48624').owlCarousel({
        responsiveBaseWidth: ".carousel_numb_productany48624",
        itemsCustom: [[0, 1], [500, 2], [750, 3], [950, 4], [1150, 5]],
        slideSpeed: 200,
        paginationSpeed: 300,
        navigation: true,
        stopOnHover: true,
        mouseDrag: false,
        pagination: false,
        autoPlay: false,
        navigationText: ['<div class="btn btn-carousel-module next-prod"><i class="fa fa-angle-left arrow"></i></div>', '<div class="btn btn-carousel-module prev-prod"><i class="fa fa-angle-right arrow"></i></div>'],
    });
});
$(window).load(function () {
    $(".productany48624 .additional-image").removeClass('hidden');
});
var style = document.createElement('style');
style.type = 'text/css';
var bb = '.productany22882 .title-module:after{border-bottom:2px solid #0AA839}';
var border_bottom = document.createTextNode(bb);
var head = document.getElementsByTagName('head')[0];
style.appendChild(border_bottom);
head.appendChild(style);
function btnminus_cat_price_productany22882_3043(minimum) {
    var $input = $('#input_quantity_mod_productany22882_3043');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(3043, count,, '', '.carousel_numb_productany22882', 'productany22882');
}
function btnplus_cat_price_productany22882_3043(minimum) {
    var $input = $('#input_quantity_mod_productany22882_3043');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(3043, count,, '', '.carousel_numb_productany22882', 'productany22882');
};
function btnminus_cat_price_productany22882_3254(minimum) {
    var $input = $('#input_quantity_mod_productany22882_3254');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(3254, count,, '', '.carousel_numb_productany22882', 'productany22882');
}
function btnplus_cat_price_productany22882_3254(minimum) {
    var $input = $('#input_quantity_mod_productany22882_3254');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(3254, count,, '', '.carousel_numb_productany22882', 'productany22882');
};
function btnminus_cat_price_productany22882_3233(minimum) {
    var $input = $('#input_quantity_mod_productany22882_3233');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(3233, count,, '', '.carousel_numb_productany22882', 'productany22882');
}
function btnplus_cat_price_productany22882_3233(minimum) {
    var $input = $('#input_quantity_mod_productany22882_3233');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(3233, count,, '', '.carousel_numb_productany22882', 'productany22882');
};
function btnminus_cat_price_productany22882_4769(minimum) {
    var $input = $('#input_quantity_mod_productany22882_4769');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(4769, count,, '', '.carousel_numb_productany22882', 'productany22882');
}
function btnplus_cat_price_productany22882_4769(minimum) {
    var $input = $('#input_quantity_mod_productany22882_4769');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(4769, count,, '', '.carousel_numb_productany22882', 'productany22882');
};
function btnminus_cat_price_productany22882_4427(minimum) {
    var $input = $('#input_quantity_mod_productany22882_4427');
    var count = parseInt($input.val()) - parseInt(minimum);
    count = count < parseInt(1) ? parseInt(1) : count;
    $input.val(count);
    $input.change();
    recalc_quantity(4427, count,, '', '.carousel_numb_productany22882', 'productany22882');
}
function btnplus_cat_price_productany22882_4427(minimum) {
    var $input = $('#input_quantity_mod_productany22882_4427');
    var count = parseInt($input.val()) + parseInt(minimum);
    $input.val(count);
    $input.change();
    recalc_quantity(4427, count,, '', '.carousel_numb_productany22882', 'productany22882');
};
$(document).ready(function () {
    $('.carousel_numb_productany22882').owlCarousel({
        responsiveBaseWidth: ".carousel_numb_productany22882",
        itemsCustom: [[0, 1], [500, 2], [750, 3], [950, 4], [1150, 5]],
        slideSpeed: 200,
        paginationSpeed: 300,
        navigation: true,
        stopOnHover: true,
        mouseDrag: false,
        pagination: false,
        autoPlay: false,
        navigationText: ['<div class="btn btn-carousel-module next-prod"><i class="fa fa-angle-left arrow"></i></div>', '<div class="btn btn-carousel-module prev-prod"><i class="fa fa-angle-right arrow"></i></div>'],
    });
});
$(window).load(function () {
    $(".productany22882 .additional-image").removeClass('hidden');
});
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
function get_modal_callbacking() {
    $.magnificPopup.open({
        tLoading: loading_masked_img,
        items: {
            src: 'index.php?route=extension/module/callback',
            type: 'ajax'
        },
    });
}