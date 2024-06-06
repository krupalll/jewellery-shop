<?php
include("connection.php");

?>



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> meta.codes - Animated Login and Registration Form </title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <div class="wrapper">
        <div class="form-wrapper sign-up">
            <form  action="signup.php" name = "form" method = "POST">
                <h2 style="color:#cba135">Sign Up</h2>
                <div class="input-group">
                    <input type="text" required name ="user">
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="email" required name="email">
                    <label for="">Email</label>
                </div>
                <div class="input-group">
                    <input type="password" required name ="pass">
                    <label for="">Password</label>
                </div>
                <button type="submit" class="btn" name="submit">Sign Up</button>
                <div class="sign-link">
                    <p>Already have an account? <a href="#" class="signIn-link">Sign In</a></p>
                </div>
            </form>
        </div>

        <div class="form-wrapper sign-in">
            <form action="login.php" name="form" method ="POST">
                <h2 style="color:#cba135">Login</h2>
                <div class="input-group">
                    <input type="text" required name="user">
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" required name="pass">
                    <label for="">Password</label>
                </div>
                <div class="forgot-pass">
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn" name="submit">Login</button>
                <div class="sign-link">
                    <p>Don't have an account? <a href="#" class="signUp-link">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>
<!-- partial -->
  <!-- <script  src="script.js"></script> -->

</body>
</html>
