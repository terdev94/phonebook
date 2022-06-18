<?php

$conn = mysqli_connect('loclhost', 'root', 'root');
if (!$conn->connect_error) {
    die("Ошибка соединения: " . $conn->connect_error);
}
echo "Успешно соединились";
$conn->close();
?>