<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="./libs/jqueryv3.7.1.js"></script>
    <script src="./libs/bootstrap.js"></script>
    <link rel="stylesheet" href="./libs/bootstrap.css">
    <script src="./libs/jquery-uiv1.13.2.js"></script>
    <link rel="stylesheet" href="./libs/jquery-uiv1.13.2.css">
    <link rel="stylesheet" href="./libs/fontawesome.css">
    
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/result.css">
    <title>ISOC</title>
</head>
<body>
    <nav>
        <img id="logo" src="./img/logo.png">
        <h1 id="site-title">2025 國際交響樂團演奏會(ISOC)</h1>
        <ul id="navbar">
            <a tabindex="-1" id="home" href="home.html">Home</a>
            <a tabindex="-1" id="news" href="news.html">News</a>
            <a tabindex="-1" id="performance" href="performance.html">Performance</a>
            <a tabindex="-1" id="tickets" href="tickets.html">Tickets</a>
            <a tabindex="-1" id="search" href="search.html">Search</a>
            <a tabindex="-1" id="admin" href="admin.php">Admin</a>
        </ul>
    </nav>
    <hr>

    <main>
        <a id="back-button" href="./search.html">
            <i class="fas fa-fw fa-2x fa-caret-left"></i>
            重新查詢
        </a>
        <div class="results" id="resulttable">
            <?php
                include("./api/init.php");
                $q = $_GET["q"];

                $data = $conn -> query("SELECT * FROM `tickets` WHERE
                                  `id`      =  '$q'   OR
                                  `first` LIKE '%$q%' OR
                                  `last`  LIKE '%$q%' OR
                                  `phone` LIKE '%$q%' OR
                                  `pwd`   LIKE '%$q%'");

                while ($r = $data -> fetch_array()) {
                    echo "<div>
                    <p>$r[1]</p>
                    <p>$r[2]</p>
                    <p>$r[3]</p>
                    <p>$r[4]</p>
                    </div>";
                }
            ?>
        </div>
    </main>

    <hr>
    <footer id="share-info">
        <img id="fb" src="./img/facebook.png">
        <p id="footer">Copyright © 2025 ISOC All Rights Reserved</p>
        <img id="google" src="./img/google.png">
    </footer>
</body>
</html>
