<?php
	session_start();
	if(!empty($_POST["txtEmail"]) && !empty($_POST["txtPassword"]) && isset($_POST["btnSignIn"]) )
	{
		$postEmail = $_POST["txtEmail"];
		$postPassword = $_POST["txtPassword"];
		
		include "connect.php";
		$query3 = "SELECT * FROM tbluser WHERE nama = '$postEmail' AND password = '$postPassword'";
		$command3 = mysqli_query($link, $query3);
		$numRows = mysqli_num_rows($command3);
		if($numRows >= 1)
		{
			echo "hahaha";
		}
		else
		{
			echo "kosong";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Smart Abscence Sfe-Electronics.com</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/signin.css" rel="stylesheet">
	
	<script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
  </head>
  <body>
     <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign up</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="I Agree"> I Agree 
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
      </form>

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>