<?php

include "../../connect.php";



$username = filterRequest("username");
$password = sha1($_POST['password']);
$email = filterRequest("email");
$phone = filterRequest("phone");
$verfiycode = rand(10000 , 99999);

$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

$stmt = $con->prepare(" SELECT * FROM `admin` WHERE admin_email = ? OR admin_phone =? ");
$stmt->execute(array($email , $phone ));
$count = $stmt->rowCount();

if ($count > 0){
    PrintFailure();
} else {
    $data = array(
        "admin_name" => $username,
        "admin_password" => $hashedPassword,
        "admin_email" => $email,
        "admin_phone" => $phone,
        "admin_verfiycode" => $verfiycode,
    );
    SendEmail($email , "Your Verfiy Code From BlubleStore" , "Your Verfiy Code Is $verfiycode ");

    insertData("admin" , $data);
}