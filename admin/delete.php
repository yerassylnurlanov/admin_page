<?php
include 'connection.php'; // подключаем бд
$id = $_GET['id'];	//сохраняем ID, которую получили по методу GET
$sql = "delete from news where id = ".$id; // по ID удаляем строку
if (mysqli_query($mysqli, $sql)) {
	  echo "Запись успешно удалена";// запись успешно удалена
	} 

?>
<br>
<a href="index.php">Назад</a>
<script type="text/javascript">
	setTimeout(function(){ window.location.href ='index.php'; }, 1500); //переадресация на гл страницу после 1,5 секунд
	
</script>