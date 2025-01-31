<?php include("functions/init.php");
  // redirect("../../comingsoon");
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Anwesha CA | Reset Password</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Comfortaa:400,700'>
<link rel="stylesheet" href="./css/signup.css">
<link href="./images/favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="./images/favicon.ico" rel="apple-touch-icon">
</head>
<body>


<div class="container">
  <div id="login" class="login">
    <div class="login-icon-field">
      <div class="login-icon">
        <img src="./images/logo_favi.png" alt="Anwesha" width="100%">
        <h3 style="text-align: center;">Forgot Password ?</h3>
      </div>
      <?php display_message() ?>
      <div style="position: relative; z-index: 9;text-align: center;">
				<?php  conf_pass_change() ?>
			</div>
    </div>
    <form method="POST" id="signup-form">
        <div class="login-form">
            <div class="username-row row">
                <input class="white-text" required type="password" placeholder="New Password" name="password" id="password" />
            </div>
            <div class="username-row row">
                <input class="white-text" required type="password" placeholder="Confirm New Password" name="pass1" id="pass1" />
            </div>
        </div>
        <div class="call-to-action">
            <button  type="submit" name="submit">Submit</button>
            <p>Already have an account ? <a href="./signup.php">Sign in now !!</a></p>
        </div>
    </form>
  </div>
</div>
<!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/velocity/1.2.2/velocity.min.js'></script>
<script src='https://cdn.jsdelivr.net/velocity/1.2.2/velocity.ui.min.js'></script>
<script  src="./js/signup.js"></script>

</body>
</html>
