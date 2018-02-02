<?php

require_once('ai.php');

$raw_data = file_get_contents('php://input');
$data = json_decode($raw_data);
$result = AI::process($data->content);
echo json_encode($result);
