<?php

require "connect.php";

if(isset($_POST['search'])){
    $name = $_POST['search'];
    $elems = mysqli_query($conn, "SELECT * FROM `items` WHERE `name` LIKE '%name%' LIMIT 7");
    echo "<ul>";
    foreach($elems as $result){
        ?>
        <li onclick="fill(<?php $result['name'] ?>)">
            <a href="">
                <?php $result['name']?>
            </a>
        </li>

            <?php 
        }
    }
    ?>
</ul>