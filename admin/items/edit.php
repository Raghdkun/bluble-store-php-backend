<?php

include '../../connect.php';

$table = "items";

$id = filterRequest("id");

$name = filterRequest("name");

$namear = filterRequest("namear"); 

$desc = filterRequest("desc"); 
$descar = filterRequest("descar"); 

$count = filterRequest("count"); 
$active = filterRequest("active"); 
$price = filterRequest("price"); 
$discount = filterRequest("discount"); 

$catid = filterRequest("catid"); 

$imageold  = filterRequest("imageold");
$imageold2  = filterRequest("imageold2");
$imageold3  = filterRequest("imageold3");



$res =   imageUpload("../../upload/items", "files");
$res2 =   imageUpload("../../upload/items", "files2");
$res3 =   imageUpload("../../upload/items", "files3");


if ($res == "empty" & $res2 == "empty" & $res3 == "empty" ) {
    $data = array( 
        "items_name"       => $name,
        "items_name_ar"    => $namear,
        "items_desc"            => $desc,
        "items_desc_ar"         => $descar,
        "items_count"           => $count,
        "items_price"           => $price,
        "items_descount"        => $discount,
        "items_status"          => $active, 
        "items_cat"             => $catid 
        );
} else {
   deleteFile("../../upload/items"  , $imageold) ; 
   deleteFile("../../upload/items"  , $imageold2) ; 
   deleteFile("../../upload/items"  , $imageold3) ; 

   $data = array( 
    "items_name"       => $name,
    "items_name_ar"    => $namear,
    "items_desc"            => $desc,
    "items_desc_ar"         => $descar,
    "items_count"           => $count,
    "items_price"           => $price,
    "items_descount"        => $discount,
    "items_status"          => $active,
    "items_image"           => $res,
    "items_image2"           => $res2,
    "items_image3"           => $res3,
    "items_cat"             => $catid 
    );
}



updateData($table, $data, "items_id = $id");