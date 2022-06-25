<?php
require "connect.php";

    $name = $_POST['search'];
    $elems = mysqli_query($conn, "SELECT * FROM `items` WHERE `name` LIKE '%$name%' LIMIT 5");?>
    <ul><?php
        foreach($elems as $result){ ?>
            <li>
                <a href="" style="color: black">
                    <?= $result['name']?>
                </a>
            </li>

                <?php 
            }
?>
    </ul>