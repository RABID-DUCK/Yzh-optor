<?php

require "connect.php";

$text_kor = $_POST['text_cart'];

$local2 = json_decode($_POST['localStorage']);
        $local = $_POST['localStorage'];
        var_dump($local);
        var_dump($local2);

?>
<head>
<script src="js/jquery-3.6.0.min.js"></script>
</head>
<body>
    
</body>
    <ul class="dropdown-menu pull-right" id="korzina">
        <li>
            <p class="text-center">scsdfsdfsd</p>
        </li>
    </ul>

    <script>
         document.addEventListener("DOMContentLoaded", function(event) {
            var datak = JSON.stringify(localStorage);
            $.ajax({
            url: '../constructor/korzina_buy.php',
            type: 'POST',
            data: {
                'localStorage': datak
            },
            success: function(response)
            {
                console.log(response);
            }
        });
  });
       
        

    </script>