<?php
session_start();
require "connect.php";
$name = $_POST['name'];
$count = $_POST['count'];

$_SESSION['n_t'] = $elem['name'];
$_SESSION['count_t'] = $count;
$_SESSION['price_t'] = $elem['price'];

if(isset($_POST['localStorage']) && !empty($_POST['localStorage'])){
    $localStorage = json_encode($_POST['localStorage']);
    header("Content-type:application/json");
    print_r($localStorage);
   }else{
    echo "GGGGGGGG";
   }
?>
<head>
    <link rel="stylesheet" href="../css/style.less">
    <link rel="stylesheet" href="../css/_50c36ab27da8bb5ead9c87671a74d2a9.css">
</head>
n<div class="mfp-bg mfp-ready"></div>
<div class="mfp-wrap mfp-close-btn-in mfp-auto-cursor mfp-ready" tabindex="-1" style="overflow: hidden auto;">
    <div class="mfp-cotainer mfp-ajax-holder mfp-s-ready">
        <div class="mfp-content">
            <div id="popup-quickorder">
                <div class="popup-heading">Купить в 1 клик</div>
                <div class="popup-center">
                        <div class="panel-body">
                            <div class="col-sm-12">
                                <div class="well well-sm products" style="margin-top:10px;">
                                    <div class="product">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5" id="syda">
                                                <script>
                                                    let korzina = document.getElementById('syda');
                                                    let oform_cart = document.querySelector('.tovaru-by-cart');

                                                    for(let i=0; i<localStorage.length; i++) {
                                                        let key = localStorage.key(i);
                                                        result = JSON.parse(localStorage.getItem(key));
                                                    let temp_div = document.createElement('div');
                                                        temp_div.innerHTML = `<img src="../${result.img}" width="50px" height="50px"><span>${result.name}</span><i class="del_elem" onclick="delItem(${i})">Удалить</i>`;
                                                        korzina.prepend(temp_div);
                                                        console.log(temp_div); // так можно досатть по ключу всё
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="buy.php" method="POST">
                            <div class="col-sm-6 col-sm-12 form-group sections_block_rquaired">
                            <div class="input-group margin-bottom-sm">
                                <input class="form-control contact-name" type="text" placeholder="Ваше Имя" value="" name="name_polz">
                                    <span class="input-group-addon"><i class="icon-append-1 fa fa-user fa-fw"></i></span>
                                </div>
                            </div>

                            <div class="col-sm-6 col-sm-12 form-group sections_block_rquaired">
                                <div class="input-group margin-bottom-sm">
                            <input id="contact-phone" class="form-control contact-phone" type="text" placeholder="Ваш телефон" value="" name="phone_polz">
                                <span class="input-group-addon"><i class="icon-append-1 fa fa-phone-square fa-fw"></i></span>
                                </div>
                            </div>

                            <div class="col-sm-6 col-sm-12 form-group sections_block">
                                <div class="input-group margin-bottom-sm">
                        <input id="contact-email" class="form-control contact-email" type="text" placeholder="Ваш Email" value="" name="email_buyer">
                                    <span class="input-group-addon"><i class="icon-append-1 fa fa-envelope fa-fw"></i></span>
                                </div>
                            </div>

                            <div class="col-sm-6 col-om-12 form-group sections_block">
                                <div class="input-group margin-bottom-sm">
                                    <input id="contact-comment" class="form-control contact-comment-buyer" name="comment_buyer" placeholder="Откуда вы">
                                    <span class="input-group-addon"><i class="icon-append-1 fa fa-comment fa-fw"></i></span>

                                </div>
                            </div>
                                <input type="submit" class="btn btn-quickorder-one" value="Оформить Заказ" style="display: block;"><i class=" fa-fw"></i>
                                <input type="hidden" id="callback_url" value="" name="url_site">
                            <input type="hidden" id="this_prod_id" value="6366" name="this_prod_id">

                            <div class="col-sm-12 form-group text-center"></div>
                        </div>
                    </div>
                <div class="popup-footer">
                    <div id="quickorder_btn">
                    </div>
                </div>
                <button title="Close (Esc)" type="button" onclick="close_modal()" class="mfp-close">×</button>
            </div>
        </div>
        </form>
        <div class="mfp-preloader"><span><i style="font-size:50px;" class="fa fa-spinner fa-pulse"></i></span></div>
    </div>
</div>
