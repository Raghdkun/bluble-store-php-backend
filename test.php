<?php

// $notAuth = "" ; 

include "connect.php";

$imagename = filterRequest("imagename");
$itemid = filterRequest("itemid") ;

$data = array(
    "items_image2" => "https://bluplestore.com/ecommerce/upload/items/$imagename"
);


// sendGCM("hi"  , "How Are You" , "users" , "" , "") ; 

// echo "Send"  ;

updateData("items", $data, "Items_id = '$itemid'"  , true);
