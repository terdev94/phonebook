<?php
include('db.php');


    $searchname = $_POST['searchname'];
    $searchage = $_POST['searchage'];

    $sql_select = mysqli_query($conn,"SELECT * FROM `phonebook` WHERE name ='".$searchname."' or age = '".$searchage."'");
    $row = mysqli_fetch_array ($sql_select);

if($row){
	echo ("<p>Имя &nbsp"."{$row['name']}&nbsp;<br> Возраст &nbsp;{$row['age']}&nbsp;<br> Описание {$row['description']}<br>");
}
else{
    echo ("Пользователя с таким именем в базе нет<br/><br/>");
}
    
?>

<a href="index.php">Вернуться</a><br/><br/>