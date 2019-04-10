<?php
require 'vendor/autoload.php';

error_reporting(E_ALL); ini_set('display_errors', TRUE);
$app = new \App\Application();

$app->start();
var_dump($app->db);