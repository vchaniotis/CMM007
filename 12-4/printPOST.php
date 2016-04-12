<?php
/**
 * Created by PhpStorm.
 * User: 1510996
 * Date: 12/04/2016
 * Time: 09:57
 */
$title = $_POST["title"];
$content = $_POST["content"];
$choice = $_POST["category"];

echo "<article>
        <h1>$title</h1>
        <p>$content</p>
        <strong>$choice</strong>
      </article>";

?>