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

    minus = $(obj).children('.quantity_plus_minus')
    .children('.quantity_cont').children('.input-group')
    .children().children('.btn-quantity-minus');

    plus = $(obj).children('.quantity_plus_minus')
    .children('.quantity_cont').children('.input-group')
    .children().children('.btn-quantity-plus');

    num = $(obj).children('.quantity_plus_minus')
    .children('.quantity_cont').children('.input-group')
    .children('.form-control');

    btn_buy = $(obj).children('.actions-quick-order').children('.quick-order')
    .children('.btn-fastorder');

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