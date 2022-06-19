<!doctype html>
<head>
  <meta charset="UTF-8">

<?php
$conn = mysqli_connect("database", "phonebook", "phonebook");
if ($conn === false) {
  die("Ошибка: " . mysqli_connect_error());
} 
echo "Подключение успешно установлено";
mysqli_close($conn);
?>
</head>
</html>