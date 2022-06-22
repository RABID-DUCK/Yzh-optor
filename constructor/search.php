<?php

if(isset($_POST['submit'])){ 
    if(isset($_GET['go'])){ 
    if(preg_match("/[A-Z  | a-z]+/", $_POST['name'])){ 
    $name=$_POST['name']; 
    require_once "connect.php";
    $sql = "SELECT img, name, price FROM items WHERE  name LIKE '%" . $name . "%' OR name LIKE '%" . $name  ."%'";
    //- Запустить запрос к функции MySQL Query
    $result= mysqli_query($conn, $sql); 
    while($row=mysqli_fetch_array($result)){ 
        $FirstName  =$row['img']; 
        $LastName=$row['name']; 
        $ID=$row['price']; 
        //-Вывод результата в виде массива 
        echo "<ul>n"; 
        echo "<li>" . "<a href=\search.php\.id=$name>$name .$price </a></li>";
        echo "<li>" . "<a href=\search.php\.id=$name>".$name .$price ."</a></li>";
        echo "</ul>"; 
} 
    } 
    else{ 
    echo  "<p> Пожалуйста, введите поисковый запрос </p>"; 
    } 
    } 
} 