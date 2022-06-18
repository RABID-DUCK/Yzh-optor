<?php


     $name_email = "Заказать обратный звоно"; // tema 
     $num_email = trim($_POST['phone']); // nomer telephone
     $email = "Yuzh.Optor@mail.ru";

     $description_email = htmlspecialchars($_POST['comment_buyer']); // opisaniye
     $description_email = trim($description_email);

     $when_call_email = ""; // kogda zvonit

     $user_email = trim($_POST['email_buyer']); // pochta usera
     $user_email = "=?utf-8?B?".base64_encode($user_email)."?=";

     $headers = "FROM: $user_email" . "\r\n" .
    "Replay-To: $user_email" . "\r\n" .
    "X-Mailer: PHP/" .phpversion();

     if(mail($email, $name_email, "$description_email \n\r $num_email", $headers)){
        echo "<script>";
        echo "alert('Сообщение отправлено');";
        echo "</script>";
     }

?>