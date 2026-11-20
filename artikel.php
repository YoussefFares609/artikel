
<?php
require "dbconnect.php";

$id = $_GET['id'];

$sql = "SELECT * FROM artiklar WHERE id = $id";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $article = $result->fetch_assoc();
} else {
    echo "Article not found!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Central City Citizen</title>
    <link rel="stylesheet" href="style.css?v=2">
</head>
<body>

<header>
    <h1>Central City Citizen</h1>
    <a href="admin.php">back to admin</a>
</header>

<main>

    <?php
    echo "<article>";

    echo "<h2>" . htmlspecialchars($article['artikel_headline']) . "</h2>";

    if ($article['img_path'] != "") {
        echo "<img src='" . htmlspecialchars($article['img_path']) . "' width='400'>";
    }

    echo "<p>" . nl2br(htmlspecialchars($article['artikel_text'])) . "</p>";

    echo "</article>";
    ?>

    <a href="index.php">Back to Home</a>

</main>

</body>
</html>

<?php
$connection->close();
?>
