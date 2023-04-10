<?php

include "../connect.php" ;

$usersid = filterRequest("usersid") ;


getAllData("transaction", "transaction_usersid  = '$usersid' ");