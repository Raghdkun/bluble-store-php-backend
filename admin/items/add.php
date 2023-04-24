<?php 

include '../../connect.php';

$msgError = array()  ;

$table = "items";

$name = filterRequest("name");

$namear = filterRequest("namear"); 

$desc = filterRequest("desc"); 

$descar = filterRequest("descar"); 

$count = filterRequest("count");  

$price = filterRequest("price"); 

$discount = filterRequest("discount"); 

$catid = filterRequest("catid"); 

$datenow = filterRequest("datenow"); 
 

$imagename = imageUpload( "../../upload/items" , "files") ;
$imagename2 = imageUpload( "../../upload/items" , "files2") ;
$imagename3 = imageUpload( "../../upload/items" , "files3") ;


$data = array( 
"items_name"            => $name,
"items_name_ar"         => $namear,
"items_desc"            => $desc,
"items_desc_ar"         => $descar,
"items_image"           => $imagename,
"items_image2"           => $imagename2,
"items_image3"           => $imagename3,
"items_count"           => $count,
"items_price"           => $price,
"items_descount"        => $discount,
"items_status"          => "1",
"items_cat"             => $catid,
"items_date"            => $datenow
);

insertData($table , $data);

