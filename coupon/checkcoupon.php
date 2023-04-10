<?php


include "../connect.php";


$couponName = filterRequest("couponname");

$now = date("y-m-d H:i:s");


getData("coupon", "coupon_name = '$couponName' AND coupon_expireddate > '$now' AND coupon_count > 0 ");
