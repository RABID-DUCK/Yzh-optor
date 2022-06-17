<?php
    require_once 'connect.php';
    $dir_img = __DIR__.'./../img/tovaru/';
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Админ панель Yuzh.Optor</title>
    <base />
    <meta name="description" content="Админ панель Yuzh.Optor" />
    <meta name="keywords" content="Админ панель Yuzh.Optor" />
    <meta property="og:title" content="Админ панель Yuzh.Optor" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="index.html" />
    <meta property="og:image" content="../img/icon.ico" />
    <meta property="og:site_name" content="Админ панель Yuzh.Optor" />
    <link href="../index.html" rel="canonical" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="../catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="preload" as="style" />
    <link href="../catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="../img/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/_50c36ab27da8bb5ead9c87671a74d2a9.css" />
    <script defer src="../js/script.js"></script>
    <script defer src="../js/jquery-3.6.0.min.js"></script>
    <script defer src="../js/ns-cache/_64b8609b55b5e3556b172af674a9b309.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="main-table">
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Цена</th>
                <th>Категории</th>
                <th>Картинка</th>
                <th>Наличие</th>
                <th></th>
            </tr>
            <tr>
            <form class="main-table" id="main-form" action="#" method="post">
                <td><input type="text" name="id" id="bd_id" placeholder="Индекс"></td>
                <td><input type="text" name="name" id="bd_name" placeholder="Имя"></td>
                <td><input type="text" name="price" id="bd_price" placeholder="Цена"></td>
                <td><input type="text" name="category" id="bd_category" placeholder="Категории"></td>
                <td><input type="text" name="img" placeholder="Формат (png, jpg, jpeg)"></td>
                <td><select name="available" id="bd_available">
                    <option value="1">В наличии</option>
                    <option value="0">Нет в наличии</option>
                </select></td>
                <td><input type="submit" name="submit" id="bd_sub" value="Добавить"></td>
                <?php
                if (isset($_POST['submit'])) {
                    $id_item = trim($_POST["id"]);
                    $name_item = $_POST["name"];
                    $price_item = trim($_POST["price"]);
                    $category_item = $_POST["category"];
                    $img_item = trim($_POST["img"]);
                    $available_item = trim($_POST["available"]);
                    mysqli_query($conn, "INSERT INTO `items` (`id`, `name`, `price`, `category`, `img`, `available`) VALUES ('$id_item', '$name_item', '$price_item', '$category_item', '$img_item', '$available_item')");
                }
                if (isset($_POST['delete'])) {
                    $elem_id = trim($_POST["elem_del_id"]);
                    mysqli_query($conn, "DELETE FROM `items` WHERE `items`.`id` = '$elem_id'");
                }
            ?>
             </tr> </thead>
            <?php $elems = mysqli_query($conn, "SELECT * FROM items");
           foreach ($elems as $elem) {
            switch (strlen($elem['id'])) {
                case 1:
                    $elem['id'] = '000'.$elem['id'];
                    break;
                case 2:
                    $elem['id'] = '00'.$elem['id'];
                    break;
                case 3:
                    $elem['id'] = '0'.$elem['id'];
                    break;
                default:
                    break;
            }
                if ($img = glob($dir_img.$elem['id'].'.*')) {
                    $img = basename($img[0]);
                } else {
                    $img = 'null.png';
                }   
            ?>
                <tr>
                    <td><?= $elem['id'] ?></td>
                    <td><?= $elem['name'] ?></td>
                    <td><?= $elem['price'] ?> руб.</td>
                    <td><?= $elem['category'] ?></td>
                    <td><img src="../img/tovaru/<?=$img?>" alt="Товар <?= $elem['id'] ?>"></td>
                    <td><?php 
                        if ($elem['available'])
                            echo 'В наличии';
                        else
                            echo 'Нет в наличии';
                    ?></td>
                    <td>
                        <input onclick="del_elem(<?=$elem['id']?>)" type="submit" name="delete" id="bd_del" value="Удалить">
                    </td>
                </tr>
            <?php }; ?>
            <script>
                    function del_elem(id) {
                        document.getElementById("elem_del_id").value = id;
                    }
                </script>
                <input type="hidden" name="elem_del_id" id="elem_del_id" value="-">
            </form>
        </table>
    </div>

    <!-- ===================================================================================== -->

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <div class="container-module">
                    <div class="title-module"><span>Перчатки</span></div>
                    <div class="product-slider">
                        <div class="container-modules latest_gv latest_grid0">
                            <?php 
                                foreach ($elems as $elem) {
                                    switch (strlen($elem['id'])) {
                                        case 1:
                                            $elem['id'] = '000'.$elem['id'];
                                            break;
                                        case 2:
                                            $elem['id'] = '00'.$elem['id'];
                                            break;
                                        case 3:
                                            $elem['id'] = '0'.$elem['id'];
                                            break;
                                        default:
                                            break;
                                    }
                                        if ($img = glob($dir_img.$elem['id'].'.*')) {
                                            $img = basename($img[0]);
                                        } else {
                                            $img = 'null.png';
                                        }   
                            ?>
                            <style>
                                .item{
                                    display: none;
                                }
                            </style>
                            <div class="item no-slider col-xs-12 col-sm-6 col-md-4 col-lg-1-5" id="hide-items">
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
                                        <a href="#"> <!-- FIXME '#' Сделать ссылку на элемент -->
                                            <img src="../img/tovaru/<?=$img?>" alt='<?=$elem['name']?>' title="<?=$elem['name']?>" class="img-responsive lazyloaded">
                                        </a>
                                    </div>

                                    <div class="caption">
                                        <div class="product-name">
                                            <a href="#"><?= $elem['name']?></a> <!-- FIXME Сделать ссылку на элемент -->
                                        </div>
                                        <div class="product-model"><?= $elem['id']?></div>
                                        <div class="rating">
                                            <span class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>

                                                <span class="quantity-reviews">
                                                    <!-- FIXME Сделать ссылку на элемент -->
                                                    <a data-placement="right" data-toggle="tooltip" title="" href="#" data-original-title="отзывов">0</a> 
                                                </span>
                                            </span>
                                        </div>
                                        <div class="quantity_plus_minus">
                                            <div class="quantity_cont">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-quantity-minus" onclick="" type="button">-</button>
                                                    </span>
                                                    <input id="input_quantity_mod_latest_grid06243" class="form-control input-number-quantity6243" name="quantity" size="2" value="1">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-quantity-plus" onclick="" type="button">+</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="actions">
                                            <div class="cart">
                                                <button class="btn btn-general" type="button" onclick="">
                                                    <i class="fa fa-shopping-basket"></i><span>В корзину</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="actions-quick-order">
                                            <div class="quick-order">
                                                <button class="btn btn-fastorder " type="button" data-toggle="tooltip" onclick="" title="" data-original-title="Купить в 1 клик">
                                                    <i class="fa fa-shopping-bag fa-fw"></i> Купить в 1 клик
                                                </button>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <?php 
                                };
                            ?>
                        </div>
                        <div class="showmore-latest0 box-showmore">
                            <div class="ajaxloadingLatest"></div>
                            <span data-nextpage="2" class="latest-ajax-load0" id="show_more">Показать еще</span>
                        </div>
                    </div>

                    <!-- ПОКАЗАТЬ ЕЩЁ -->
                    <script>
                                var itemms = document.querySelectorAll('.item');
                                show__more = document.getElementById('show_more');
                                var ajaxloadingLatest = document.querySelector('.ajaxloadingLatest');
                                nn = 5;
                                function MoreShow(n){
                                    for(var i=0; i < itemms.length; i++){
                                        if(i < nn){
                                            itemms[i].style.display = 'block';
                                            ajaxloadingLatest.classList.add('spin-ajax');
                                            if(nn === itemms.length) {
                                                show__more.style.display = 'none';

                                            }
                                        }else{
                                            break;
                                        }
                                    }
                                }
                                MoreShow(nn);
                                show__more.onclick = function(e){
                                    e.preventDefault();
                                     nn += 5;
                                     MoreShow(nn);
                                }
                    </script>
                    <script>
                document.addEventListener("DOMContentLoaded", function(event) {                       
                            $(document).on('click', '.latest-ajax-load0', function () {
                            $.ajax({
                                url: 'add_items.php?route=extension/module/latest_grid/getNextPage',
                                type: 'post',
                                dataType: 'html',
                                success: function (data) {
                                    $data = $(data);
                                    var $products = $data.find('.latest_grid0 > div.item'); // в родителе ищем блок товара
                                    $('.latest_grid0').append($products); // ебашим его после каждого блока
                                }
                            });
                        })
                    }); 
                    </script>
                            <!-- КОНЕЦ ПОКАЗАТЬ ЕЩЁ -->

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            $('.latest_grid0').each(function () {
                            if ($(".latest_grid0").parents("#column-left, #column-right, .position-no-owl").length) {
                                var items = $(this).children('div.item');
                                items.removeClass('col-xs-12 col-sm-6 col-md-4 col-lg-3');
                                items.addClass('col-xs-12 col-sm-12 col-md-12 col-lg-12');
                            }
                        });

                        if (!$(".latest_grid0").parents("#column-left, #column-right, .position-no-owl").length) {
                        }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>


    <!-- ===================================================================================== -->

</body>

</html>