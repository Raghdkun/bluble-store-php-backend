<?php

include "../connect.php" ;

$itemsid = filterRequest("id");

$data = array(
    "itemsvariations_itemsid" => $itemsid, 
     


);

getAllData("colorsitemsview", "itemsvariations_itemsid = '$itemsid'" ) ;

