<?php
require_once 'connect.php';
$dir_img = __DIR__ . './../img/tovaru/';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
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
    <meta property="og:url" content="index.php" />
    <meta property="og:image" content="../img/icon.ico" />
    <meta property="og:site_name" content="Админ панель Yuzh.Optor" />
    <link href="../index.php" rel="canonical" />
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
    <?php         
        $url = $_SERVER["REQUEST_URI"];
        $temp = explode("?", $url)[1];
        $password = explode("=", $temp)[1];
        if ($password == 'jTn4tZztwbvL')
        {
    ?>

    <div class="main-table">
        <form class="main-table" id="main-form" action="#" method="post">
        <?php
            if (isset($_POST['edit'])) {
                $m_id = (int)$_POST['m_id'];
                $m_name = $_POST['m_name'];
                $m_price = (int)$_POST['m_price'];
                $m_first_id = $_POST['m_cat'];
                $m_img = $_POST['m_img'];
                $m_avl = $_POST['m_avl'];
                $edit_id = $_POST['edit_id'];
                $cat = mysqli_fetch_assoc(mysqli_query($conn, "SELECT `first_id`, `second_id`, `third_id` FROM `category` WHERE `first_id` = $m_first_id"));
                mysqli_query($conn, "UPDATE `items` SET `id` = '$m_id', 
                                                        `name` = '$m_name', 
                                                        `price` = '$m_price', 
                                                        `first_id` = '$cat[first_id]', 
                                                        `second_id` = '$cat[second_id]', 
                                                        `third_id` = '$cat[third_id]', 
                                                        `available` = '$m_avl', 
                                                        `img` = '$m_img' 
                                                        WHERE `items`.`id` = $edit_id");
            };
            if (isset($_POST['delete'])) {
                $del_id = $_POST["del_id"];
                mysqli_query($conn, "DELETE FROM `items` WHERE `items`.`id` = $del_id");
            }
            ?>
        <div id="modal_edit" style="display:none;">
        <div>
            <h2>Редактирование товара ***</h2>
            <div>
                <p>ID</p>
                <input name="m_id" type="number" value="-">
            </div>
            <div>
                <p>Название</p>
                <textarea name="m_name">-</textarea>
            </div>
            <div>
                <p>Цена</p>
                <input name="m_price" type="number" value="-">
            </div>
            <div>
                <p>Категория</p>
                <select name="m_cat" type="text" placeholder="Категории">
                    <?php
                    $first_categorys = mysqli_query($conn, "SELECT * FROM `category`");
                    foreach ($first_categorys as $ct) { ?>
                        <option value="<?= $ct['first_id'] ?>">
                        <?= $ct['third_name'] ?> &gt; <?= $ct['second_name'] ?> &gt; <?= $ct['first_name'] ?>
                    </option>
                    <?php
                    };
                    ?>
                </select>
            </div>
            <div>
                <p>Картинка</p>
                <input name="m_img" type="text" value="-">
            </div>
            <div>
                <p>Наличие</p>
                <select name="m_avl" class="actual">
                    <option value="1">В наличии</option>
                    <option value="0">Нет в наличии</option>
                </select>
            </div>
            <div class="btns">
                <button type="submit" name="edit">Принять</button>
                <button type="button" onclick="cancel_edit()">Отменить</button>
            </div> 
        </div>     
    </div>
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
                        <td><input type="number" name="id" id="bd_id" placeholder="Индекс"></td>
                        <td><textarea type="textarea" name="name" id="bd_name" placeholder="Имя" style="width: 310px; height: 60px;"></textarea></td>
                        <td><input type="number" name="price" id="bd_price" placeholder="Цена"></td>
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
                        ?>
                    </tr>
                </thead>
            </table>
            <div class="scroll">
                <table>
                    <tbody>
                        <?php $elems = mysqli_query($conn, "SELECT items.id, items.name, items.price, category.first_id, category.first_name, category.second_name, category.third_name, items.img, items.available FROM category INNER JOIN items ON category.first_id = items.first_id;");
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
                                    <button type="submit" onclick="del_elem(<?= (int)$elem['id'] ?>)" name="delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z"/></svg>
                                    </button>
                                    <button type="button" onclick='edit_elem(<?= (int)$elem["id"] ?>, `<?= $elem["name"] ?>`, <?= $elem["price"] ?>, <?= $elem["first_id"] ?>, `<?= $elem["img"] ?>`, <?=$elem["available"]?>)'>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z"/></svg>
                                    </button>
                                </td>
                            </tr>
                        <?php }; ?>
                    </tbody>
                </table>
            </div>
            <input name="del_id" type="hidden">
            <input name="edit_id" type="hidden">
        </form>
    </div>
    <script src="../js//move.js"></script>
    <?php
    }
    else
    {
        echo "Доступ запрещён";
    }
    ?>
</body>

</html>