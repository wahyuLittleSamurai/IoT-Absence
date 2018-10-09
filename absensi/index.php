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
	<!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
	
	<script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
  </head>
  <body>
     <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Smart Absence</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo $_SERVER['PHP_SELF']; ?>">Home</a></li>
                <li><a href="?navbar=2">View User</a></li>
                <li><a href="?navbar=3">Edit User</a></li>
                
              </ul>
			  	<form class="navbar-form navbar-right" method = "post">
					<div class="form-group">
					  <input type="text" placeholder="Email" class="form-control" name = "txtEmail">
					</div>
					<div class="form-group">
					  <input type="password" placeholder="Password" class="form-control" name = "txtPassword">
					</div>
					<button type="submit" class="btn btn-success" name = "btnSignIn">Sign in</button>
				</form>

            </div>
			
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/pressure.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="http://localhost/absensi/signUpUser.php" role="button">Sign up</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/pressure.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
	<?php
		
		if(empty ($_GET["navbar"]))
		{
		
	?>
	
	
    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="images/logo.png" alt="Generic placeholder image" width="140" height="140">
          <h2>SFE Retail And PCB</h2>
          <p>Sfe retail melayani di bidang jual beli komponen electronics, modul arduino, modul mini PC dan juga cetak pcb single layer, double layer dan next tunggu untuk PTH.</p>
          <p><a class="btn btn-default" href="https://www.sfe-electronics.com" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/logo.png" alt="Generic placeholder image" width="140" height="140">
          <h2>SFE Project</h2>
          <p>Sfe project merupakan cabang sfe-electronics di bidang pembuatan alat otomasi industri, electronica, robotika dan software house, dan tunggu louncing Sfe project di bidang manufacturing.</p>
          <p><a class="btn btn-default" href="https://www.sfe-electronics.com" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/logo.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Dunia Robotika</h2>
          <p>Sfe dunia robotika merupakan cabang sfe-electronics di bidang pembuatan dan educakasi di bidang robotika. Dunia Robotika di bagi menjadi 3 buah level, yaitu level kid, level beginner dan juga level expert.</p>
          <p><a class="btn btn-default" href="https://www.sfe-electronics.com" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->
	<?php
		}
		else
		{
			if($_GET["navbar"] == "2")
			{
			?>
			<table class="table table-hover">
				<thead>
				  <tr>
					<th>Name</th>
					<th>Time In</th>
					<th>Time Out</th>
				  </tr>
				</thead>
				<tbody>
				 <?php
					include "connect.php";
					$query = "SELECT * FROM tblinout";
					$command = mysqli_query($link, $query);
					while($find = mysqli_fetch_array($command) )
					{
						echo "<tr>";
						echo "<td>$find[nameUser]</td>";
						echo "<td>$find[timein]</td>";
						echo "<td>$find[timeout]</td>";
						echo "</tr>";
					}
				?>
				</tbody>
			  </table>
			<?php
			}
			else
			{
			?>
			<table class="table table-hover">
				<thead>
				  <tr>
					<th>No</th>
					<th>Nama</th>
					<th>Bidang</th>
					<th>Action</th>
				  </tr>
				</thead>
				<tbody>
				 <?php
					include "connect.php";
					$query = "SELECT * FROM tbluser";
					$command = mysqli_query($link, $query);
					$count=1;
					while($find = mysqli_fetch_array($command) )
					{
						
						echo "<tr>";
						echo "<td>$count</td>";
						echo "<td>$find[nama]</td>";
						echo "<td>$find[status]</td>";
						echo "<td>
								<a href='?status=1&&id=$find[id]'>Edit</a>
								<a href='?status=2&&id=$find[id]'>Delete</a>
								</td>";
						echo "</tr>";
						$count++;
					}
				?>
				</tbody>
			  </table>
			<?php
			}
		}
	?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>