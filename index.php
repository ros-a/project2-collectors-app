<?php

require_once "functions.php";

$db = new PDO('mysql:host=db; dbname=collectorsApp', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT * FROM `insect-collection`;');
$query->execute();
$allInsects = $query->fetchAll();

$numberOfInsects = count($allInsects);


?>

<!DOCTYPE html>

<html lang="eng">
<head>
    <title>INSECT COLLECTION</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" href="https://use.typekit.net/olf2ixx.css">
    <link rel="stylesheet" href="https://use.typekit.net/olf2ixx.css">
</head>
<body>
    <div class="content-wrapper">
        <img class="green-leaf" src="images/green_leaf.svg">
        <h1>
           <span class="title-insect">INSECT</span>
           <span class="title-collector">COLLECTOR</span>
        </h1>
        <div class="container-insects">
         <?php
              foreach ($allInsects as $insect) {
                   echo printInsect($insect);
              }
         ?>
        </div>
    </div>
</body>
</html>