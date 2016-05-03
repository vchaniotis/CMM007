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
                    <li><a href="showbugs.php">All Bug Items</a></li><br>
                    <li><a href="showbugs.php?category=Android">Android Bugs</a></li><br>
                    <li><a href="showbugs.php?category=iOS">iOS Bugs</a></li><br>
                    <li><a href="showbugs.php?category=Windows">Windows Bugs</a></li><br>
                    <li><a href="bugs.php">Insert Bugs</a></li><br>
                </ul>
            </div>
            <content>
                <div id="form">
                    <form method="POST">
                        <div id="name">Bug Name <input type="text" name="name" id="boxname" required><br></div>
                        <div id="summary">Bug Summary <textarea rows="3" cols="50" name="summary" id="boxsummary" required></textarea><br></div>
                        <!--<div id="category">Bug Category <input type="text" name="category" id="boxcategory"><br></div>-->
                        <div id="category">Bug Category <select name="category" id="boxcategory">
                                <option value="iOS" selected>iOS</option>
                                <option value="Android">Android</option>
                                <option value="Windows">Windows</option>
                            </select><br></div>
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
    $name = $_POST["name"];
    $summary = $_POST["summary"];
    $category = $_POST["category"];
    include("connection.php");
    $sql = "INSERT INTO bugs(bugName, BugSummary, BugCategory) VALUES ('$name', '$summary', '$category')";
    $result = mysqli_query($db, $sql);


    header("location: showbugs.php?id=" . mysqli_insert_id($db));
}
else {
    header("location: index.php");
}

