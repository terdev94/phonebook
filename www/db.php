<?php

$conn = mysqli_connect("database", "phonebook", "phonebook","phonebook");
$conn->set_charset("utf8");
if ($conn === false) {
  die("Ошибка: " . mysqli_connect_error());
} 
/*$sql = "CREATE TABLE phonebook (id INTEGER AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30), age INTEGER, description VARCHAR(255));";
if($conn->query($sql)){
   echo "Таблица phonebook успешно создана";
} else{
    echo "Ошибка: " . $conn->error;
}*/

?>