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
		<div class="center-block btn btn-success" style="width:20%;" data-toggle="modal" data-target="#myModal2">Добавить новый товар</div>
		<h1 class="text-center">Купленные товары</h1>
		<table width="100%" class="table table-hover text-center">
			<tr>
				<td width="25%">Название товара</td>
				<td width="25%">Имя покупателя</td>
				<td width="25%">Фамилия покупателя</td>
				<td width="25%">Номер телефона</td>
			</tr>
			<?php foreach($data as $row): ?>
			<tr>
				<td><?php echo $row['product']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['surname']; ?></td>
				<td><?php echo $row['phone']; ?></td>
			<?php endforeach; ?>		
		</table>
		<!-- Modal -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title text-center" id="myModalLabel">Введите данные о товаре</h4>
		</div>
      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data" action="/shop/application/model/modelForm.php?addProduct">
			<label for="Name">Название</label>
			<input type="text" class="form-control" id="Name" name="name">
			<label for="Description">Описание</label>
			<input type="text" class="form-control" id="Description" name="description">
			<label for="Photo">Фото</label>
			<input type="file" class="form-control bfh-phone" id="Photo" name="photo"><br>
			<button type="submit" class="btn btn-default">Сохранить</button>
	</form>
      </div>
    </div>
  </div>
</div>
	</body>
</html>
