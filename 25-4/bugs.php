<?php
/**
 * Created by PhpStorm.
 * User: 1510996
 * Date: 25/04/2016
 * Time: 09:23
 */

if ($_SERVER['REQUEST_METHOD'] === 'GET') {



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Index</title>
</head>
<body>
<div id="wrap">
    <header>
        <div id="header">
            <img src="logo.png">
            <div id="section">
                <h1>BugTracker</h1>
                <p id="subtitle">Keeping track of all the pesky little bugs</p>
            </div>
        </div>
    </header>
    <div id="mainbody">
        <div id="navigation">
            <ul>
                <li><a href="bugs.html">All Bug Items</a></li><br>
                <li><a href="bugs.html">Android Bugs</a></li><br>
                <li><a href="bugs.html">iOS Bugs</a></li><br>
                <li><a href="bugs.html">Windows Bugs</a></li><br>
                <li><a href="bugs.html">Insert Bugs</a></li><br>
            </ul>
        </div>
        <content>
            <div id="form">
                <form method="POST">
                    <div id="name">Bug Name <input type="text" name="name" id="boxname"><br></div>
                    <div id="summary">Bug Summary <textarea rows="3" cols="50" name="summary" id="boxsummary"></textarea><br></div>
                    <div id="category">Bug Category <input type="text" name="category" id="boxcategory"><br></div>
                    <input type="submit" value="Submit" id="button">
                </form>
            </div>
        </content>
    </div>
    <footer>Designed by Chaniotis Vasileios 2016</footer>
</div>
</body>
</html>

<?php
    }
    elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

    }

