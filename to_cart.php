<?php
require "connect.php";
$name = $_POST['name'];
$price = $_POST['price'];


$elem = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `items` WHERE `id`=$name"));
?>
<div class="box-cart  col-xs-12 col-xs-12 col-sm-4 col-md-2 col-md-push-4 col-sm-push-8">
    <div class="shopping-cart ">
        <div id="cart" class="btn-group btn-block">
            <button type="button" data-toggle="dropdown" data-loading-text="Загрузка..." class="btn btn-block dropdown-toggle">
                <i class="shop-bag fa fa-cart-plus"></i>
                <i class="car-down fa fa-angle-down"></i>
                <span class="cart-total">
                    <span class="products"><b>0</b>
                        <span class="text_product">Tоваров,</span></span>
                <span class="prices">на <b>0.00р.</b></span></span>
            </button>

            <ul class="dropdown-menu pull-right">
                <li id="empty_cart">
                    <p class="text-center">В корзине пусто!</p>
                </li>
            </ul>
            <ul class="dropdown-menu pull-right" style="display: block;">
    <li>
        <table class="table table-striped">
            <tbody>
            <tr id="cart_des">
                <td class="text-left">
                    <a href="#">
                        <img src="img/tovaru/<?= $elem['img'] ?>" alt="" title="" class="img-thumbnail"></a>
                </td>
                <td class="text-left">
                    <a href="#"><?= $elem['name']?></a>
                </td>
                <td class="text-right">
                    <div class="cart-quantity-header">x 1</div>
                </td>
                <td class="text-right"></td>
                <td class="text-center">
                    <button type="button" onclick="cart.remove('2235');" title="Удалить" class="btn btn-link-delete"><i class="fa fa-trash-o"></i></button>
                </td>
            </tr>
            </tbody>
        </table>
    </li>
    <li>
        <div>
            <table class="table table-bordered">
            </table>
            <p class="text-left"><a class="btn btn-shopping" href="#">Открыть корзину</a>
            <a class="btn btn-checkout" href="#">Оформить заказ</a></p>
        </div>
                </li>
            </ul>
        </div>
    </div>
</div>
