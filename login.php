<!DOCTYPE html>
<html>
<head>
	<title>Login Email SearchMus</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/customcss.css">
</head>
<body>
	<div class="logo">
		<a href="index" class="previous round">&#8249;</a>
		<img src="./assets/image/logo.png" id="logoutama">
	</div>

  <div class="container">

        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="./assets/image/loginavatan.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post" action="loginkuy.php">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control" name="inputEmail" placeholder="Email address" required autofocus>
                <input type="password" id="inputPassword" class="form-control" name="inputPassword" placeholder="Password" required>
                <input class="btn btn-lg btn-primary btn-block btn-signin" type="submit" value="Sign In"></input>
                <a href="signup" id="signup"><input class="btn btn-lg btn-primary btn-block btn-signin" type="button" value="Sign Up"></input></a>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html>