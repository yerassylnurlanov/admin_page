<?php
include 'connection.php';// подключаем бд
$id = $_GET['id'];	// сохраняем ID которую мы только что получили

$sql = "SELECT id,name,anounce,description FROM news where id = ".$id; // отправляем запрос в бд по ID, получаем нужную новость
$name;
$anounce;
$desc;
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
  	$name = $row['name'];
  	$anounce = $row['anounce'];
  	$desc = $row['description']; // каждую строку новостя сохраняем в переменном
  }
}
?>

<?php
if(isset($_POST['name_edit'])){// после редактирования я передаю аргумент, если он есть то этот метод срабатывает
	$sql = "UPDATE news
	SET name = '".$_POST['name_edit']."', anounce = '".$_POST['anounce_edit']."',description = '".$_POST['description_edit']."'
	WHERE id = '".$_GET['id']."';"; // запрос обновления в базу данных 
	$result = $mysqli->query($sql); // обновляем позицию
	header("Refresh:0"); // перезагрузка страницы 
}


?>

<html>
	<head>
		<title>Редактировать</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class=" editing news">
			<h3>Редактировать новость</h3>
			<form class="form" method="post" action="edit.php?id=<?php echo $id?>">
				<input type="text" name="name_edit" placeholder="Название" value="<?php echo($name)?>" required="true">
				<input type="text" name="anounce_edit" value="<?php echo($anounce)?>" placeholder="Анонс">
				<input type="text" name="description_edit" value="<?php echo($desc)?>" placeholder="Описание">

				<input type="submit" id='submit' name="Submit">
				<a class = 'back' href="index.php"> Назад</a> <!--форма редактирования, с кнопкой сабмит отправляет обновленные данные в этот же файл, на вышеуказанный метод -->
			</form>
		</div>
	</body>

</html>


