<?php
include 'connection.php' // Здесь я подключаюсь к базе данных 
?>
<html>
	<head>
		<title>Admin page</title>
		<link rel="stylesheet" href="./style.css"> <!-- Загружаю стилистику -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- импортирую jquery -->
		<script src="./script.js"></script><!-- В отдельном файле хранятся методы javascript-a -->
	</head> 
	<body>
		<header>
			<h2>Это админ панель</h2>
		</header>
		<div class="main">
			<div class="sidebar">
				<ul>
					<li ><a href="#" onclick="add_news()">Добавить новость</a></li> <!-- Здесь кнопка добавить новости использую метод в файле js -->
					<li><a href='#' onclick="show_all_news()">Показать все новости</a></li><!-- здесь кнопка показать все новости метод в файле js -->
				</ul>
			</div>
			<div class="center">
				<div class="all_news news show"> 
<?php 
$sql = "SELECT id,name,anounce,description FROM news"; // для показа всех данных я отправляю запрос к БД

$result = $mysqli->query($sql); //отрабатываю его

if ($result->num_rows > 0) {// смотрю имеются ли данные
  while($row = $result->fetch_assoc()) {  // добавляю в один массив $row
?>

					<div class="new">
						<div class="name">
						<div class="items"> 
							<a href="edit.php?id=<?php echo $row['id']?>"><img src="edit.png" alt=""></a> <!-- Здесь использовал метод GET для передачи ID текущей  новости -->
							<a href="delete.php?id=<?php echo $row['id']?>"><img src="delete.png" alt=""></a><!-- Здесь так же метод GET-->
						</div>
						<?php echo $row['name']?> <!-- Показывает название новостя -->
						</div>
						
						<div class="anounce"><p><?php echo $row['anounce']?></p></div>
						<a href="#" id = "full_<?php echo $row['id']?>" onclick="full(<?php echo $row['id']?>)">Показать полностью</a> <!-- Здесь опцианольный выбор, то есть я сначала только показываю анонс краткое описание новостя если нажать на кнопку то появится весь описание -->
						<div class="description hide" id= "desc-<?php echo $row['id']?>"><p><?php echo $row['description']?></p></div>
					</div>
<?php
  }
}
?>

				</div>
				<div class="adding news hide">
					<h3>Добавить новость</h3> <!-- сначала он скрыт так как сверху задан класс hide, я задал display none в style.css -->
					<form class="form" method="post" action="add.php">
						<input type="text" name="name" placeholder="Название" required="true">
						<input type="text" name="anounce" placeholder="Анонс">
						<input type="text" name="description" placeholder="Описание">

						<input type="submit" id='submit' name="Submit"> <!--  Здесь я передаю аргументы через пост метод в файл add.php-->
					</form>
				</div>
				
			</div>
		</div>
		
		<footer>
			<h2>Это футер админ панели</h2>
		</footer>
	</body>

</html>