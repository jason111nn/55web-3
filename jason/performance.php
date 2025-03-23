<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2025 國際交響樂團演奏會(ISOC)</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./img/logo.png">
    <style>

    </style>
</head>

<body>
    <header id="navbar">
        <h1 id="site-title">2025 國際交響樂團演奏會(ISOC)</h1>
        <img src="./img/logo.png" id="logo">
        <a href="home.php" id="home">Home</a>
        <a href="news.html" id="news">News</a>
        <a href="performance.php" id="performance">Performance</a>
        <a href="tickets.html" id="tickets">Tickets</a>
        <a href="search.html" id="search">Search</a>
        <a href="admin.php" id="admin">Admin</a>
    </header>
    <main>
        <div id="performance iformation" class="performance-box">
            <?php
                include("./api/db.php");
                $sql = "SELECT * FROM performance WHERE id = 1";
                $stmt = $pdo->query($sql);
                $images = $stmt->fetchAll();
        
                if (!empty($images)) {
                    $i = 1;
                    foreach ($images as $row) {
                        $base64 = $row['img'];
                        echo "
                            <img src='data:image/png;base64,{$base64}' alt='圖片'>
                            <h5>{$row['title']}</h5>
                            <p>{$row['text']}</p>";
                        $i++;
                    }
                } else {
                    echo "沒資料";
                }
            ?>
            <div>
                
            </div>
        </div>
        <div id="portfolio" class="performance-box">
            <img src="./img/02.jpg" alt="">
            <div>
                <h5>歌手介紹區</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p class="read-text" style="display: none;"> Dolorum tenetur sint reiciendis doloremque adipisci nam
                    provident, voluptates placeat earum? Deleniti soluta fugiat quisquam delectus vitae quae alias ea
                    veritatis doloremque.</p>
                <button class="btn read-btn" onclick="readmore()">Read more</button>
            </div>
        </div>
    </main>
    <footer>
        <div id="share-info">
            <img src="./img/facebook.png" id="fb" alt="">
            <img src="./img/google.png" id="google" alt="">
        </div>
        <h1 id="footer">Copyright © 2025 ISOC All Rights Reserved</h1>
    </footer>
    <script src="./js/jquery.js"></script>
    <script src="./js/jquery-ui.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <!-- <script src="./js/text.js"></script> -->
    <script>
        function readmore() {
            $(".read-text").slideToggle()
            $(".read-btn").text($(".read-btn").text() ? "Read more" : "Read less")
        }
    </script>
</body>

</html>