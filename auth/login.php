<?php
session_start();
include("../includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up to SkillUp - E-Learning Platform</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../assets/css/auth.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.png" />

    <!-- SweetAlert Script -->
    <script src="../assets/js/vendor/sweetalert.min.js"></script>
</head>

<body>

    <?php
    if (isset($_POST['login'])) {
        $usernameOrEmail = $_POST['username_or_email'];
        $password = $_POST['password'];
    
        try {
            // Check if the input is an email address
            if (filter_var($usernameOrEmail, FILTER_VALIDATE_EMAIL)) {
                // User provided an email, fetch user data by email
                $sql = "SELECT * FROM users WHERE user_email = :username_or_email";
            } else {
                // User provided a username, fetch user data by username
                $sql = "SELECT * FROM users WHERE user_username = :username_or_email";
            }
    
            $query = $dbh->prepare($sql);
            $query->bindParam(':username_or_email', $usernameOrEmail, PDO::PARAM_STR);
            $query->execute();
            $user = $query->fetch(PDO::FETCH_ASSOC);
    
            if ($user && password_verify($password, $user['user_password'])) {
                // Password is correct, set session variables
                // $_SESSION['phpsessid'] = session_id();
                $_SESSION['token'] = $user['token'];
                $_SESSION['serial'] = $user['serial'];
    
                // Redirect to a logged-in page
                echo '<script>
                    swal({
                        title: "Good job!",
                        text: "Login successful!",
                        icon: "success",
                        timer: 1500,
                    }).then(function() {
                        document.location = "../dashboard/dashboard.php";
                    });
                </script>';
                exit();
            } else {
                echo '<script>
                    swal({
                        icon: "error",
                        title: "Error",
                        text: "Incorrect password or username/email",
                    });
                </script>';
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    ?>


    <div class="main">
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img width="200px" src="../assets/images/logo.png" alt=""></figure>
                        <figure><img src="../assets/images/signin-image.png" alt="signin image"></figure>
                        <a href="../auth/register.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username_or_email" id="username_or_email" placeholder="Username or Email" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember_me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="login" id="login" class="form-submit" value="Log in" />
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
</body>

</html>