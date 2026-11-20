
<?php
session_start();

require "dbconnect.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $connection->prepare(
        "SELECT * FROM admin WHERE username = ?"
    );

    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {

        $admin = $result->fetch_assoc();

        if (password_verify($password, $admin['password'])) {

            $_SESSION['login'] = true;

            header("Location: admin.php");
            exit();

        } else {
            echo "Incorrect password!";
            exit();
        }

    } else {
        echo "Username not found!";
        exit();
    }

    $stmt->close();
}

$connection->close();

header("Location: login.php");
exit();
?>
