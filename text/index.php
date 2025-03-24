<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2025 國際交響樂團演奏會(ISOC)</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header id="navbar">
        <h2 id="site-title">2025 國際交響樂團演奏會(ISOC)</h2>
        <img src="./img/logo.png" alt="Logo" id="logo">
        <a href="home.html" id="home">Home</a>
        <a href="news.html" id="news">News</a>
        <a href="performance.html" id="performance">Performance</a>
        <a href="tickets.html" id="tickets">Tickets</a>
        <a href="search.html" id="search">Search</a>
        <a href="admin.php" id="admin">Admin</a>
    </header>
    <main>
        <div id="carousel" data-ride="carousel" data-interval="1500" class="carousel slide">
            <ul class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <?php
                    $servername = "你的資料庫伺服器";
                    $username = "你的帳號";
                    $password = "你的密碼";
                    $dbname = "你的資料庫名稱";
    
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("資料庫連線失敗：" . $conn->connect_error);
                    }
                
                    // 取出前三筆圖片 (Base64)
                    $sql = "SELECT img, title, text FROM carousel ORDER BY id ASC LIMIT 3";
                    $result = $conn->query($sql);
                    $active = "active";
                    
                    if ($result->num_rows < 3) {
                        die("錯誤：資料庫內的圖片數量不足 3 張！");
                    }
                
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="carousel-item '.$active.'">';
                        echo '<img src="data:image/png;base64,' . $row['img'] . '" alt="Slide Image">';
                        echo '<div class="carousel-caption">';
                        echo '<h5>'.$row['title'].'</h5>';
                        echo '<p>'.$row['text'].'</p>';
                        echo '</div>';
                        echo '</div>';
                        $active = ""; // 只有第一張要 active
                    }
                
                    $conn->close();
                ?>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </main>
    <footer id="share-info">
        <img src="./img/facebook.png" alt="fb" id="fb">
        <img src="./img/google.png" alt="google" id="google">
        <h2 id="footer">Copyright © 2025 ISOC All Rights Reserved</h2>
    </footer>
    <script src="./js/jquery.js"></script>
    <script src="./js/jquery-ui.min.js"></script>
    <script src="./js/bootstrap.js"></script>
</body>
</html>
