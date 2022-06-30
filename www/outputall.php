
<?php
include('db.php');
$sqlall = mysqli_query($conn,"SELECT * FROM `phonebook`");

?>
<head>
    <meta charset="UTF-8"/>
    <title>Володина страничка</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
</head>

<br /><br />  
           <div class="container" style="width:900px;">  
                <h2 align="center">Export Mysql Table Data to CSV file in PHP</h2>  
                <h3 align="center">Employee Data</h3>                 
                <br />  
                <form method="POST" action="export.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>  
                <br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">ID</th>  
                               <th width="25%">Name</th>  
                               <th width="5%">Age</th>  
                          </tr> 
<?php
while ($result = mysqli_fetch_array($sqlall)) {
?>

                          <tr>  
                               <td><?php echo $result["id"]; ?></td>  
                               <td><?php echo $result["name"]; ?></td>   
                               <td><?php echo $result["age"]; ?></td>
                               <td><?php echo $result["description"];?></td>
                          </tr>  
                          <?php
                          }
                          ?>
                    </table>  
            </div> 
        </div>
    </body>

    

    
    
        

<a href="index.php">Вернуться</a><br/><br/>