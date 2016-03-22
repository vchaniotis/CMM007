<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1>Database</h1>

<?php
include("connection.php");
if ($db -> connect_errno) {
    die('Connectfailed['.$db -> connect_error.']');
}
$sql_query = "SELECT * FROM marvelmovies";
$result = $db->query($sql_query);
while($row = $result->fetch_array()){
    echo "<p>" . $row['title'] . "</p>";
}
$result->close();
$db->close();


?>


</body>
</html>
