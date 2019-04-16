<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
require_once __DIR__ . '/../bootstrap.php';

$resp = $db->query('SELECT * FROM apontamentos');

print_r($resp);