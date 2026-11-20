
<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}

require "dbconnect.php";

if (isset($_POST['id'])) {

    $id = $_POST['id'];

    $sql = "DELETE FROM artiklar WHERE id = ?";

    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: admin.php");
        exit();
    }

    echo "Something went wrong!";
}

$connection->close();
?>
