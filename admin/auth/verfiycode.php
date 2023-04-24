<?php

include "../../connect.php";


$email = filterRequest("email") ;
$verfiy = filterRequest("verfiycode") ;


$stmt = $con->prepare("SELECT * FROM admin WHERE admin_email = '$email' AND admin_approve = '$verfiy' ") ;

$stmt->execute() ;

$count = $stmt->rowCount() ;

if ($count > 0){
 $data = array("admin_approve" => "1") ;

   updateData("admin" , $data , "users_email = '$email'") ;

}else { 
printFailure(" verfiy code is not correct");
}
