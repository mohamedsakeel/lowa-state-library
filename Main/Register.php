<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Lowa State University | Online Library | Register</title>
    <meta property="og:type" content="website">
    <meta name="description" content="Its an online platform for the university students to View availabilty, Reserve and Return the books by their own accounts.">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Animate.css">
    <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider-1.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md bg-info shadow navbar-fixed-top navigation-clean-button">
        <div class="container-fluid">
            <div><a class="navbar-brand" href="index.php"><span><img class="img-fluid border rounded shadow" src="assets/img/Lowa%20state%20logo%20-%20Copy.png" width="50" height="50" href="index.php">LOWA State Library</span> </a></div><button data-toggle="collapse" class="navbar-toggler"
                data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav nav-right"></ul>
                <p class="ml-auto navbar-text actions"><a class="login" href="login.php">Log In</a>
            </div>
        </div>
    </nav>
    <div class="register-photo">
        <h3 class="text-center text-black-50 d-lg-flex justify-content-lg-center" style="margin: -9px;height: 52px;padding: 0px;">Register</h3>
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post" action="Register.php">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="text" name="username" placeholder="User Name" autofocus="" value="<?php echo $username; ?>"></div>
                    
                <div class="form-group"><input class="form-control" type="text" name="fname" placeholder="First Name" autofocus="" value="<?php echo $fname; ?>"></div>
                    
                <div class="form-group"><input class="form-control" type="text" name="lname" placeholder="Last Name" value="<?php echo $lname; ?>"></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" inputmode="email" required="" value="<?php echo $email; ?>"></div>
                    
                <div class="form-group"><input class="form-control" type="password" name="password_1" placeholder="Password" required="" minlength="8" maxlength="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"</div>
                <div class="form-group">
                    <p class="text-black-50">* A lowercase letter</p>
                    <p class="text-black-50">* A Number</p>
                    <p class="text-black-50">* A Capital (Uppercase) letter</p>
                    <p class="text-black-50">* Minimum 8 characters</p>
                </div>
                <div class="form-group"><input class="form-control" type="password" name="password-2" placeholder="Password (repeat)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" maxlength="20" minlength="8" required=""></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" required="">I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="reg_user">Sign Up</button></div><a class="already" href="login.php">You already have an account? Login here.</a></form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>