<?php
require_once 'connect.php';

$id_item = "";
$name_item = "";
$category_item = "";
$price_item = "";
$img_item = "";

?>


<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Construct</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="add_items">
        <input type="text" name="id" id="bd_id">
        <input type="text" name="name" id="bd_name">
        <input type="text" name="category" id="bd_category">
        <input type="text" name="price" id="bd_category">
        <input type="text" name="img">
        <button>Create</button>
    </div>
</body>

</html>