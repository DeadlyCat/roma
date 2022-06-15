<?php 
require_once 'dbConnection.php';

$name = trim($_POST['name']);
$surname = trim($_POST['surname']);
$patronymic = trim($_POST['patronymic']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$city = trim($_POST['city']);
$country = trim($_POST['country']);
$photoName =trim($_FILES["photo"]['name']);
$photoTmp =addslashes(file_get_contents($_FILES['photo']['tmp_name']));

InsertNewUser($name,$surname,$patronymic,$email,$phone,$city,$country,$photoTmp,$connection);

function InsertNewUser($name,$surname,$patronymic,$email,$phone,$city,$country,$image,$connection){

	$result = mysqli_query($connection,"INSERT INTO `accounts`(`id`,`name`, `surname`, `patronymic`, `email`, `phone`, `city`, `country`, `photo`) VALUES (NULL,'$name','$surname','$patronymic','$email','$phone','$city','$country','$photoTmp')");
	print_r($result);
	
}


?>