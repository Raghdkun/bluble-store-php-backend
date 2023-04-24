<?php

include '../../connect.php';

$table = "cat";

$id = filterRequest("id");

$name = filterRequest("name");

$namear = filterRequest("namear");







$data = array(
    "itemscolors_name" => $name,
    "itemscolors_name_ar" => $namear,
);





updateData($table, $data, "itemscolors_id = $id");
