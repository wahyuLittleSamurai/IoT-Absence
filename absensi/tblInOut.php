<?php
	session_start();
	
?>

<!doctype html>
<html>
	<body >
		<table border = "1">
			<tr>
				<th>Nama</th>
				<th>Time In</th>
				<th>Time Out</th>
			</tr>
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
		</table>
	</body>
</html>