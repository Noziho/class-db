<?php
require __DIR__ . '/Config.php';
require __DIR__ . '/SingletonDB.php';


$database = SingletonDB::dbConnect();
$database2 = SingletonDB::dbConnect();
var_dump($database);
var_dump($database2);