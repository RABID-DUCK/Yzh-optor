<?php
    $servername = "localhost";
    $database = "yzh-optor";
    $username = "root";
    $password = "";
    // Создаем соединение
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Проверяем соединение
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo '<div class="connect_php good">Connected successfully</div>';
