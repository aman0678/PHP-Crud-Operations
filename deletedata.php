<?php

$stu_id = $_GET['id'];
 
 include 'config.php';
 
 $sql = "DELETE FROM student WHERE id = {$stu_id}";
 $result = mysqli_query($conn, $sql) or die("query not executed");

 header("Location: http://localhost/php/Crud/Index.php");

 mysqli_close();

?>