<?php

require_once 'vendor/autoload.php';

use Dotenv\Dotenv;
use PCP\DBase;

try {
    $dotenv = Dotenv::create(__DIR__);
    $dotenv->load();
    $dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS']);

    $db = DBase::getInstance();
    //$conn = $db->getConnection();
    
 } catch (Exception $e) {
    throw new \RuntimeException('Could not find a .env file.');
 }