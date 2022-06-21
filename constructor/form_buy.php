<?php 
    require "connect.php";
    $name = $_POST['name'];
    $elem = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `items` WHERE `id`=$name"));
?>

    <button id="close-buy-block" title='Close (Esc)' type='button'>×</button>
    <div id="modalka-buy">
        <div class='col-sm-12' style='margin-top: 23px;'>
            <div class='well well-sm products' style='margin-top:10px;'>
                <div class='product'>
                    <div class='row'>
                        <div class='col-xs-12 col-sm-5'>
                            <div class='image'>
                                
                                <img id="img_" src='img/tovaru/<?= $elem['img']?>' alt='<?= $elem['id']?>' width='130px' height='100px'>
                            </div>
                            <div class='pr-name quick-cell'>
                                <div class='quick-cell-content' id="text_"><?= $elem['name']?></div>
                            </div>
                        </div>
                        <div class='col-xs-12 col-sm-7'>
                            <div class='col-xs-6 quantity_quickorder quick-cell'>
                                <div class='quick-cell-content pquantity'>
                                    <div class='input-group popup-quantity'>
                                        <span class='input-group-btn'>
                                            <input class='btn btn-update-popup' type='button' id='decrease_quickorder'
                                                value='-'
                                                onclick='btnminus_quickorder(1);recalculateprice_quickorder();'></input>
                                        </span>
                                        <input type='text' class='form-control input-sm qty_quickorder' name='quantity'
                                            id='htop_quickorder' size='2' value='1'>
                                        <span class='input-group-btn'>
                                            <input class='btn btn-update-popup' type='button' id='increase_quickorder'
                                                value='+'
                                                onclick='btnplus_quickorder(1);recalculateprice_quickorder();'></input>
                                        </span>
                                        </input>
                                    </div>
                                </div>
                            </div>

                            <div class='col-xs-6 text-center quick-cell'>
                                <div class='quick-cell-content'>
                                    <div class='price_fast'><span id='price_' data-price='24.9600'><?= $elem["price"]?> руб.</span></div>
                                    <input type='hidden' id='price_tax_plus_options' name='price_tax'
                                        value='24.96'></input>
                                    <input type='hidden' id='price_no_tax_plus_options' name='price_no_tax'
                                        value='24.96'></input>
                                    <input id='total_form' type='hidden' value='24.96' name='total_fast'></input>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='popup-center'>
            <form id='callback_data' action="constructor/form.php" method='post'>
                <div class='col-xs-12'>
                    <div class='form-group sections_block_rquaired'>
                        <div class='input-group margin-bottom-sm'>
                            <input id='contact-name' class='form-control contact-name' type='text'
                                placeholder='Ваше имя' value='' name='name' required>
                            <span class='input-group-addon'><i class='icon-append-1 fa fa-user fa-fw'></i></span>
                        </div>
                        <div id='error_name_callback' class='error_callback'></div>
                    </div>
                    <div class='form-group sections_block_rquaired'>
                        <div class='input-group margin-bottom-sm'>
                            <input id='contact-phone' class='form-control contact-phone' type='text'
                                placeholder='Ваш телефон' value='' name='phone' required>
                            <span class='input-group-addon'><i
                                    class='icon-append-1 fa fa-phone-square fa-fw'></i></span>
                        </div>
                        <div id='error_phone_callback' class='error_callback'></div>
                    </div>
                    <div class='form-group sections_block'>
                        <div class='input-group margin-bottom-sm'>
                            <input id='contact-email' class='form-control contact-email' type='text' placeholder='Email'
                                value='' name='email_buyer'>
                            <span class='input-group-addon'><i class='icon-append-1 fa fa-envelope fa-fw'></i></span>
                        </div>
                        <div id='error_email_callback' class='error_callback'></div>
                    </div>
                    <div class='form-group sections_block'>
                        <div class='input-group margin-bottom-sm'>
                            <input id='contact-comment' class='form-control contact-comment' type='text'
                                placeholder='Комментарий' value='' name='comment_buyer'>
                            <span class='input-group-addon'><i class='icon-append-1 fa fa-comment fa-fw'></i></span>
                        </div>
                        <div id='error_comment_callback' class='error_callback'></div>
                    </div>

                    <input type='hidden' id='callback_url' value='' name='url_site'>
                </div>

                <div class='anytext-callback marb col-xs-12 text-center'></div>
            </form>
            <div class='popup-footer'>
                <div class='col-xs-12 text-center'>
                    <button id='btn_buy' onclick='sendCallback();' class='btn-callback ladda-button'
                        data-style='expand-left'><span class='ladda-label'>Оформить заказ</span></button>
                </div>
            </div>

        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function (event) {
            $('[data-toggle-buy]').on('click', function () {
                $('#close-yey').toggleClass('hider');
                $('.container').addClass('blurchik');
            });
        });
    </script>