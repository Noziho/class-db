<?php
require __DIR__ . '/Config.php';
require __DIR__ . '/DB_Connect.php';


$database = DB_Connect::dbConnect();
$database2 =DB_Connect::dbConnect();
var_dump($database);
var_dump($database2);