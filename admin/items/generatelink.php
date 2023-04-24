<?php

include '../../connect.php';


$itemsid = filterRequest("id") ;


getData("items", "items_id = $itemsid ", null);

generateDeepLink($itemsid);