<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>

<?php
/**
 * Created by PhpStorm.
 * User: 1510996
 * Date: 22/03/2016
 * Time: 10:02
 */
include("connection.php");
$db = marvelmovies;
$sql = "SELECT * FROM superheros";
$result = mysqli_query($db, $sql);

while($row = $result -> fetch_array()) {
    $superheroID = $row['superheroID'];
    echo "<p>" . $superheroID . "</p>";
    $firstName = $row['firstName'];
    echo "<p>" . $firstName . "</p>";
    $lastName = $row['lastName'];
    echo "<p>" . $lastName . "</p>";
    $mainSuperpower = $row['mainSuperpower'];
    echo "<p>" . $mainSuperpower . "</p>";
}
?>

</body>
</html>
