<?php

require_once "functions.php";

$db = new PDO('mysql:host=db; dbname=collectorsApp', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT * FROM `insect-collection`;');
$query->execute();
$allInsects = $query->fetchAll();

        if(isset($_POST['submit'])) {
            $commonName = $_POST['common-name'];
            $species = $_POST['species'];
            $dateSpotted = $_POST['date-spotted'];
            $countrySpotted = $_POST['country-spotted'];
            $insectSize = $_POST['insect-size'];
            $uploadsDir = 'uploads/';
            $targetFile = basename($_FILES["upload-image"]["name"]);
            $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
            $name = $_FILES['upload-image']['name'];
            $filePath = $uploadsDir . $targetFile;
            $addInsect = $db->prepare("INSERT INTO `insect-collection` (`common_name`, `species`, `date_spotted`, 
            `country_spotted`, `size`, `image_path`) VALUES (:commonName, :species, :dateSpotted, :countrySpotted, :insectSize, :filePath)");
            $addInsect->bindParam(':commonName', $commonName);
            $addInsect->bindParam(':species', $species);
            $addInsect->bindParam(':dateSpotted', $dateSpotted);
            $addInsect->bindParam(':countrySpotted', $countrySpotted);
            $addInsect->bindParam(':insectSize', $insectSize);
            $addInsect->bindParam(':filePath', $filePath);
            $errorMessages = [];
            if (!preg_match_all('/^[A-Za-z\s]+$/', $commonName)) {
                $errorMessages[] = "You did not enter a valid name.";
            }
            if (!preg_match_all('/^[A-Za-z\s]+$/', $species)) {
                $errorMessages[] = "You did not enter a valid species.";
            }
            if (!preg_match_all('/^[A-Za-z\s]+$/', $countrySpotted)) {
                $errorMessages[] = "You did not enter a valid country.";
            }
            if (!preg_match_all('/(\\d)+$\s?(mm)?/', $insectSize)) {
                $errorMessages[] = "You did not enter a valid insect size.";
            }
            if (substr($insectSize, -2) !== 'mm') {
                $insectSize .= ' mm';
            }
            if ($_FILES["upload-image"]["size"] > 10000000) {
                $errorMessages[] = "Your image file is too large. The max size is 10 MB.";
            }
            if ($imageFileType !== "jpg" && $imageFileType !== "jpeg") {
                $errorMessages[] = "Only JPG or JPEG image files are allowed.";
            }
            if (empty($errorMessages)) {
                move_uploaded_file($_FILES['upload-image']['tmp_name'], $uploadsDir . $name);
                $addInsect->execute();
                echo '<div class="success-message"><p>Your insect was uploaded successfully and is added to the collection!</p>';
                echo '<a href="index.php"><button class="pop-up-button">Great, thanks!</button></a></div>';
            } else {
                echo '<div class="error-message"><p>Sorry, your insect could not be added to the collection!</p>';
                if(count($errorMessages) > 1) {
                    echo "<p>There were a few problems:</p><ul>";
                    } elseif (count($errorMessages) === 1) {
                    echo "<p>There was a problem:</p>";
                   }
                foreach ($errorMessages as $errorMessage) {
                    echo '<li>' . $errorMessage . '</li></ul>';
                }
                echo '<a href="#add-insect-form"><button class="pop-up-button">Try again!</button></a></div>';
                echo '</div';
            }
        }
?>

<!DOCTYPE html>

<html lang="en-gb">
<head>
    <title>INSECT COLLECTION</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="styles.css">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" href="https://use.typekit.net/olf2ixx.css">
    <link rel="stylesheet" href="https://use.typekit.net/olf2ixx.css">
</head>
<body>
    <div class="content-wrapper">
        <img class="green-leaf" src="images/green_leaf.svg" alt="">
        <h1>
           <span class="title-insect">INSECT</span>
           <span class="title-collector">COLLECTOR</span>
        </h1>
        <section class="add-insect-option">
            <p>Did you spot a new insect?!</p>
            <a href="#add-insect-form">
                <button class="add-now-button">add now!</button>
            </a>
        </section>
        <section class="container-insects">
         <?php
              foreach ($allInsects as $insect) {
                   echo printInsect($insect);
              }
         ?>
        </section>
        <form id="add-insect-form" class="add-insect-form" action="index.php" method="post" enctype="multipart/form-data">
            <h2>add a new insect</h2>
            <label for="common-name">common name</label>
            <input type="text" id="common-name" name="common-name" placeholder="e.g. polyester bee">
            <label for="species">species</label>
            <input type="text" id="species" name="species" placeholder="if known, enter scientific name">
            <label for="date-spotted">date spotted</label>
            <input type="date" id="date-spotted" name="date-spotted" required>
            <label for="country-spotted">country spotted</label>
            <input type="text" id="country-spotted" name="country-spotted" placeholder="where did you spot this insect?" required>
            <label for="insect-size">Size in mm</label>
            <input type="text" id="insect-size" name="insect-size" placeholder="what is the approximate size in mm?" required>
            <label for="upload-image" class="upload-image-button">Upload Image</label>
            <input type="file" name="upload-image" id="upload-image">
            <button name="submit" class="add-to-collection-button">add to collection!</button>
        </form>
    </div>
</body>
</html>