
<?php
include('db.php');

    

    $sqlall = mysqli_query($conn,"SELECT * FROM `phonebook`");
    while ($result = mysqli_fetch_array($sqlall)) {
        echo ("<p>Имя &nbsp"."{$result['name']}&nbsp;<br> Возраст &nbsp;{$result['age']}&nbsp;<br> Описание {$result['description']}<br>");
        }

?>

<a href="index.php">Вернуться</a><br/><br/>