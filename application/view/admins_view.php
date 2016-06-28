<html>
	<head>
			<meta charset="utf-8">
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
			
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="center-block" style="width:30%;">
			<form method="POST"  action="/shop/application/model/modelForm.php?auth">
				<label>Представтесь администратор:</label><br>
				<label for="login">Логин</label>
				<input type="text" class="form-control" id="login" name="login">
				<label for="password">Пароль</label>
				<input type="password" class="form-control" id="password" name="password"><br>
				<button type="submit" class="btn btn-success center-bloc">Войти</button>
			</form>
      </div>
	</body>
</html>
