<?php
     $email = "onetaphack@gmail.com";

     $tema_email = "Заказать обратный звоно"; // tema 
     $num_email = trim(@$_POST['phone']); // nomer telephone
     $user_email = trim($_POST['email_buyer']); // pochta usera
     $user_email = "=?utf-8?B?".base64_encode($user_email)."?=";
     $description_email = htmlspecialchars($_POST['comment_buyer']); // opisaniye
     $description_email = trim($description_email);
     $when_call_email = $_POST['time_callback_on']; // kogda zvonit

     // кодировка

     $tema_email = "Заказать обратный звоно"; // tema 
     $num_email = trim($num_email); // nomer telephone
     $user_email = trim($user_email); // pochta usera
     $user_email = "=?utf-8?B?".base64_encode($user_email)."?=";
     $description_email = htmlspecialchars($description_email); // opisaniye
     $description_email = trim($description_email);
     $when_call_email = $when_call_email; // kogda zvonit


     // всо

     $headers = "FROM: $user_email" . "\r\n" .
    "Replay-To: $user_email" . "\r\n" .
    "X-Mailer: PHP/" .phpversion();

     if(mail($email, $tema_email, "Номер телефона: ".$num_email."\n\r".
     "Почта покупателя: ".$user_email."\n\r"."Комментарий к форме: ".".
     $description_email.\n\r"."Когда перезвонить: ".$when_call_email,
      $headers)){
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