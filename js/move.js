function take_items(elem, category, id, start=0, end=5, limit=5) {
    {
        $.ajax({
            type: "POST",
            url: 'constructor/item.php',
            data: {                        
                'elem_category': category,
                'elem_id': id,
                'elem_start_i': start,
                'elem_end_i': end,
                'elem_lim': limit
            },
            success: function(response) {
                obj = $('#'+elem);
                if (response.length<20000)
                {
                    obj.siblings('.box-showmore').addClass('item_hidden');
                }
                else {
                    var btn = obj.siblings('.box-showmore').children('#show_more');
                    btn.attr('onclick', "take_items('"+elem+"', '"+category+"', '"+id+"', '"+end+"', '"+(parseInt(end)+5)+"')");
                }
                obj.html(obj.html() + response);
            }
        });
    };
};


function item_click(object, e) {
    obj = $(object).children('.product-thumb').children('.caption');
    e.preventDefault();
    elem = e.target;

    id = $(obj).children('.product-model').text();

    num = $(obj).children('.quantity_plus_minus')
    .children('.quantity_cont').children('.input-group')
    .children('.form-control');

    price = $(obj).children('.quantity_plus_minus')
    .children('.quantity_price').children('.quantity_price_sum');

    console.log(object);

    if ($(elem).hasClass('btn-fastorder') || $(elem).parent().hasClass('btn-fastorder')) // Быcтрый заказ
    {
        console.log('Быстрый заказ');
        $(document).ready(function() {
            $.ajax({
                type: "post",
                url: '../constructor/form_buy.php',
                data: {
                    'name': id
                },
                success: function(response) {
                    $('#close-yey').html(response);
                    $('#close-yey').removeClass('hider');
                }
            });
        });
    }
    else if ($(elem).hasClass('btn-general') || $(elem).parent().hasClass('btn-general')) // Заказ в корзину
    {
        console.log('Корзина');
    }
    else if ($(elem).hasClass('btn-quantity-plus')) // + кол-во
    {
        if ($(num).val() < 999999) {
            $(num).val(parseInt(parseInt($(num).val())+1));
            $(price).text(parseInt($(price).attr('price'))*parseInt($(num).val())+' руб.');
        }
    }
    else if ($(elem).hasClass('btn-quantity-minus')) // - кол-во
    {
        if ($(num).val() > 1) {
            $(num).val(parseInt($(num).val()-1));
            $(price).text(parseInt($(price).attr('price'))*parseInt($(num).val())+' руб.');
        }
    } else if ($(object).hasClass('form-control')) // Изменение кол-ва
    {
        if ($(object).val() < 1 || $(object).val()>999999) {$(object).val(1)};
        $(object).attr('value', $(object).val());
        var temp =  $(object).parent('.input-group').parent('.quantity_cont').parent('.quantity_plus_minus')
        .children('.quantity_price').children('.quantity_price_sum');
        $(temp).text(parseInt($(temp).attr('price'))*parseInt($(object).val())+' руб.');
    }
};

function close_modal() {
    $('#close-yey').addClass('hider');
}

window.addEventListener('DOMContentLoaded', (event) => {
    $('#feedback').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "../constructor/form.php",
            data: $(this).serialize(),
            success: function(response){
                
            }
        });
    });
});       