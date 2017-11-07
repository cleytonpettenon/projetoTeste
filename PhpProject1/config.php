<?php

require 'environment.php';

$config = array();

if (ENVIRONMENT == 'development') {
    define("URL_BASE", 'http://localhost/projetoteste/PhpProject1/');
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    define("URL_BASE", 'http://localhost/projetoteste/PhpProject1/3123');
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhosts23';
    $config['dbuser'] = 'rootsd';
    $config['dbpass'] = '3123123';
}


global $db;

try {
    
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);
    
    
} catch (PDOException $ex) {
    echo "ERRO! ".$ex->getMessage();
    exit;
}