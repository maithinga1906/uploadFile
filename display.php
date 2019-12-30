<?php
$server = "localhost";
$user = "root";
$password ="";
$dbName = "imagemanagement";
$db = new mysqli($server, $user, $password, $dbName);

$sql = "SELECT * from image";
$result = $db->query($sql)->fetch_all();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
	<style type="text/css">
		.option{
			display: flex;
			justify-content: space-between;
			justify-content: center;
		}
		table{
			margin-bottom: 5px;
			color: black;
		}
		table tr th{
			text-align: center;
		    border: 1px solid black;
		}
		table tr td {
			width: 170px;
		    margin-left: 20px;
		    text-align: center;
		    border: 1px solid black;
		}
		img{
			width: 50px;
			height: 50px
		}
	</style>
</head>
<body>
		<table>
			<tr>
				<th>id</th>
				<th>img</th>
			</tr>
		<?php
			for ($i=0; $i < count($result); $i++) { 
		?>
		<div class="line">
			<tr>
				<td><?php echo $result[$i][0]?></td>
				<td><img src="<?php echo $result[$i][1]?>"></td>
			</tr>
		</div>
		<?php } ?>
		</table>
	</div>
</body>
</html>
