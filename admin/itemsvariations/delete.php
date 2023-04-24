<?php

include "../../connect.php";

$id = filterRequest("id");





deleteData("itemsvariations", "itemsvariations_id = $id ");
