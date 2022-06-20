<?php
    $servername = "localhost";
    $database = "yzh-optor";
    $username = "root";
    $password = "";
    // Создаем соединение
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Проверяем соединение
    mysqli_set_charset($conn, "utf8");
    if (!$conn) {
        header("Location: ../constructor/404.php"); 
        die("Connection failed: " . mysqli_connect_error());
    }
