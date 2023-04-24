<?php

include '../../connect.php';

$msgError = array();

$table = "itemscolors";

$name = filterRequest("name");

$namear = filterRequest("namear");



$data = array(
    "itemscolors_name" => $name,
    "itemscolors_name_ar" => $namear,

);

insertData($table, $data);
