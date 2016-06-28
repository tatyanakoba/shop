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
		<table width="100%" class="table table-hover text-center">
			<?php foreach($data['flower']['product'] as $row): ?>
			<tr>
				<td><?php echo $row['name']; ?></a></td>
			</tr>
			<tr>	
				<td><?php echo "<img src='data:image/jpeg;base64, ".base64_encode($row['photo'])."'>"; ?></td>
			</tr>
			<tr>	
				<td><?php echo $row['description']; ?></a></td>
			</tr>	
			<?php endforeach; ?>	
		</table>
		<div class="center-block btn btn-success" style="width:20%;" data-toggle="modal" data-target="#myModal">Купить</div>
		<br>
		<div class="center-block" style="width:50%;">
			<form method="POST" action="/shop/application/model/modelForm.php?addComment&id=<?php echo $_GET['showone']; ?>">
			<label for="Name">Ваше Имя</label>
			<input type="text" style="width:50%;" class="form-control" id="Name" name="Name">
			<label for="Comment">Ваш комментарий</label>
			<textarea class="form-control" rows="10" id="Comment" name="Comment"></textarea><br>
			<button type="submit" class="btn btn-primary center-block">Добавить</button>
		</form>
		</div>
		<div style="width:80%;" class="center-block">
			<p>Комментарии:</p>
			<hr>
			<?php foreach($data['flower']['comments'] as $comment): ?>
				<div><?php echo $comment['name']; ?> : <?php echo $comment['comment']; ?></div>
				<hr>
			<?php endforeach; ?>	
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title text-center" id="myModalLabel">Введите данные о себе</h4>
		</div>
      <div class="modal-body">
        <form method="POST" action="/shop/application/model/modelForm.php?addClient&id=<?php echo $_GET['showone']; ?>">
			<label for="Name">Имя</label>
			<input type="text" class="form-control" id="Name" name="Name">
			<label for="SurName">Фамилия</label>
			<input type="text" class="form-control" id="SurName" name="SurName">
			<label for="Phone">Телефон</label>
			<input type="text" class="form-control bfh-phone" id="Phone" name="Phone"><br>
			<button type="submit" class="btn btn-default">Сохранить</button>
		</form>
      </div>
    </div>
  </div>
</div>
	</body>
</html>
