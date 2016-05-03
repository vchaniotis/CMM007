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
            <div style="height: 220px; overflow-y: auto;">
                <?php
                include("connection.php");
                $sql = "SELECT * FROM bugs";
                if(!empty($_GET["id"])){
                    $id = $_GET["id"];
                    $sql = "SELECT * FROM bugs WHERE bugID = '$id'";
                }
                elseif(!empty($_GET["category"])) {
                    $category = $_GET["category"];
                    $sql = "SELECT * FROM bugs WHERE BugCategory = '$category'";
                }

                $result = mysqli_query($db, $sql);

                while($row = $result -> fetch_array()) {
                    $movieTitle = $row['bugName'];
                    echo "<p>" . $movieTitle . "</p>";
                    $year = $row['BugSummary'];
                    echo "<p>" . $year . "</p>";
                    $studio = $row['BugCategory'];
                    echo "<p>" . $studio . "</p>";
                }
                ?>
            </div>
        </content>
    </div>
    <footer>Designed by Chaniotis Vasileios 2016</footer>
</div>
</body>
</html>