<?php
/**
 * Created by PhpStorm.
 * User: 1510996
 * Date: 14/03/2016
 * Time: 10:10
 */

define('DB_SERVER', 'db1510996');
define('DB_USERNAME', 'user');
define('DB_PASSWORD', 'pass');
define('DB_DATABASE', 'users');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

?>