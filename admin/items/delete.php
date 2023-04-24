<?php

include "../../connect.php" ;

$id = filterRequest("id") ; 

$imagename = filterRequest("imagename") ; 
$imagename2 = filterRequest("imagename2") ; 
$imagename3 = filterRequest("imagename3") ; 


deleteFile( "../../upload/items", $imagename) ; 
deleteFile( "../../upload/items", $imagename2) ; 
deleteFile( "../../upload/items", $imagename3) ; 


deleteData("items" , "items_id = $id ") ; 