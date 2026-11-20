
<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("Location: login.php");
    exit();
}

require "dbconnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $headline = trim($_POST['artikel_headline']);
    $intro = trim($_POST['artikel_intro']);
    $text = trim($_POST['artikel_text']);
    $image = trim($_POST['img_path'] ?? "");

    $stmt = $connection->prepare(
        "INSERT INTO artiklar
        (artikel_headline, artikel_text, img_path)
        VALUES (?, ?, ?)"
    );

    $fullText = $intro . "\n\n" . $text;

    $stmt->bind_param("sss", $headline, $fullText, $image);

    if ($stmt->execute()) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Something went wrong: " . $stmt->error;
    }

    $stmt->close();
}

$connection->close();
?>
