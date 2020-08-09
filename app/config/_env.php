<?php

define('REAL_PATH', realpath(__DIR__.'/../../'));

require_once __DIR__.'/../../vendor/autoload.php';

//Env
$dotenv = Dotenv\Dotenv::createImmutable(REAL_PATH);
$dotenv->load();
