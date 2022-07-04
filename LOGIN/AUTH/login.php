<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fontawesome -->
  	<script src="https://kit.fontawesome.com/75053439fc.js" crossorigin="anonymous"></script>
  	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <title>Helping Hands</title>
    <link rel="stylesheet" type="text/css" href="../AUTH_CSS/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../AUTH_CSS/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="../AUTH_CSS/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="../AUTH_CSS/iofrm-theme1.css">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="../index.php">
                <div class="logo">
                    <!--<img class="logo-size" src="../images/logo-light.svg" alt="">-->
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Login to your Helping Hands account.</h3>
                        <p>Making a difference one donation at a time.</p>
                        <div class="page-links">
                            <a href="login.php" class="active">Login</a><a href="register.php">Register</a>
                        </div>
                        <form action="../AUTH_PHP/processLogin.php" method="post" autocomplete="off">
                            <input class="form-control" type="email" name="email" placeholder="e-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> <a href="forgot.php">Forgot password?</a>
                            </div>
                        </form>
                        <div class="other-links">
                            <span>Or login with</span>
                            <a href="https://www.facebook.com/" target="_blank">
                              <i class="fa-brands fa-facebook-f" id="contact-social-facebook"></i>
                            </a>
                            <a href="https://accounts.google.com/login" target="_blank">
                              <i class="fa-brands fa-google" id="contact-social-google"></i>
                            </a>
                            <a href="https://www.linkedin.com/login" target="_blank">
                              <i class="fa-brands fa-linkedin" id="contact-social-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="../JS/jquery.min.js"></script>
<script src="../JS/popper.min.js"></script>
<script src="../JS/bootstrap.min.js"></script>
<script src="../JS/main.js"></script>
</body>
</html>
