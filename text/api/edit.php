<?php
include("db.php");

switch ($_POST["op"]) {
    case 'carousel':
        $id = $_POST["id"];
        $image = $_FILES["image"];

        $imageData = file_get_contents($image["tmp_name"]);
        $base64 = base64_encode($imageData);

        $sql = "UPDATE carousel SET img = :img WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["img" => $base64, "id" => $id]);

        echo "<script>alert('圖片更新成功！'); window.location.href = '../admin.php';</script>";
        break;

    case 'performance':
        $image = $_FILES["image"];
        $title = $_POST["title"];
        $text = $_POST["text"];

        $imageData = file_get_contents($image["tmp_name"]);
        $base64 = base64_encode($imageData);

        $sql = "UPDATE performance SET img = :img, title = :title, text = :text WHERE id = 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["img" => $base64, "title" => $title, "text" => $text]);

        echo "<script>alert('圖片更新成功！'); window.location.href = '../admin.php';</script>";
        break;
    case 'tickets':
        
        break;
}
?>
