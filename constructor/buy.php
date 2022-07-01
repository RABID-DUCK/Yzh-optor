<?php
session_start();
    $namer = $_SESSION['n_t'];
    $counter = $_SESSION['count_t'];
    $pricer = $_SESSION['price_t'];

    $email = "yzho-optor@yzh-optor.ru";
    $tema_email = "Купить товар"; // tema


    $text = ""; // text polz
    $num_email = ""; // nomer telephone
    $user_email = ""; // pochta usera
    $description_email = ""; // opisaniye

    if(isset($_POST["name_polz"])){
        $text = $_POST["name_polz"];
    }
    if(isset($_POST["phone_polz"])){
        $num_email = $_POST["phone_polz"];
    }
    if(isset($_POST["email_buyer"])){
        $user_email = $_POST["email_buyer"];
    }
    if(isset($_POST["comment_buyer"])){
        $description_email = $_POST["comment_buyer"];
    }

echo "<script>";
if(mail($email, $tema_email, "Купить товар: ".$namer."\r\nВ количестве: x".$counter." штук > "
    ."На сумму: ".$pricer."руб".
    "\n\r Имя покупателя: ".$text."\n\rНомер телефона: ".$num_email."\n\r".
    "Почта покупателя: ".$user_email."\n\r"."Комментарий к форме: "."
    $description_email.\n\r")){
    echo "alert('Звонок запрошен. С вами свяжутся в ближайшее время!');";
    echo "window.location.href = '../index.php'";
}
    else{
        echo "alert('Упс! Что-то пошло не так :/ ');";
        echo "window.location.href = '404.php'";
    }
echo "</script>";