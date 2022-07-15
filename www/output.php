<?php
include('db.php');
?>
<!doctype html>
<head>
    <meta charset="UTF-8"/>
    <title>Володина страничка</title>
</head>
  
<body>
    
<?php
    $searchname = $_POST['searchname'];
    $searchage = $_POST['searchage'];

    $sql_select = mysqli_query($conn,"SELECT * FROM `phonebook` WHERE name ='".$searchname."' or age = '".$searchage."'");
    //$row = mysqli_fetch_array ($sql_select);

    while ($row = $sql_select->fetch_assoc()) {
        echo ("<p>Имя &nbsp"."{$row['name']}&nbsp;<br> Возраст &nbsp;{$row['age']}&nbsp;<br> Описание {$row['description']}<br>");
    }
    
?>

<a href="index.php">Вернуться</a><br/><br/>

</body>