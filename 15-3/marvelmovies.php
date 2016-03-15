<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1>Marvel Movies</h1>
<?php
$db = marvelmovies;
$sql = "SELECT * FROM marvelmovies";
$result = mysqli_query($db, $sql);

while($row = $result -> fetch_array()) {
    $movieTitle = $row['title'];
    echo "<p>" . $movieTitle . "</p>";
}

?>


</body>
</html>




