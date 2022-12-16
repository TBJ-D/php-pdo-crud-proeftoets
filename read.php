<?php

  require('config.php');

  $dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

  $pdo = require('util/getPdo.php');

  $sql = "USE php_pdo_crud_proeftoets";

  $statement = $pdo->prepare($sql);

  $sql = "SELECT * FROM RichestPeople ORDER BY Networth desc";

  $statement = $pdo->prepare($sql);

  $statement->execute();

  $result = $statement->FetchAll(PDO::FETCH_OBJ);

  $rows = "";
  foreach ($result as $info) {
    $rows .= "<tr>
                <td>$info->Name</td>
                <td>$info->Networth</td>
                <td>$info->Age</td>
                <td>$info->MyCompany</td>
                <td>
                    <a href='delete.php?Id=$info->Id'>
                        <img src='img/b_drop.png' alt='kruis'>
                    </a>
                </td>
              </tr>";
  }
  



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Persoonsgegevens</h3>
    <br>
    <br>
    <table border='1'>
        <thead>
            <th>Naam</th>
            <th>Vermogen</th>
            <th>Leeftijd</th>
            <th>Bedrijf</th>
            <th>Delete</th>
        </thead>
        <tbody>
            <?= $rows; ?>
        </tbody>
    </table>
</body>
</html>

