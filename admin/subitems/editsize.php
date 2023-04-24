<?php

include '../../connect.php';

$table = "cat";

$id = filterRequest("id");

$name = filterRequest("name");









$data = array(
    "itemssizes_title" => $name,

);





updateData($table, $data, "itemssizes_id = $id");
