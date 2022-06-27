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

    id = $(obj).children('.product-model').text();

    num = $(obj).children('.quantity_plus_minus')
    .children('.quantity_cont').children('.input-group')
    .children('.form-control');

    price = $(obj).children('.quantity_plus_minus')
    .children('.quantity_price').children('.quantity_price_sum');

    count = $(num).val()


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
function korzina(){
    $.ajax({
        type: "POST",
        url: "constructor/korzinka.php",
        success: function(response){
            $('#korzina').html(response);
        }
    });
}

const addBtn = document.getElementById("add_in_cart");
const listCart = document.getElementById("korzina");

let korzonka = JSON.parse(localStorage.korzonka || "[]");
for(let i=0; i<korzonka.length; i++){
    let nameKor = document.getElementById("name_tovara").value;
    const kor = document.createElement("li");
    kor.innerHTML = "<p class='name_kor'>" + nameKor + "</p><span class='del_elem'>Удалить</span>";
    listCart.append(kor);
    
}

let add_elems = (e) =>{
  e.preventDefault();
  const kor = document.createElement("li");
  let nameKor = document.getElementById("name_tovara").value;
  kor.innerHTML = "<p class='name_kor'>" + nameKor + "</p><span class='del_elem'>Удалить</span>";
  listCart.append(kor);
  korzonka.push(nameKor);
  localStorage.korzonka = JSON.stringify(korzonka);
};

addBtn.addEventListener('click', add_elems);


function del_elem_cart(e){
    let target = e.target;
    if(target.classList.contains('del_elem')){
        target.closest("li").remove();
        let name_kor = target.closest("li").querySelector('.name_kor').textContent;
        let curTasks = korzonka.indexOf(name_kor);
        korzonka.splice(curTasks,1);
        localStorage.korzonka=JSON.stringify(korzonka);
    }
}

listCart.addEventListener('click', del_elem_cart);

// конец её