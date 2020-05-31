<?php
include 'connection.php'; // подключаю БД
$name = $_POST['name'];
$anounce = $_POST['anounce'];
$description = $_POST['description'];// принимаю все нужные аргументы
if($name != ''){

	$sql = "INSERT INTO news(name,anounce,description) 
	VALUES('".$name."','".$anounce."','".$description."')"; // добавляю все эти данные в таблицу news через запрос

	if (mysqli_query($mysqli, $sql)) {
	  echo "Запись успешно добавлена"; // если успешно то это запись выходит
	} else {
	  echo "Error: " . $sql . "<br>" . mysqli_error($mysqli); // выводит ошибку эта строка для дебага
	}
}

?>
<br>
<a href="index.php">Назад</a>
<script type="text/javascript">
	setTimeout(function(){ window.location.href ='index.php'; }, 1500); // моя фиша просто чтобы не ждать переадресация на главную страницу
	
</script>