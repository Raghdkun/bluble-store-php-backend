<?php

include '../../connect.php';

$msgError = array();

$table = "itemssizes";

$name = filterRequest("name");





$data = array(
    "itemssizes_title" => $name,


);

insertData($table, $data);
