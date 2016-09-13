<?php
require_once($_SERVER['DOCUMENT_ROOT']."/database.php");

$formName = clearString($_POST['name']);
$formComment = clearString($_POST['message']);

$getAllData = "SELECT username, comment, date FROM comment";

$getAllDataHandler = $databaseHandle->query($getAllData);

$readyDada = $getAllDataHandler->fetchAll();

$stmt = $databaseHandle->prepare("INSERT INTO comment (username, comment, date) VALUES (:username, :comment, :date)");

$date = date('H:i d-m-Y');

$stmt->bindParam(':username', $formName);
$stmt->bindParam(':comment', $formComment);
$stmt->bindParam(':date', $date);

$stmt->execute();

header('Location: /');