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
 * Time: 10:01
 */
include("connection.php");
$surname = $_POST["surnmane"];
$name = $_POST["name"];
$gender = $_POST["gender"];
$power = $_POST["power"];

$db = superheros;
$sql = "INSERT INTO superheros VALUES ($surname, $name, $gender, $power)";



?>


</body>
</html>