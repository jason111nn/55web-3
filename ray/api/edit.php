<!-- <style>body { background: #000; } </style> -->
<?php
include("./init.php");

$id = $_POST["id"];
$data = [
    $_POST["first"],
    $_POST["last"],
    $_POST["phone"],
    $_POST["pwd"],
];

$conn -> query("UPDATE `tickets` SET
                `first` = '$data[0]',
                `last`  = '$data[1]',
                `phone` = '$data[2]',
                `pwd`   = '$data[3]'
                WHERE `id`=$id");

// header("../admin.php");

echo "<script>
location.href = '../admin.php';
</script>";

?>