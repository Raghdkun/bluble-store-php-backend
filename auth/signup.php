<?php

include "../connect.php";

$username = filterRequest("username");
$password = filterRequest("password");
$email = filterRequest("email");
$phone = filterRequest("phone");
$verfiycode = rand(10000 , 99999);

$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

$stmt = $con->prepare(" SELECT * FROM users WHERE users_email = ? OR users_phone =? ");
$stmt->execute(array($email , $phone ));
$count = $stmt->rowCount();

if ($count > 0){
    PrintFailure();
} else {
    $data = array(
        "users_name" => $username,
        "users_password" => $hashedPassword,
        "users_email" => $email,
        "users_phone" => $phone,
        "users_verfiycode" => $verfiycode,
    );
    SendEmail($email , "Your Verfiy Code From BlubleStore" , "Your Verfiy Code Is $verfiycode ");

    insertData("users" , $data);
}