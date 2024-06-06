<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <h1 class="title">Log-in</h1><br>
        <form class="form" action="login.php" method="post">
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            
                <button  class="button" a href="/Aquaponic Bussines Tugas akhir dasprog/user/afterlogin.php">Login</button>
            
        </form>
        <div class="forgot">
            <a href="form_register.php">Register</a> <a href="#">Forgot Password</a>
        </div>
    </div>
</body>
</html>