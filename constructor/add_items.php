<?php
require_once 'connect.php';
$dir_img = __DIR__ . './../img/tovaru/';
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
        <form class="main-table" id="main-form" action="#" method="post">
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
                        <td><input type="text" name="id" id="bd_id" placeholder="Индекс"></td>
                        <td><input type="textarea" name="name" id="bd_name" placeholder="Имя"></td>
                        <td><input type="text" name="price" id="bd_price" placeholder="Цена"></td>
                        <td><select type="text" name="category" id="bd_category" placeholder="Категории">
                                <?php
                                $first_categorys = mysqli_query($conn, "SELECT * FROM `category`");
                                foreach ($first_categorys as $ct) { ?>
                                    <option <?php if ($ct['first_id'] == trim($_POST["category"])) echo 'selected'?> value="<?= $ct['first_id'] ?>">
                                    <?= $ct['third_name'] ?> &gt; <?= $ct['second_name'] ?> &gt; <?= $ct['first_name'] ?>
                                </option>
                                <?php
                                };
                                ?>
                            </select>

                        </td>
                        <td><input type="text" name="img" placeholder="Имя файла.(png, jpg, jpeg)"></td>
                        <td><select name="available" id="bd_available" class="actual">
                                <option value="1">В наличии</option>
                                <option value="0">Нет в наличии</option>
                            </select></td>
                        <td><input type="submit" name="add" id="bd_sub" value="Добавить"></td>
                        <?php
                        if (isset($_POST['add'])) {
                            $id_item = trim($_POST["id"]);
                            $name_item = $_POST["name"];
                            $price_item = trim($_POST["price"]);

                            switch (strlen($id_item)) {
                                case 1:
                                    $search_img = '000' . $id_item;
                                    break;
                                case 2:
                                    $search_img = '00' . $id_item;
                                    break;
                                case 3:
                                    $search_img = '0' . $id_item;
                                    break;
                                default:
                                    $search_img = $id_item;
                                    break;
                            }
                            $img_item = trim($_POST["img"]);
                            if ($_POST['img'] != '') {
                                $img_item = $_POST['img'];
                            } elseif ($img = glob($dir_img . $search_img . '.*')) {
                                $img_item = basename($img[0]);
                            } else {
                                $img_item = 'null.png';
                            }

                            $available_item = trim($_POST["available"]);
                            $category_item = trim($_POST["category"]);
                            $ct_item = mysqli_fetch_all(mysqli_query($conn, "SELECT `second_id`, `third_id` FROM `category` WHERE `first_id` = '$category_item'"))[0];
                            mysqli_query($conn, "INSERT INTO `items` (`id`, `name`, `price`, `first_id`, `second_id`, `third_id`, `img`, `available`) VALUES ('$id_item', '$name_item', '$price_item', '$category_item', '$ct_item[0]', '$ct_item[1]', '$img_item', '$available_item')");
                        }
                        if (isset($_POST['delete'])) {
                            $elem_id = trim($_POST["elem_del_id"]);
                            mysqli_query($conn, "DELETE FROM `items` WHERE `items`.`id` = '$elem_id'");
                        }
                        ?>
                    </tr>
                </thead>
            </table>
            <div class="scroll">
                <table>
                    <tbody>
                        <?php $elems = mysqli_query($conn, "SELECT items.id, items.name, items.price, category.first_name, category.second_name, category.third_name, items.img, items.available FROM category INNER JOIN items ON category.first_id = items.first_id;");
                        foreach ($elems as $elem) {
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
                            <tr>
                                <td><?= $elem['id'] ?></td>
                                <td><?= $elem['name'] ?></td>
                                <td><?= $elem['price'] ?> руб.</td>
                                <td> <?= $elem['third_name'] ?> &gt; <?= $elem['second_name'] ?> &gt; <?= $elem['first_name'] ?></td>
                                <td><img src="../img/tovaru/<?= $elem['img'] ?>" alt="Товар <?= $elem['id'] ?>"><?= $elem['img'] ?></td>
                                <td><?php
                                    if ($elem['available'])
                                        echo 'В наличии';
                                    else
                                        echo 'Нет в наличии';
                                    ?></td>
                                <td>
                                    <input onclick="del_elem(<?= trim($elem['id'], $characters = '0') ?>)" type="submit" name="delete" id="delete" value="Удалить">
                                </td>
                            </tr>
                        <?php }; ?>
                        <script>
                            function del_elem(id) {
                                document.getElementById("elem_del_id").value = id;
                            }
                        </script>
                        <input type="hidden" name="elem_del_id" id="elem_del_id" value=<?= $elem['id'] ?>>
                    </tbody>
                </table>
            </div>
        </form>
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
                                if ($img = glob($dir_img . $elem['id'] . '.*')) {
                                    $img = basename($img[0]);
                                } else {
                                    $img = 'null.png';
                                }
                            ?>
                                <style>
                                    .item {
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
                                            <a href="#">
                                                <!-- FIXME '#' Сделать ссылку на элемент -->
                                                <img src="../img/tovaru/<?= $img ?>" alt='<?= $elem['name'] ?>' title="<?= $elem['name'] ?>" class="img-responsive lazyloaded">
                                            </a>
                                        </div>

                                        <div class="caption">
                                            <div class="product-name">
                                                <a href="#"><?= $elem['name'] ?></a>
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
                                                    <button class="btn btn-fastorder " type="button" data-toggle-buy data-original-title="Купить в 1 клик">
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
                            <style>
                                .modalka-buy{
                                    display: block;
                                    opacity: 1;
                                    background-color: #f9f9f9;
                                    border: 1px solid #dfe4eb;
                                    border-radius: 4px;
                                    width: 600px;
                                    height: 520px;
                                    position: absolute;
                                    top: 50%;
                                    left: 25%;
                                }
                                .modalka-buy #close-call{
                                    color: black;
                                    z-index: 21321;
                                    font-size: 49px;
                                }
                                .buy-hidden{
                                    opacity: 0.7;
                                    filter: blur(4px);
                                }
                                .ebat{
                                    display: none;
                                }
                                .modalka-buy button.btn-callback{
                                    background-color: #47c843;
                                    border-color: #2cad28;
                                    border-style: solid;
                                    border-width: 1px 1px 2px;
                                    color: #fff;
                                    font-size: 13px;
                                    padding: 8px 20px;
                                    text-transform: uppercase;
                                    font-weight: bold;
                                }
                                .modalka-buy button.btn-callback:hover{
                                    opacity: 0.8;
                                    font-weight: 700;
                                }
                                @media (max-width: 800px){
                                    .modalka-buy{
                                        width: auto;
                                        left: 10;
                                    }
                                }
                            </style>
                            
                            <script>
                                 document.addEventListener("DOMContentLoaded", function(event) {
                                $('[data-toggle-buy]').click(function() {
                                    $('.container').toggleClass('buy-hidden');
                                   
                                });   
                                // $('[close-buy]').click(function () {
                                //         $('.modalka-buy').toggleClass('ebat');
                                //     });           
                            });
                            </script>

                    <script>
                        var itemms = document.querySelectorAll('.item');
                        show__more = document.getElementById('show_more');
                        var ajaxloadingLatest = document.querySelector('.ajaxloadingLatest');
                        nn = 5;

                        function MoreShow(n) {
                            for (var i = 0; i < itemms.length; i++) {
                                if (i < nn) {
                                    itemms[i].style.display = 'block';
                                    ajaxloadingLatest.classList.add('spin-ajax');
                                    if (nn === itemms.length) {}
                                } else {
                                    break;
                                }
                            }
                        }

                        MoreShow(nn);
                        show__more.onclick = function(e) {
                            e.preventDefault();
                            nn += 5;
                            MoreShow(nn);
                        }
                    </script>
                    <script>
                        document.addEventListener("DOMContentLoaded", function(event) {
                            // let item = $('.container-modules');
                            //             let show_more = $('#hide-items');
                            //             let n = 5;
                            //             function showMore_(n){
                            //                 for(let i=0; i<item.length; i++){

                            //                     $(item[i]).slice(5).toggleClass('item_hidden');
                            //                     if(n===item.length) $(show_more).attr('display', 'none');

                            //             }
                            //         };
                            $('.item').slice(3);

                            $(document).on('click', '.latest-ajax-load0', function() {
                                $.ajax({
                                    url: 'add_items.php?route=extension/module/latest_grid/getNextPage',
                                    type: 'post',
                                    dataType: 'html',
                                    beforeSend: function() {
                                        $('.showmore-latest0 .ajaxloadingLatest').addClass('spin-ajax');
                                    },
                                    complete: function() {
                                        $('.showmore-latest0 .ajaxloadingLatest').removeClass('spin-ajax');
                                    },
                                    success: function(data) {
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
                            $('.latest_grid0').each(function() {
                                if ($(".latest_grid0").parents("#column-left, #column-right, .position-no-owl").length) {
                                    var items = $(this).children('div.item');
                                    items.removeClass('col-xs-12 col-sm-6 col-md-4 col-lg-3');
                                    items.addClass('col-xs-12 col-sm-12 col-md-12 col-lg-12');
                                }
                            });

                            if (!$(".latest_grid0").parents("#column-left, #column-right, .position-no-owl").length) {}
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>

        <div class="modalka-buy ebat" >
        <button title="Close (Esc)" type="button" class="mfp-close" id="close-call" close-buy>×</button>
        <div class="col-sm-12" style="margin-top: 50px;">	
			<div class="well well-sm products" style="margin-top:10px;">
				<div class="product">
					<div class="row">
						<div class="col-xs-12 col-sm-5">
							<div class="image">
								<img src="../img/tovaru/<?= $img ?>" alt="<?= $elem['name'] ?>" width="130px" height="100px">							</div>
							<div class="pr-name quick-cell">
								<div class="quick-cell-content">
                                <?= $elem['name'] ?>								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-7">
							<div class="col-xs-6 quantity_quickorder quick-cell" style="margin-top: 20px;">
							<div class="quick-cell-content pquantity" >
								<div class="input-group popup-quantity" >
									<span class="input-group-btn">
										<input class="btn btn-update-popup" type="button" id="decrease_quickorder" value="-" onclick="btnminus_quickorder(1);recalculateprice_quickorder();">									
									</span>
									<input type="text" class="form-control input-sm qty_quickorder" name="quantity" id="htop_quickorder" size="2" value="1">
									<span class="input-group-btn">
										<input class="btn btn-update-popup" type="button" id="increase_quickorder" value="+" onclick="btnplus_quickorder(1);recalculateprice_quickorder();">
									</span>
								</div>
							</div>
						</div>
						<script>
							function btnminus_quickorder(minimum){
								var $input = $('#htop_quickorder');
								var count = parseInt($input.val()) - parseInt(minimum);
								count = count < parseInt(1) ? parseInt(1) : count;
								$input.val(count);
								$input.change();										
							}
							function btnplus_quickorder(minimum){
								var $input = $('#htop_quickorder');
								var count = parseInt($input.val()) + parseInt(minimum);
								$input.val(count);
								$input.change();
							};	
							</script>
							<div class="col-xs-6 text-center quick-cell" style="margin-top: 20px;">
								<div class="quick-cell-content">
									<div class="price_fast"><span id="formated_price_quickorder" data-price="24.9600"><?= $elem['price'] ?> руб.</span></div>
									    <input type="hidden" id="price_tax_plus_options" name="price_tax" value="24.96">
										<input type="hidden" id="price_no_tax_plus_options" name="price_no_tax" value="24.96">	
										<input id="total_form" type="hidden" value="24.96" name="total_fast">																		
								</div>
							</div>
						</div>						
					</div>
				</div>	
			</div>
		</div>
        <div class="popup-center">
                        <form id="callback_data" data-ajax-submit="" enctype="multipart/form-data" method="post">
                            <div class="col-xs-12">
                                <div class="form-group sections_block_rquaired">
                                    <div class="input-group margin-bottom-sm">
                                        <input id="contact-name" class="form-control contact-name" type="text" placeholder="Ваше имя" value="" name="name">
                                        <span class="input-group-addon"><i class="icon-append-1 fa fa-user fa-fw"></i></span>
                                    </div>
                                    <div id="error_name_callback" class="error_callback"></div>
                                </div>
                                <div class="form-group sections_block_rquaired">
                                    <div class="input-group margin-bottom-sm">
                                        <input id="contact-phone" class="form-control contact-phone" type="text" placeholder="Ваш телефон" value="" name="phone">
                                        <span class="input-group-addon"><i class="icon-append-1 fa fa-phone-square fa-fw"></i></span>
                                    </div>
                                    <div id="error_phone_callback" class="error_callback"></div>
                                </div>
                                <div class="form-group sections_block">
                                    <div class="input-group margin-bottom-sm">
                                        <input id="contact-email" class="form-control contact-email" type="text" placeholder="Email" value="" name="email_buyer">
                                        <span class="input-group-addon"><i class="icon-append-1 fa fa-envelope fa-fw"></i></span>
                                    </div>
                                    <div id="error_email_callback" class="error_callback"></div>
                                </div>
                                <div class="form-group sections_block">
                                    <div class="input-group margin-bottom-sm">
                                        <input id="contact-comment" class="form-control contact-comment" type="text" placeholder="Комментарий" value="" name="comment_buyer">
                                        <span class="input-group-addon"><i class="icon-append-1 fa fa-comment fa-fw"></i></span>
                                    </div>
                                    <div id="error_comment_callback" class="error_callback"></div>
                                </div>

                                <input type="hidden" id="callback_url" value="" name="url_site">
                            </div>


                            <div class="anytext-callback marb col-xs-12 text-center"></div>
                        </form>
                        <div class="popup-footer">
                        <div class="col-xs-12 text-center">
                            <button onclick="sendCallback();" type="submit" class="btn-callback ladda-button" data-style="expand-left"><span class="ladda-label">Оформить заказ</span></button>
                        </div>
                    </div>
                    </div>
        </div>

    <!-- ===================================================================================== -->

</body>

</html>