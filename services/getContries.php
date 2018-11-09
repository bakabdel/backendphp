<?php
require '../classes/ContryRepositery.php';
$contries = ContryRepositery::getContries();
header('Content-type:application/json');
echo json_encode($contries);

