<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
    <h1>Hello</h1>
    <?php
    include("connection.php");
    echo $_GET['username'];
    echo $_GET['password'];


    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($db, $sql);

    while($row = $result -> fetch_array()) {
        $user = $row['username'];
        echo "<p>" . $user . "</p>";
    }
    ?>

</body>
</html>