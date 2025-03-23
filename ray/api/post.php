<style>body { background: #000; } </style>
<?php
include("./init.php");

$data = [
    $_POST["first"],
    $_POST["last"],
    $_POST["phone"],
    $_POST["pwd"],
];

$conn -> query("INSERT INTO `tickets`(`first`, `last`, `phone`, `pwd`)
                VALUES ('$data[0]','$data[1]','$data[2]','$data[3]')");

echo "<script>
alert('資料上傳成功！');
location.href = '../home.html';
</script>";

?>