<?php
require('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

$pdo = require('util/getPdo.php');

$sql = "DELETE FROM RichestPeople WHERE Id = :Id";

$statement = $pdo->prepare($sql);

$statement->bindValue(':Id', $_GET['Id'], PDO::PARAM_INT);
$res = $statement->execute();

if ($res) {
    echo "Deleted";
    header('Refresh:1; url=read.php');
} else {
    echo "Not deleted";
    header('Refresh:1; url=read.php');
}


