
<?php


include "../connect.php";


$usersid = filterRequest("usersid");
$itemsid = filterRequest("itemsid");
$color = filterRequest("size");
$size = filterRequest("color");




$count  = getData("cart", "cart_itemsid = $itemsid AND cart_usersid = $usersid AND cart_orders = 0" ,null  , false );


$data = array(
    "cart_usersid" =>  $usersid,
    "cart_itemsid" =>  $itemsid,
    "cart_orderscolor" =>  $color,
    "cart_orderssize" =>  $size,


   

    
);

insertData("cart", $data);
 