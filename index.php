<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../style/index.css">
</head>
<body>
	<main>
		<div class="newuser-block">
			<h3>Добавление нового пользователя</h3>
			<form enctype="multipart/form-data" name ="newUser" method="POST" action="../server/InsertNewUser.php">
				<div class="input-block">
					<span>Имя</span>
					<input type="text" name="name">
				</div>
				<div class="input-block">
					<span>Фамилия</span>
					<input type="text" name="surname">
				</div>
				<div class="input-block">
					<span>Отчество</span>
					<input type="text" name="patronymic">
				</div>
				<div class="input-block">
					<span>E-mail</span>
					<input type="mail" name="email">
				</div>
				<div class="input-block">
					<span>Телефон</span>
					<input type="tel" name="phone">
				</div>
				<div class="input-block">
					<span>Город</span>
					<input type="text" name="city">
				</div>
				<div class="input-block">
					<span>Страна</span>
					<input type="text" name="country">
				</div>
				<div class="input-block">
					<span>Фото</span>
					<input id ="photo"type="file" name="photo" accept=".jpg,.jpeg,.png">
				</div>
				<div class="input-block">
					<input type="submit" name="send" value ="Добавить">
				</div>
			</form>
		</div>

		<div class="find-user-block">
			<h3>Поиск записи по фамилии</h3>
			<form enctype="multipart/form-data" name ="findUser" method="POST" action="../server/findUser.php">
				<div class="input-block">
					<input type="text" name="surname">
				</div>
				<div class="input-block">
					<input type="submit" name="send" value="Найти">
				</div>
			</form>
		</div>
		<div class="find-user-block">
			<h3>Поиск записи по фамилии для изменения</h3>
			<form enctype="multipart/form-data" name ="findUser" method="POST" action="../server/EditData.php">
				<div class="input-block">
					<input type="text" name="surname">
				</div>
				<div class="input-block">
					<input type="submit" name="send" value="Найти">
				</div>
			</form>
		</div>
		<div class="find-user-block">
			<h3>Поиск записи по фамилии для удаления</h3>
			<form enctype="multipart/form-data" name ="findUser" method="POST" action="../server/RemoveFromBd.php">
				<div class="input-block">
					<input type="text" name="surname">
				</div>
				<div class="input-block">
					<input type="submit" name="send" value="Найти">
				</div>
			</form>
		</div>
	</div>
</main>
</body>
</html>