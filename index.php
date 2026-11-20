
<?php
require "dbconnect.php";

$sql = "SELECT * FROM artiklar ORDER BY id DESC";
$result = $connection->query($sql);
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
    <p>News from Central City</p>
    <a href="login.php">Login for admins</a>
</header>

<main>

    <h2>Latest News</h2>

    <?php
    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $text = explode("\n\n", $row['artikel_text']);

            echo "<article>";

            echo "<h2>" . $row['artikel_headline'] . "</h2>";

            if ($row['img_path'] != "") {
                echo "<img src='" . $row['img_path'] . "' width='300'>";
            }

            echo "<p>" . $text[0] . "</p>";

            echo "<a href='artikel.php?id=" . $row['id'] . "'>Read Full Article</a>";

            echo "</article>";
        }

    } else {
        echo "<p>No news available.</p>";
    }
    ?>

</main>

</body>
</html>

<?php
$connection->close();
?>
