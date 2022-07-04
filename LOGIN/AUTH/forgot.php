<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <h3>Password Reset</h3>
                        <p>To reset your password, enter the email address you used to sign in to your Helping Hands account</p>
                        <form>
                            <input class="form-control" type="text" name="username" placeholder="E-mail Address" required>
                            <div class="form-button full-width">
                                <button id="submit" type="submit" class="ibtn btn-forget">Send Reset Link</button>
                            </div>
                        </form>
                    </div>
                    <div class="form-sent">
                        <div class="tick-holder">
                            <div class="tick-icon"></div>
                        </div>
                        <h3>Password link sent</h3>
                        <p>Please check your email inbox</p>
                        <div class="info-holder">
                            <span>Unsure if that email address was correct?</span> <a href="#">We can help</a>.
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
