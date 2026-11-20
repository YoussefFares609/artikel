
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Central City Citizen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Central City Citizen</h1>
    </header>

    <main>
        <section>
            <h2>Admin Login</h2>

            <form action="logincheck.php" method="post">

                <label>
                    Admin Username
                    <input type="text" name="username" required>
                </label>

                <label>
                    Admin Password
                    <input type="password" name="password" required>
                </label>

                <button type="submit">Login</button>

            </form>
        </section>
    </main>

</body>
</html>
