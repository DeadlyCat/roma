
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">

 	<title>Document</title>
 </head>
 <body>
 	<?php 

require_once 'dbConnection.php';

$surname = trim($_POST['surname']);

FindUserInBD($connection,$surname);

function FindUserInBD($connection,$surname)
{
	$result_query = mysqli_query($connection,"SELECT * from `accounts` WHERE `surname` = '$surname'");
	$result_array = mysqli_fetch_assoc($result_query);
	if(count($result_array) > 0)
	{
		echo 
		'<div>
			<div>
				<span><b>Имя: </b></span>
				<span> '.$result_array['name'] .'</span>
			</div>
			<div>
				<span><b>Фамилия: </b></span>
				<span> '.$result_array['surname'] .'</span>
			</div>
			<div>
				<span><b>Отчество: </b></span>
				<span> '.$result_array['patronymic'] .'</span>
			</div>
			<div>
				<span><b>e-mail: </b></span>
				<span> '.$result_array['email'] .'</span>
			</div>
			<div>
				<span><b>телефон: </b></span>
				<span> '.$result_array['phone'] .'</span>
			</div>
			<div>
				<span><b>город: </b></span>
				<span> '.$result_array['city'] .'</span>
			</div>
			<div>
				<span><b>страна: </b></span>
				<span> '.$result_array['country'] .'</span>
			</div>
			<div>
				<span><b>фото: </b></span>
				<img src=data:image/png;base64,'. base64_encode($result_array['photo']) .'>
			</div>
		</div>';
	}
	else
	{
		echo 'Запись с такой фамилией не найден';
	}
}

 ?>
 <style type="text/css">
 	img{
 		width: 300px;
 		height: 300px;
 	}
 </style>
 </body>
 </html>