<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <!--    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<div class="bg"></div>
<div class="c-container">
    <div class="navbar navbar-expand navbar-light">
        <a href="#" class="navbar-brand">
            <img src="img/AMS-Logo%20400x400.png" alt="AMS Logo">
        </a>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item"><a href="index.blade.php" class="nav-link">Visit Website</a></li>
        </ul>
    </div>
</div>

<div class="login-container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action="#" method="post">
                <div class="user-group text-center">
                    <i class="fa fa-user-secret" aria-hidden="true"></i>
                </div>
                <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" class="form-control" name="username" id="username">
                    <span class="bar-animator"></span>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control"
                           id="password" name="password">
                    <span class="bar-animator"></span>

                    <small class="text-danger">Your credentials are icorrect</small>
                </div>
                <div class="form-group">
                    <button class="btn btn-login">Sign In</button>
                </div>
                <div class="form-group link-signup">
                    <a href="#">Don't have an account?</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/login.js"></script>
</body>
</html>