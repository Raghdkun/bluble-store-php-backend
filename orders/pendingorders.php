<?php 

include "../connect.php" ; 


$usersid = filterRequest("id") ; 


getAllData('ordersview' , "orders_userid = '$usersid' AND Orders_status != 3 "); 

 
    
?>