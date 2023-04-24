<?php

include '../../connect.php';

$table = "cat";

$id = filterRequest("id");

$name = filterRequest("name");

$namear = filterRequest("namear");

$imageold  = filterRequest("imageold");


$res =   imageUpload("../../upload/categories", "files");

if ($res == "empty") {
    $data = array(
        "cat_name" => $name,
        "cat_namear" => $namear,
    );
} else {
   deleteFile("../../upload/categories"  , $imageold) ; 
    $data = array(
        "cat_name"    => $name,
        "cat_namear" => $namear,
        "cat_image"   => $res,
    );
}



updateData($table, $data, "cat_id = $id");