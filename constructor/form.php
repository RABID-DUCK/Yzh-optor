<?php
     $email = "onetaphack@gmail.com";

     $tema_email = "Заказать обратный звонок"; // tema 
     $text = $_POST['text_polz']; // text polz
     $num_email = $_POST['phone_polz']; // nomer telephone
     $user_email = $_POST['email_buyer']; // pochta usera
     $description_email = $_POST['comment_buyer']; // opisaniye
     $when_call_email = $_POST['time_callback_on']; // kogda zvonit

     if(mail($email, $tema_email, "Текст: ".$text."Номер телефона: ".$num_email."\n\r".
     "Почта покупателя: ".$user_email."\n\r"."Комментарий к форме: ".".
     $description_email.\n\r"."Когда перезвонить: ".$when_call_email)){
        echo "<script>";
        echo "alert('Звонок запрошен. С вами свяжутся в ближайшее время!');";
        echo "window.location.href = '../index.php'";
        echo "</script>";
     }
     else{
        echo "<script>";
        echo "alert('Упс! Что-то пошло не так :/ ');";
        echo "window.location.href = '404.php'";
        echo "</script>";
     }

?>