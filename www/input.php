<?php
include('db.php');

 //Переменные с формы
$name = $_POST['namein'];
$age = $_POST['age'];
$descrip = $_POST['descrip'];
/*echo '<pre>';
print_r($_REQUEST); 
var_dump($_REQUEST); 
die();*/
        
        $result = $conn->query ("INSERT INTO phonebook (name, age, description) VALUES('$name', '$age','$descrip')");
        
        if ($result == true){
            header('Location: /');
            }
            else{
            echo "Информация не занесена в базу данных";
            }
  

?>
