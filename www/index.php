<!doctype html>
<head>
  <meta charset="UTF-8">

<?php
$conn = mysqli_connect("database", "phonebook", "phonebook","phonebook");
if ($conn === false) {
  die("Ошибка: " . mysqli_connect_error());
} 
$sql = "CREATE TABLE phonebook (id INTEGER AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30), age INTEGER, description VARCHAR(255));";
if($conn->query($sql)){
    echo "Таблица phonebook успешно создана";
} else{
    echo "Ошибка: " . $conn->error;
}
mysqli_close($conn);
?>
</head>
</html>