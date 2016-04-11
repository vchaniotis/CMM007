<?php
/**
 * Created by PhpStorm.
 * User: 1510996
 * Date: 11/04/2016
 * Time: 09:53
 */

$username = $_POST["name"];
$password = $_POST["password"];

if ($username == "username" && password == "password")
{
    setcookie('access_level_cookie', 'standarduser');
}

header('Location: loggedin.php');

?>