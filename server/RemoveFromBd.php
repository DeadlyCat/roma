<?php 
require_once 'dbConnection.php';
$surname = trim($_POST['surname']);

Remove($connection,$surname);
function Remove($connection,$surname){
	$query = mysqli_query($connection,"DELETE FROM `accounts` WHERE `accounts`.`surname` = '$surname'");
	if($query == 1){
		echo "Запись была удалена";
	}else{
		echo "произошла ошибка при удалении";
	}
}
?>