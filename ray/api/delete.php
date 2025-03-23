<!-- <style>body { background: #000; } </style> -->
<?php
include("./init.php");

$id = $_GET["id"];

$conn -> query("DELETE FROM `tickets` WHERE `id`=$id");

// header("../admin.php");
echo "<script>
location.href = '../admin.php';
</script>";

?>