<?php

include "../connect.php";

$orderid = filterRequest("ordersid");

$userid = filterRequest("usersid");

$data = array(
    "orders_status" => 3
);

updateData("orders", $data, "orders_id = $orderid AND orders_status = 2");

// sendGCM("success" , "The Order Has been Approved" , "users$userid" , "none" , "orders"); 

insertNotify("تم ارسال الطلب", "تم توصيل الطلب بنجاح الرجاء مراجعة مكتب القدموس خلال الايام القادمة", $userid, "users$userid", "none",  "orders");