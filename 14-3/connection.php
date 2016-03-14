<?php
/**
 * Created by PhpStorm.
 * User: 1510996
 * Date: 14/03/2016
 * Time: 10:10
 */

define('DB_SERVER', 'eu-cdbr-azure-north-d.cloudapp.net');
define('DB_USERNAME', 'baaf8be42fef31');
define('DB_PASSWORD', 'aec19d19');
define('DB_DATABASE', 'db1510996');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

?>