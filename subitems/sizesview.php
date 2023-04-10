<?php

include "../connect.php" ;

$itemsid = filterRequest("id");

$data = array(
    "itemsvariations_itemsid" => $itemsid, 
     


);

getAllData("sizesitemsview", "itemsvariations_itemsid = '$itemsid'" ) ;

