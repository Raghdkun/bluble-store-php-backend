<?php

include "./connect.php" ; 


$imagename = filterRequest("imagename") ;
$image = base64_decode($_POST['base64']) ;
file_put_contents("" . $imagename , $image) ;

