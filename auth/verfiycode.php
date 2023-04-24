<?php

include "../connect.php" ;
$email = filterRequest("email") ;
$verfiy = filterRequest("verfiycode") ;


$stmt = $con->prepare("SELECT * FROM users WHERE users_email = '$email' AND users_approve = '$verfiy' ") ;

$stmt->execute() ;

$count = $stmt->rowCount() ;

if ($count > 0){
 $data = array("users_approve" => "1") ;

   updateData("users" , $data , "users_email = '$email'") ;

}else { 
printFailure(" verfiy code is not correct");
}
