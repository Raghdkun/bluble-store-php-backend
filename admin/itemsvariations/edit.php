<?php

include '../../connect.php';

$table = "itemsvariations";

$id = filterRequest("id");

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





updateData($table, $data, "itemsvariations_id = $id");
