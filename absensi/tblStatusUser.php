<?php
	session_start();
	
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
				<th>Photo</th>
				<th>Nama</th>
				<th>Bidang</th>
				<th>Status</th>
			</tr>
			<?php
				include "connect.php";
				$query = "SELECT * FROM tbluser";
				$command = mysqli_query($link, $query);
				while($find = mysqli_fetch_array($command) )
				{
					echo "<tr>";
					echo "<td>$find[photo]</td>";
					echo "<td>$find[nama]</td>";
					echo "<td>$find[status]</td>";
					echo "<td>$find[booletime]</td>";
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>