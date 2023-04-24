<?php

include '../../connect.php';

$msgError = array();

$table = "itemsvariations";


$itemsid = filterRequest("itemsid");
$colorid = filterRequest("colorid");
$sizeid = filterRequest("sizeid");
$quantity = filterRequest("quantity");








$data = array(
    "itemsvariations_itemsid" => $itemsid,
    "itemsvariations_color_id" => $colorid,
    "itemsvariations_size_id" => $sizeid,
    "itemsvariations_quantity" => $quantity,


);

insertData($table, $data);
