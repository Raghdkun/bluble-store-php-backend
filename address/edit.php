<?php


include "../connect.php";

$table = "address";
$addressid = filterRequest("addressid");
$name = filterRequest("name");
$city = filterRequest("city");
$shpping = filterRequest("shipping");
$data = array(
    "address_usersid" => $usersid,
    "address_name" => $name,
    "address_city" => $city,
    "address_shipping" => $shpping,


);

updateData($table, $data, "addressid =  $addressid ");
