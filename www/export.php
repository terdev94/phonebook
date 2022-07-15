<?php
include 'db.php';
$query = mysqli_query($conn,"SELECT * from phonebook ORDER BY id DESC");
if (isset ($_POST["export"])){
    header ('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachmentl; filename=data.csv');
    $output = fopen("php://output","w");
    fputcsv($output, array('ID','Name','Age','Description'));
    while ($row = mysqli_fetch_assoc($query))
    {
        fputcsv($output, $row);
    }
    
}
fclose($output);
?>