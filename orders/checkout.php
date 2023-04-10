<?php

include "../connect.php";


$table = "orders";
$usersid = filterRequest("usersid");
$address =  filterRequest("address");
$image = filterRequest("image");
$couponid = filterRequest("couponid");
$price = filterRequest("price");
$disscountCoupon = filterRequest("disscountCoupon");
$color = filterRequest("color");
$size = filterRequest("size");

$totalprice = $price;

$savedtotal = $totalprice ;

$now = date("y-m-d H:i:s");


$checkcoupon = getData("coupon", "coupon_id = '$couponid' AND coupon_expireddate > '$now' AND coupon_count > 0  ", null,  false);

if ($checkcoupon > 0) {
    $totalprice = $totalprice - $price * $disscountCoupon / 100;
    $stmt = $con->prepare("UPDATE `coupon` SET  `coupon_count`= `coupon_count` - 1  WHERE coupon_id = '$couponid' ");
    $stmt->execute();
}


$data = array(
    "orders_userid" => $usersid,
    "orders_address" => $address,
    "orders_image"  =>   $image,
    "orders_coupon"  =>   $couponid,
    "orders_price"  =>   $price,
    "orders_totalprice"  => $totalprice,
    "orders_savedprice"  => $totalprice,
    "orders_color"  => $color,
    "orders_size"  => $size,

    

    





);






$count = insertData("orders", $data, false);

if ($count > 0) {

    $stmt = $con->prepare("SELECT MAX(orders_id) from orders ");
    $stmt->execute();
    $maxid = $stmt->fetchColumn();

    $data = array("cart_orders" => $maxid);

    updateData("cart", $data, "cart_usersid = $usersid  AND cart_orders = 0 ");
}

$change = 1 ;
$onDelete = array(

    "address_delete" => $change,
);
updateData("address", $onDelete, "address_usersid = $usersid AND address_delete = 0 " , false);