<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Admin Registration</title>
</head>
<body class="">
    <header>
        <nav class="navbar navbar-light bg-light">
            <a href="" class="navbar-brand">Blog</a>
        </nav>
    </header>
    <main class="mt-5 container-fluid">
        <div class="row">
            <div class="col-md-4"></div>

            <div class="col-md-4 shadow-lg mb-5">
                <h3 class="mt-2">Create an Account!</h3>
                <hr>
                <form action="register.php" method="post">
                    <label for="lastname" class="mt-2">Enter Lastname</label>
                    <input type="text" class="form-control form-control-sm"name="lastname"><br>

                    <label for="firstname">Enter Firstname</label>
                    <input type="text" class="form-control form-control-sm" name="firstname"><br>

                    <label for="username">Create Username</label>
                    <input type="text" class="form-control form-control-sm" name="username"><br>

                    <label for="email">Enter Email</label>
                    <input type="text" class="form-control form-control-sm" name="email"><br>

                    <label for="password">Create Password</label>
                    <input type="password" class="form-control form-control-sm" name="password"><br>

                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control form-control-sm"><br>

                    <input type="checkbox"><a href=""><i style="color: red;">*</i> I agree to the terms and policy </a><br>
                    <button class="btn btn-success mb-2 btn-block">Sign Up</button>
                </form>
            </div>

            <div class="col-md-4"></div>
        </div>
    </main>
</body>
</html>