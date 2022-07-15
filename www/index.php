<!doctype html>
<head>
  <title>Володина страничка</title>
  <meta charset="UTF-8">
</head>
  
<body>
  <form method="POST" action="input.php">
    Имя: <input type="text" name="namein"><br><br>
    Возраст: <input type="number" name="age"><br><br>
    Описание: <input type="text" name="descrip"><br><br>
    <input type="submit" name="recintable" value="Записать в таблицу"><br><br>
  </form>
  <form method="POST" action="outputall.php">
  <input type="submit" name="alldb" value="Вывести список всех пользователей"><br><br>
  </form>
  <form method="POST" action="output.php">
    Имя для поиска: <input type="text" name="searchname"><br><br>
    Возраст для поиска: <input type="number" name="searchage"><br><br>
    <input type="submit" name="searchall" value="Найти и вывести"><br><br>
</form>
</body>
</html>