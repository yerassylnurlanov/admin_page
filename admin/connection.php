<?php
  DEFINE('DB_USERNAME', 'root'); // даю значения для переменных
  DEFINE('DB_PASSWORD', 'root');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'test');

  $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE); // подключаюсь к базе

  if (mysqli_connect_error()) { 
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error()); //  если есть ошибка то показывает ошибку
  }


?>