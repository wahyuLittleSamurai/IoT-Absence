<?php
	session_start();
	if(!empty($_POST["txtName"]) && !empty($_POST["txtPassword"]) && isset($_POST["btnLogin"]) )
	{
		$postName = $_POST["txtName"];
		$postPassword = $_POST["txtPassword"];
		include 'connect.php';
		$query = "SELECT * FROM tbladmin WHERE nama = '$postName' AND password = '$postPassword'";
		$commandQuery = mysqli_query($link, $query);
		$numRow = mysqli_num_rows($commandQuery);
		if($numRow>=1)
		{
			$_SESSION['emailUser'] = $_POST['txtName'];
			header('location: index.php');
		}
		else
		{
			$message = "Lengkapi Form\\nTry again.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		
	}
?>
<!doctype html>
<html>
	<form method = "post">
		<input type = "text" id = "txtName" name = "txtName" />
		<input type = "password" id = "txtPassword" name = "txtPassword"/>
		<input type = "submit" value = "Login" name = "btnLogin" />
	</form>
</html>