<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<form name = "onur" method = "POST" action = "kontrol.php" class="form-signin">
	<h2>Üye Ekleme Ekranı</h2><br/>
	<label>Kullanıcı Adı</label>
	<input id = "eposta" name = "eposta" type = "email" class="form-control"><br/>
	<label>Şifre:</label>
	<input id = "sifre" name = "sifre1" type = "password" class="form-control"><br/>
	<label>Şifreyi Tekrar Girin:</label>
	<input id = "sifre" name = "sifre2" type = "password" class="form-control"><br/>
	<input type = "submit" class="btn btn-lg btn-primary btn-block"><br/>	
</form></div>
</body>
<html>