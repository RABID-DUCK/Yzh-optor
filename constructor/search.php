<?php
require "connect.php";

    $name = $_POST['search'];
    $elems = mysqli_query($conn, "SELECT * FROM `items` WHERE `name` LIKE '%$name%' LIMIT 5");?>
    <ul class="list_search"><?php
        foreach($elems as $result){ ?>
            <li>
                <img src="../img/tovaru/<?= $result['img'] ?>" alt="<?=$result['img']?>" width="50px" height="50px">
                <span class="search_item" style="color: black; cursor: pointer;" onclick="item_click_search(<?=$result['id'] ?>, event)" style="z-index: 12;">
                    <?= $result['name']?>
                </span>
            </li>

                <?php 
            }
            echo "<li style='background-color: #fff; padding: 2px; font-size: 12px;'>
            <a style='color: #2b8cdb;' class='search-view-all-result' href='../category.php?id=$result[first_id]&ct=first_id'>Просмотреть все результаты</a></li>";
           
?>
    </ul>
    <span class='input-group-btn button_search' id='ajara'>
            <a href='../category.php?id=<?= $result['first_id']?>&ct=first_id' type='button' class='btn btn-search'><i class='fa fa-search'></i></a>
    </span>;
    

    <style>
    #ajara{
        position: absolute;
        z-index: 23232323;
        right: 58px;
        top: 25px;
    }
        .list_search{
            list-style: none;
            position: absolute;
            top: 67px;
            background-color: #fff ;
            z-index: 11231231231230;
            width: 367px;
            border: 4px;
        }
        .list_search img{
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .list_search li{
            background: #f6f6f6;
            border-top: 1px solid #f4f4f4;
            border-bottom: 1px solid #f4f4f4;
           margin-top: 2px;
           margin-bottom: 2px;
           font-weight: 400;
           color: #333;
           margin-left: -24px;
        }

         /* @media (max-width: 1200px){
            #ajara{
                right: 108px;
            }
        } */
    

    </style>