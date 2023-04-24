<?php

include "connect.php";

$alldata = array();

$alldata['status'] = "success";

$homeoffers = getAllData("homeoffers" ," 1 = 1 ", null, false);

$alldata['homeoffers'] = $homeoffers;

$categories = getAllData("cat", null, null, false);

$alldata['cat'] = $categories;

$items = getAllData("itemstopselling" ," 1 = 1 ORDER BY countitems DESC ", null, false);

$alldata['items'] = $items;



echo json_encode($alldata);
