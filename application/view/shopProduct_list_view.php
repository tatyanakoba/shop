<html>
	<head>
			<meta charset="utf-8">
			<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<h1 class="text-center">Магазинчик комнатных растений</h1>
		<table width="100%" class="table table-hover text-center">
			<tr>
				<td width="50%">Название растения</td>
				<td width="50%">Его вид</td>
			</tr>
			<?php foreach($data as $row): ?>
			<tr>
				<td><a href="../shop/?showone=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></td>
				<?php //header("Content-Type: image/jpeg"); ?>
				<td><?php echo "<img src='data:image/jpeg;base64, ".base64_encode($row['photo'])."'>"; ?></td>
			<?php endforeach; ?>		
		</table>
	</body>
</html>
