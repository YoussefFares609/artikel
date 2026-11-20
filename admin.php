
<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("Location: login.php");
    exit();
}

require "dbconnect.php";

$result = $connection->query("SELECT * FROM artiklar ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Central City Citizen</title>
<link rel="stylesheet" href="style.css?v=2">    
</head>
<body>

<header>
    <h1>Central City Citizen</h1>
    <h2>Admin Dashboard</h2>
    <a href="logout.php">Logout</a>
    <a href="index.php">View Public Site</a>
</header>

<main>

    <section>
        <h2>Create New Article</h2>

        <form action="nyheter.php" method="post">

            <label>
                Article Headline
                <input type="text" name="artikel_headline" required>
            </label>

            <label>
                Article Introduction
                <textarea name="artikel_intro" required></textarea>
            </label>

            <label>
                Article Text
                <textarea name="artikel_text" required></textarea>
            </label>

            <label>
                Image Path
                <input type="text" name="img_path"
                placeholder="images/news.jpg">
            </label>

            <button type="submit">Publish Article</button>

        </form>
    </section>

    <section>
    <h2>Manage Articles</h2>

    <?php
    while ($article = $result->fetch_assoc()) {

        echo "<article>";

        echo "<h3>" . htmlspecialchars($article['artikel_headline']) . "</h3>";

        echo "<a href='artikel.php?id=" . $article['id'] . "'>View Article</a>";

        echo "<a href='redigera.php?id=" . $article['id'] . "'>Edit</a>";

        echo "<form action='ta_bort.php' method='post'>";

        echo "<input type='hidden' name='id' value='" . $article['id'] . "'>";

        echo "<button type='submit' onclick=\"return confirm('Delete this article?')\">Delete</button>";

        echo "</form>";

        echo "</article>";
    }
    ?>

</section>

</main>

</body>
</html>

<?php
$connection->close();
?>
