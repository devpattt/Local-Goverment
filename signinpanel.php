<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if (isset($_POST['sign-in'])) {
        // Sign-In
        if (!empty($user_name) && !empty($password)) {
            // Check kung tama info sa databse
            $query = "SELECT * FROM users WHERE user_name='$user_name' AND password='$password'";
            $result = mysqli_query($con, $query);

            if (mysqli_num_rows($result) == 1) {
                // Successful sign-in
                $_SESSION['user_name'] = $user_name;
                header("Location: index.php");
                die;
            } else {
                echo "Invalid username or password. Please try again.";
            }
        } else {
            echo "Please enter a valid username and password.";
        }
    } elseif (isset($_POST['sign-up'])) {
        // Sign-Up
        if (!empty($user_name) && !empty($email) && !empty($password) && !is_numeric($user_name)) {
            // Save sa database
            $user_id = random_num(20);
            $query = "INSERT INTO users (user_id, user_name, password, email) VALUES ('$user_id', '$user_name', '$password', '$email')";  
            mysqli_query($con, $query);
            header("Location: signinpanel.php");
            die;
        } else {
            echo "Please enter valid information for sign-up.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="signin.css" />
    <title>Sign in & Sign up Form</title>
  </head>
<body>
<div class="container">
    <div id="forms-container">
        <div class="signin-signup">
            <form action="#" class="sign-in-form" method="POST">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="user_name" placeholder="Username" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" />
                </div>
                <input type="submit" name="sign-in" value="Login" class="btn solid" />
                <p class="social-text">use social media</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
            </form>
            <form action="#" class="sign-up-form" method="POST">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="user_name" placeholder="Username" />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="email" placeholder="Email" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" />
                </div>
                <input type="submit" name="sign-up" class="btn" value="Sign up" />
                <p class="social-text">Or Sign up with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>New here ?</h3>
                <p>There's so much you can do with QC E-Services!</p>
                <button class="btn transparent" id="sign-up-btn">Sign up</button>
            </div>
            <img src="img/Quezon_City.svg.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>One of us ?</h3>
                <p>For the best overall experience, we recommend using Chrome or Safari browser.</p>
                <button class="btn transparent" id="sign-in-btn">Sign in</button>
            </div>
            <img src="img/family.svg" class="image" alt="" />
        </div>
    </div>
</div>
<script src="app.js"></script>
</body>
</html>
