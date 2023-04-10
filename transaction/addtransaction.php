<?php

include "../connect.php";


$table = "transaction";
$usersid = filterRequest("usersid");
$fullname =  filterRequest("fullname");
$total = filterRequest("total");
$image = filterRequest("image");
$data = array(
    "transaction_usersid" => $usersid,
    
    "transaction_username" => $fullname,
    "transaction_total"  =>   $total,
    "transaction_image"  =>   $image,
    


);
insertData($table, $data);
