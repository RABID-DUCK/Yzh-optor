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
    
    btn_add_cart = $(obj).children('.actions').children('.cart')
    .children('.actions').children('.btn-general');

    btn_buy = $(obj).children('.actions-quick-order').children('.quick-order')
    .children('.btn-fastorder');

    console.log($(obj));

    if ($(obj)) // Быcтрый заказ
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
                }
            });
        });
    }
    else if ($(obj) == $(btn_buy)) // Заказ в корзину
    {
        console.log('Корзина');
    }
};

const input = document.getElementById('searching');
const pe = document.getElementById('items_search');
input.addEventListener('input', updateValue);

function updateValue(e){
    pe.classList.add('item_searching');
    pe.textContent = input.value;
}