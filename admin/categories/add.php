<?php 

include '../../connect.php';

$msgError = array()  ;

$table = "cat";

$name = filterRequest("name");

$namear = filterRequest("namear"); 

$imagename = imageUpload( "../../upload/categories" , "files") ;

$data = array( 
"cat_name" => $name,
"cat_namear" => $namear,
"cat_image" => $imagename,
);

insertData($table , $data);