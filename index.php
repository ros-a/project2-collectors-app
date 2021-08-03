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
</head>
<body>
<h1>INSECT COLLECTION</h1>

<?php

printInsects($allInsects, $numberOfInsects);

?>

</body>
</html>