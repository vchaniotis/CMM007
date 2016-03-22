<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1>All movies</h1>

<?php
include("connection.php");
if ($db -> connect_errno) {
    die('Connectfailed['.$db->connect_error.']');
}



?>


</body>
</html>
