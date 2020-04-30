<?php
if (isset($_GET['page'])){
    switch ($role) {
        case 'Products_list' :
            require "Controllers/Product_list.php";
            break;

        case 'Product' :
            require "Controllers/Product.php";
            break;

        default :
            require "Controllers/Home.php";
    }
}
else{
    require "Controllers/Home.php";
}
