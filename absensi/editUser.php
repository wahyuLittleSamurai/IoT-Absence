<?php
	session_start();
	if(empty($_GET['status']) )
	{
		
	
?>
<!doctype html>
<html>
	<head>
		<style>
			
		</style>
	</head>
	<body>
		<table border = "1">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Bidang</th>
				<th>Action</th>
			</tr>
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
		</table>
	</body>
</html>
<?php
	}
	else
	{
		if($_GET["status"] == "1")//edit
		{
			include "connect.php";
			$getIdUser = $_GET["id"];
			$query2 = "SELECT * FROM tbluser WHERE id = '$getIdUser'";
			$command2 = mysqli_query($link, $query2);
			$find2 = mysqli_fetch_array($command2);
			
			?>
				<form>
					<input type = "text" id="txtnama" name="txtnama" value = "<?php echo $find2["nama"]; ?>"/>
					
				</form>
			<?php
		}
		else//delete
		{
			include "connect.php";
			$getIdUser = $_GET["id"];
			
			$query2 = "DELETE FROM tbluser WHERE id = 'getIdUser'";
			$command2 = mysqli_query($link, $query2);
			echo "Delete Succes";
		}
	}
?>