<?php
require_once($_SERVER['DOCUMENT_ROOT']."/lib.php");

const HOST = 'localhost';
const DBNAME = 'test';
const USERNAME = 'root';
const PASSWORD = '';

$opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
$db = "mysql:host=".HOST.";dbname=".DBNAME.';charset:UTF-8';

try {
    $databaseHandle = new PDO($db, USERNAME, PASSWORD, $opt);
} catch(PDOException $e){
    die('Mysql error ' . $e->getMessage());
}

