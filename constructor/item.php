<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    require 'connect.php';
    $elem_category = $_POST['elem_category'];
    $elem_id = $_POST['elem_id'];
    $elem_start_i = $_POST['elem_start_i'];
    $elem_end_i = $_POST['elem_end_i'];
    $elem_lim = $_POST['elem_lim'];
$elems = mysqli_query($conn, "SELECT * FROM `items` WHERE `$elem_category`=$elem_id");
foreach ($elems as $i => $elem) {
    if ($i >= $elem_start_i && $i < $elem_end_i) {
        switch (strlen($elem['id'])) {
            case 1:
                $elem['id'] = '000' . $elem['id'];
                break;
            case 2:
                $elem['id'] = '00' . $elem['id'];
                break;
            case 3:
                $elem['id'] = '0' . $elem['id'];
                break;
            default:
                break;
        }
    ?>
        <div class="item no-slider col-xs-12 col-sm-6 col-md-4 col-lg-1-5" id="hide-items" onclick="item_click(this, event)">
            <div class="product-thumb transition">
                <div class="image">
                    <div class="stickers-ns">
                        <!-- <div class="sticker-ns bestseller">
                                <i class="fa fa fa-rocket "></i>
                                <span>Лидер продаж!</span>
                            </div>
                            <div class="sticker-ns popular">
                                <i class="fa fa fa-eye "></i>
                                <span>Самые просматриваемые</span>
                            </div> -->
                    </div>
                    <a href="">
                        <!-- FIXME '#' Сделать ссылку на элемент -->
                        <img src="img/tovaru/<?= $elem['img'] ?>" alt='<?= $elem['name'] ?>' class="img-responsive lazyloaded">
                    </a>
                </div>

                <div class="caption">
                    <div class="product-name">
                        <a href="" id="name_tovara"><?= $elem['name'] ?></a>
                        <!-- FIXME Сделать ссылку на элемент -->
                    </div>
                    <div class="product-model"><?= $elem['id'] ?></div>
                    <div class="rating">
                        <span class="rating-box">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>

                            <span class="quantity-reviews">
                                <!-- FIXME Сделать ссылку на элемент -->
                                <a data-placement="right" data-toggle="tooltip" title="" data-original-title="отзывов">0</a>
                            </span>
                        </span>
                    </div>
                    <div class="quantity_plus_minus">
                        <div class="quantity_cont">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button class="btn btn-quantity-minus" type="button">-</button>
                                </span>
                                <input id="input_quantity_mod_latest_grid" oninput="item_click(this, event)" maxlength="6" class="form-control input-number-quantity6243" name="quantity" size="2" value="1">
                                <span class="input-group-btn">
                                    <button class="btn btn-quantity-plus" type="button">+</button>
                                </span>
                            </div>
                        </div>
                        <div class="quantity_price">
                            <div class="quantity_price_sum" price="<?=$elem['price']?>"><?=$elem['price']?> руб.</div>
                        </div>
                    </div>
                    <div class="actions">
                        <div class="cart">
                            <button class="btn btn-general" type="button" >
                                <i class="fa fa-shopping-basket"></i><span>В корзину</span>
                            </button>
                        </div>
                    </div>
                    <div class="actions-quick-order">
                        <div class="quick-order">
                            <?php $name = str_replace('"', "", $elem['name']); ?>
                            <button class="btn btn-fastorder" type="button" data-original-title="Купить в 1 клик">
                                <i class="fa fa-shopping-bag fa-fw"></i> Купить в 1 клик
                            </button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    <?php
    };
};
?>