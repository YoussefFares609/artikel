
<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}

require "dbconnect.php";

$id = $_GET['id'];

if (isset($_POST['update'])) {

    $headline = $_POST['artikel_headline'];
    $text = $_POST['artikel_text'];
    $image = $_POST['img_path'];

    $sql = "UPDATE artiklar SET
            artikel_headline = ?,
            artikel_text = ?,
            img_path = ?
            WHERE id = ?";

    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sssi", $headline, $text, $image, $id);

    if ($stmt->execute()) {
        header("Location: admin.php");
        exit();
    }
}

$sql = "SELECT * FROM artiklar WHERE id = ?";
$stmt = $connection->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$article = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Article</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Edit Article</h1>
</header>

<main>

    <form method="post">

        <label>
            Article Headline
            <input type="text" name="artikel_headline"
            value="<?php echo htmlspecialchars($article['artikel_headline']); ?>" required>
        </label>

        <label>
            Article Text
            <textarea name="artikel_text" required><?php echo htmlspecialchars($article['artikel_text']); ?></textarea>
        </label>

        <label>
            Image Path
            <input type="text" name="img_path"
            value="<?php echo htmlspecialchars($article['img_path']); ?>">
        </label>

        <button type="submit" name="update">Save Changes</button>

    </form>

    <a href="admin.php">Back to Admin</a>

</main>

</body>
</html>
