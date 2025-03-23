<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2025 國際交響樂團演奏會(ISOC)</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        form{
            width: 10vw;
            font-size: 5px;
            padding: 0;
            min-height: 80px;
            input,button{
                font-size: 1vw;
            }
        }
        table{
            overflow: hidden;
            width: 100px;
        }
    </style>
</head>
<body>
    <header id="navbar">
        <h2 id="site-title">2025 國際交響樂團演奏會(ISOC)</h2>
        <img src="./img/logo.png" alt="" id="logo">
        <a href="home.php" id="home">Home</a>
        <a href="news.html" id="news">News</a>
        <a href="performance.php" id="performance">Performance</a>
        <a href="tickets.html" id="tickets">Tickets</a>
        <a href="search.html" id="search">Search</a>
        <a href="admin.php" id="admin">Admin</a>
    </header>
    <main id="panel">
        <div id="carousel-admin">
            <?php
                include("./api/db.php");
                $sql = "SELECT * FROM carousel WHERE id IN (1,2,3)";
                $stmt = $pdo->query($sql);
                $images = $stmt->fetchAll();
        
                if (!empty($images)) {
                    $i = 1;
                    foreach ($images as $row) {
                        $base64 = $row['img'];
                        echo "
                        <div id='C{$i}'>
                            <img src='data:image/png;base64,{$base64}' alt='輪播圖片'>
                            <form action='./api/edit.php' method='POST' enctype='multipart/form-data'>
                                <input type='hidden' name='op' value='carousel'>
                                <input type='hidden' name='id' value='{$row['id']}'>    
                                <input type='file'  name='image' required>
                                <button class='btn' type='submit'>上傳</button>
                            </form>
                        </div>";
                        $i++;
                    }
                } else {
                    echo "沒資料";
                }
            ?>
        </div>
        <div id="performance-admin">
            <form action="./api/edit.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="op" value="performance"><br>
                <input type="file" name="img" required><br>
                <input type="text" name="title" required><br>
                <input type="text" name="text" required><br>
                <button class="btn" type="submit">送出</button>
            </form>
        </div>
        <div id="tickets-admin">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Phone</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("./api/db.php");
                    $sql = "SELECT * FROM carousel WHERE id";
                    $stmt = $pdo->query($sql);
                    $images = $stmt->fetchAll();

                    if (!empty($images)) {
                        $i = 1;
                            foreach ($images as $row) {
                                $base64 = $row['img'];
                                echo "
                                    <tr>
                                        <td>$row('id')</td>
                                        <td>$row('firstname')</td>
                                        <td>$row('lastname')</td>
                                        <td>$row('phone')</td>
                                        <td>$row('password')</td>
                                        <td>
                                            <form action='./api/edit.php' method='post'>
                                                <input type='hidden' name='op' value='tickets'>
                                                <input type='hidden' name='id' value='{$row['id']}'>
                                                <button>修改</button>
                                            </form>
                                            <form action='./api/del.php' method='post'>
                                                <input type='hidden' name='id' value='{$row['id']}'>
                                                <button>刪除</button>
                                            </form>
                                        </td>
                                    </tr>
                                ";  
                                $i++;
                            }
                        } else {
                            echo "沒資料";
                        }
                    ?>
                </tbody>
            </table>
            <form action="./api/tickets.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="op" value="tickets"><br>
                <input type="hideen" name="id" value="" required><br>
                <input type="text" name="title" required><br>
                <input type="text" name="text" required><br>
                <button class="btn" type="submit">送出</button>
            </form>
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