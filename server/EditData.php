<?php 
require_once 'dbConnection.php';
$surname = trim($_POST['surname']);

function GetDataFromServer($connection,$surname){
	$result_query = mysqli_query($connection,"SELECT * from `accounts` WHERE `surname` = '$surname'");
	$result_array = mysqli_fetch_assoc($result_query);
	return $result_array;
}

$array = GetDataFromServer($connection,$surname);

if(count($array) >0){
	echo '<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/index.css">
	<title></title>
</head>
<body>
	<div class="newuser-block">
		<h3>Измененение данных</h3>
		<form enctype="multipart/form-data" name ="newUser" method="POST" action="../server/AcceptEdittData.php">
			<div class="input-block">
				<span>Имя</span>
				<input type="text" name="name" value = '.$array['name'] .' >
			</div>
			<div class="input-block">
				<span>Фамилия</span>
				<input type="text" name="surname" value ='.$array['surname'] .' >
			</div>
			<div class="input-block">
				<span>Отчество</span>
				<input type="text" name="patronymic" value = '.$array['patronymic'] .' >
			</div>
			<div class="input-block">
				<span>E-mail</span>
				<input type="mail" name="email" value = '.$array['email'] .' >
			</div>
			<div class="input-block">
				<span>Телефон</span>
				<input type="tel" name="phone" value = '.$array['phone'] .' >
			</div>
			<div class="input-block">
				<span>Город</span>
				<input type="text" name="city" value = '.$array['city'] .'>
			</div>
			<div class="input-block">
				<span>Страна</span>
				<input type="text" name="country" value = '.$array['country'] .'>
			</div>
			<div class="input-block">
				<span>Фото</span>
				<input type="file" name="photo" accept=".jpg,.jpeg,.png">
			</div>
			<div class="input-block">
				<input type="submit" name="send" value ="Добавить">
			</div>
		</form>
	</div>
</body>
</html>';
}
else
{
	echo 'Такой записи не найдено';
}
?>
