<?php

include "../../connect.php";



$email = filterRequest("email");

$verfiycode = rand(10000 , 99999);

$data = array(
    "users_verfiycode" => $verfiycode 
) ;

updateData("admin" , $data , "admin_email = '$email'" ) ;

SendEmail($email , "Your Verfiy Code From BlubleStore" , "Your Verfiy Code Is $verfiycode ");

