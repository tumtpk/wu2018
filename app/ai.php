<?php

$raw_data = file_get_contents('php://input');
$data = json_decode($raw_data);
var_dump($data);
