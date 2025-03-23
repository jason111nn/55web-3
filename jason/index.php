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
        main{
            flex-direction: column;
        }
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
        <div id="carousel" class="carousel slide" data-interval="1500" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/01.jpg" alt="">
                    <div class="carousel-caption">
                        <h5>Carousel-1</h5>
                        <p>carousel1carousel1carousel1carousel1carousel1carousel1carousel1carousel1</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/02.jpg" alt="">
                    <div class="carousel-caption">
                        <h5>Carousel-2</h5>
                        <p>carousel2carousel2carousel2carousel2carousel2carousel2carousel2carousel2</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/03.jpg" alt="">
                    <div class="carousel-caption">
                        <h5>Carousel-3</h5>
                        <p>carousel3carousel3carousel3carousel3carousel3carousel3carousel3carousel3</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" data-target="#carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" data-target="#carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <div id="event-info">
            <h2>活動資訊</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat quod, natus laboriosam minima eos cupiditate consequatur provident sint atque praesentium nam rerum reiciendis! Rem modi doloremque aspernatur accusantium nihil inventore.</p>
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
    <script>

    </script>
</body>
</html>