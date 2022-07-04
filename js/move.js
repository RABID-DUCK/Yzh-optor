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
                    btn.attr('onclick', "take_items('"+elem+"', '"+category+"', '"+id+"', '"+end+"', '"+(parseInt(end)+parseInt(start))+"')");
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

    $('#add_in_cart').on('click', function() {
        $('#korzina_btnka').css('display', 'block !important');
    });

    id = $(obj).children('.product-model').text();

    text = $(obj).children('.product-name').children().text(); 

    num = $(obj).children('.quantity_plus_minus')
    .children('.quantity_cont').children('.input-group')
    .children('.form-control');

    price = $(obj).children('.quantity_plus_minus')
    .children('.quantity_price').children('.quantity_price_sum');

    count = $(num).val()

    img = $(obj).parent('.product-thumb').children('.image')
    .children('a').children('img').attr('src'); 

    if ($(elem).hasClass('btn-fastorder') || $(elem).parent().hasClass('btn-fastorder')) // Быcтрый заказ
    {
        $(document).ready(function() {
            $.ajax({
                type: "POST",
                url: '../constructor/form_buy.php',
                data: {
                    'name': id,
                    'count': count
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
        korzinka_list(id, img, count, text);
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


document.addEventListener("DOMContentLoaded", function() {
    $('#subcribe').click( function() {
        alert('Вы подписались на рассылку новых новостей нашего сайта. Спасибо!');
    });
  });

  function search(){
        var name = $('#search').val();
        if(name === ""){
            $('#life_search').html("");
            console.log('error');
        }
        else{
            $.ajax({
                type: "POST",
                url: "../constructor/search.php",
                data: {
                    search: name
                },
                success: function(response){
                    $("#life_search").html(response);
                    $("#life_search").show();
                }
            });
        }
    $('#but').on("click", function() {
        
        $('#menu-list').toggleClass('show_cat');
    });
  }

  function del_elem(id) {
    $('[name=del_id]').val(id);
}

 function cancel_edit() {
    $('#modal_edit').css('display') == 'none' ? $('#modal_edit').css('display', 'flex') : $('#modal_edit').css('display','none') ;  
 }

 function edit_elem(id, name, price, cat, img, avl) {
    $('[name=m_id]').val(id);
    $('[name=m_name]').text(name);
    $('[name=m_name]').val(name);
    $('[name=m_price]').val(price);
    $('[name=m_cat]').val(cat);
    $('[name=m_img]').val(img);
    $('[name=m_avl]').val(avl);
    $('[name=edit_id]').val(id);
    $('#modal_edit').children().children('h2').text('Редактирование товара '+id);
    cancel_edit();
 }

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
                    btn.attr('onclick', "take_items('"+elem+"', '"+category+"', '"+id+"', '"+end+"', '"+(parseInt(end)+parseInt(start))+"')");
                }
                obj.html(obj.html() + response);
            }
        });
    };
};





function item_click_search(id, e) {
        $(document).ready(function() {
            $.ajax({
                type: "POST",
                url: '../constructor/form_buy.php',
                data: {
                    'name': id,
                    'count': 1
                },
                success: function(response) {
                    $('#close-yey').html(response);
                    $('#close-yey').removeClass('hider');
                }
            });
        });  
};

// id=korzina
// id = add_in_cart


// скрипт корзины
let korzonka = JSON.parse(localStorage.korzonka || "[]");
let korzina = document.getElementById('korzina');
let oform_cart = document.querySelector('.tovaru-by-cart');

for(let i=0; i<localStorage.length; i++) {
    let key = localStorage.key(i);
    result = JSON.parse(localStorage.getItem(key));
    let temp_div = document.createElement('div');
    temp_div.innerHTML = `<img src="${result.img}" width="34px" height="34px"><span>${result.name}</span><i class="del_elem" onclick="delItem(${i})">Удалить</i>`;
    korzina.prepend(temp_div);
    console.log(temp_div); 
}

function senclocalStorage(){
    let korzina = document.getElementById('korzina');
    var obj = {};

    for(let i=0; i<localStorage.length; i++) {
        let key = localStorage.key(i);
        obj[key] = localStorage.getItem(key);
    //     result = JSON.parse(localStorage.getItem(key));
    // let temp_div = document.createElement('div');
    //     temp_div.innerHTML = `<img src="${result.img}" width="34px" height="34px"><span>${result.name}</span><i class="del_elem" onclick="delItem(${i})">Удалить</i>`;
    //     korzina.prepend(temp_div);
    }
    $.ajax({
        url: '../constructor/korzina_buy.php',
        method: 'post',
        dataType: 'html',
        data: {data: obj},
        success: function(data){
            $('#syda').html(data);
        }
    });
}

function korzinka_list(id, img, count, text){
    localStorage.setItem('Tovar'+id, JSON.stringify({
        id: id,
        img: img,
        name: text,
        count: count
    }));
    updateCart();
   
}

function updateCart(id){
    let korzonka = JSON.parse(localStorage.korzonka || "[]");
    let task = document.createElement('li');
    for(var elem in localStorage){
        task.innerHTML = "<img src='"+img+"'"+
        "width='34px' height='34px'>"+"<span class='count_'>"
        +text+"</span><i style='color: blue; font-weight: 600'>x"+count+"</i><span class='del_elem'>Удалить</span><br>"
    }
    // korzina.append(localStorage.getItem("Tovar"+id));
    korzonka.push(task);
    // localStorage.setItem('Tovar', JSON.stringify(korzonka));
}

function delItem(e){
    let target = e.target;
    if(target.classList.contains("del_elem")){
        target.closest("div").remove();
    }
}

korzina.addEventListener('click', delItem);

// конец её


function buy_click() {
        var datak = JSON.stringify(localStorage);
        $.ajax({
            url: 'index.php',
            type: 'POST',
            data: {
                'localStorage': datak
            },
            success: function(response)
            {
                console.log(response);
                window.location.href = "../constructor/korzina_buy.php";
            }
    });
};


