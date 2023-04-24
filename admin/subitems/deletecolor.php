<?php

include "../../connect.php";

$id = filterRequest("id");





deleteData("itemscolors", "itemscolors_id = $id ");
