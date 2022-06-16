<?php 

require_once 'dbConnection.php';

$name = trim($_POST['name']);
$surname = trim($_POST['surname']);
$patronymic = trim($_POST['patronymic']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$city = trim($_POST['city']);
$country = trim($_POST['country']);
$photoTmp =addslashes(file_get_contents($_FILES['photo']['tmp_name']));

InsertNewUser($name,$surname,$patronymic,$email,$phone,$city,$country,$photoTmp,$connection);

function InsertNewUser($name,$surname,$patronymic,$email,$phone,$city,$country,$image,$connection)
{
	if(CheckUserInBD($connection,$surname) == true)
	{
		echo "Пользователь с такой фамилией уже существует";
	}
	else
	{
		$result = mysqli_query($connection,"INSERT INTO `accounts`(`id`,`name`, `surname`, `patronymic`, `email`, `phone`, `city`, `country`, `photo`) VALUES (NULL,'$name','$surname','$patronymic','$email','$phone','$city','$country','$image')");
		if($result == 1)
		{
			echo "Данные успешно добавлены";
		}
		else
		{
			echo "Ошибка добавления в базу данных";
		}
	}
}

function CheckUserInBD($connection,$surname)
{
	$result_query = mysqli_query($connection,"SELECT `surname` from `accounts` WHERE `surname` = '$surname'");
	$result_array = mysqli_fetch_row($result_query);
	if(count($result_array) > 0)
	{
		return true;
	}
	else
	{
		return false;
	}
}
?>