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
$sql = "SELECT * FROM marvelmovies";
$result = mysqli_query($db, $sql);

while($row = $result -> fetch_array()) {
    $movieTitle = $row['title'];
    echo "<p>" . $movieTitle . "</p>";
    $year = $row['yearReleased'];
    echo "<p>" . $year . "</p>";
    $studio = $row['productionStudio'];
    echo "<p>" . $studio . "</p>";
    $notes = $row['notes'];
    echo "<p>" . $notes . "</p>";
}
?>

</body>
</html>
