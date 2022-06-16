<?php 
require_once 'dbConnection.php';
$name = trim($_POST['name']);
$surname = trim($_POST['surname']);
$patronymic = trim($_POST['patronymic']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$city = trim($_POST['city']);
$country = trim($_POST['country']);
$photoTmp = null;
if($_FILES['photo']['size'] >0){

	$photoTmp =addslashes(file_get_contents($_FILES['photo']['tmp_name']));
}



$data = GetDataFromServer($connection,$surname);

RewriteData($connection,$data,$name,$surname,$patronymic,$email,$phone,$city,$country,$photoTmp);

function GetDataFromServer($connection,$surname){
	$result_query = mysqli_query($connection,"SELECT * from `accounts` WHERE `surname` = '$surname'");
	$result_array = mysqli_fetch_assoc($result_query);
	return $result_array;
}

function RewriteData($connection,$beforedata,$name,$surname,$patronymic,$email,$phone,$city,$country,$image)
{
	$id = $beforedata["id"];
	$result_query = mysqli_query($connection,"UPDATE `accounts` SET `name` = '$name', `surname` = '$surname', `patronymic` = '$patronymic', `email` = '$email', `phone` = '$phone', `city` = '$city', `country` = '$country', `photo` = '$image' WHERE `id` = '$id'");
	if($result_query == 1){
		echo 'Данные успешно изменены';
	}else
	{
		echo mysql_error($connection);
	}
}
?>