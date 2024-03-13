<?php

$is_invalid = false;

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    require "../database.php";

    $email = $_POST['email'];

    $sql = sprintf("SELECT * FROM admin_reg
    WHERE email = '%s'", $email);
    
    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ($user) {
        
        if (password_verify($_POST['password'], $user['password'])) {
            session_start();
            session_regenerate_id();
            $_SESSION["user_id"] = $user["id"];
            header("Location: admin_dashboard.php");
            exit;
        }
    }

    $is_invalid = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>

    <header>
        <nav class="navbar navbar-light bg-light">
            <a href="" class="navbar-brand">Blog</a>
        </nav>
    </header>

    <main class="container">
        <div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 shadow-lg mb-3 mt-5">
                    <h3 class="mt-3">Sign in</h3><hr>

                    <form action="" method="post">
                        <label for="username">Enter Email</label><br>
                        <input type="text" name="email" class="form-control" value="<? = htmlspecialchars($email) ?? "" ?>"><br>
                        <label for="password">Enter Password</label><br>
                        <input type="password" name="password"  class="form-control"><br><br>

                        <button class="btn btn-success form-control mb-4">Sign in</button>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </main>
    
</body>
</html>