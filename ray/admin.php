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
    <link rel="stylesheet" href="./css/tickets.css">
    <link rel="stylesheet" href="./css/admin.css">
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

    <div id="tabs">
        <a role="button" href="#"><i class="fas fa-fw fa-database"></i> data</a>
        <a role="button" href="#content"><i class="fas fa-fw fa-sliders-h"></i> content</a>
    </div>
    <main id="data">
        <dialog>
            <form method="dialog"><button><i class="fas fa-fw fa-2x fa-times"></i></button></form>
            <form id="ticketsform" method="post" action="./api/edit.php">
            <label for="first">
                <input placeholder="." type="text" name="first" id="first">
                <span>First name</span>
            </label>
            <label for="last">
                <input placeholder="." type="text" name="last" id="last">
                <span>Last name</span>
            </label>
            <label for="phone">
                <input placeholder="." type="text" name="phone" id="phone">
                <span>Phone</span>
            </label>
            <label for="pwd">
                <input placeholder="." type="text" name="pwd" id="pwd">
                <span>Password</span>
            </label>
            <input type="hidden" name="id">
        </form>
        <div id="btns">
            <button>Delete <i class="fas fa-fw fa-trash-alt"></i></button>
            <button>Edit <i class="fas fa-fw fa-edit"></i></button>
        </div>
        </dialog>
        <div class="results" id="panel">
            <?php
                include("./api/init.php");

                $data = $conn -> query("SELECT * FROM `tickets` WHERE 1");

                while ($r = $data -> fetch_array()) {
                    echo "<div>
                    <p>$r[1]</p>
                    <p>$r[2]</p>
                    <p>$r[3]</p>
                    <p>$r[4]</p>
                    <button data-id='$r[0]'><i class='fas fa-fw fa-2x fa-cog'></i></button>
                    </div>";
                }
            ?>
        </div>
    </main>
    <main id="content">
        <div>
            <label role="button" for="c1">
                Carousel image 1
                <input type="file" id="c1">
            </label>
            <label role="button" for="c2">
                Carousel image 2
                <input type="file" id="c2">
            </label>
            <label role="button" for="c3">
                Carousel image 3
                <input type="file" id="c3">
            </label>
        </div>
        <div>
            <label role="button" for="img">
                Performance Information image
                <input type="file" id="img">
            </label>
            <input type="text" id="header" placeholder="header">
            <textarea type="text" id="content" placeholder="content" cols="30" rows="10"></textarea>
        </div>
    </main>

    <hr>
    <footer id="share-info">
        <img id="fb" src="./img/facebook.png">
        <p id="footer">Copyright © 2025 ISOC All Rights Reserved</p>
        <img id="google" src="./img/google.png">
    </footer>

    <script src="./js/tabs.js"></script>
    <script src="./js/data.js"></script>
    <script src="./js/content.js"></script>
</body>
</html>
