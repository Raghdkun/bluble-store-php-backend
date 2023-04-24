<?php

include "../../connect.php";

$id = filterRequest("id");





deleteData("itemssizes", "itemssizes_id = $id ");
