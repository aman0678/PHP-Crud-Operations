<?php
echo $stu_name=$_POST['name'];
echo $stu_contactNo=$_POST['contactNo'];
echo $stu_email=$_POST['email'];
echo $stu_address=$_POST['address'];

include 'config.php';
$sql = "INSERT INTO student(name, contactNo, email, address) VALUES('{$stu_name}','{$stu_contactNo}','{$stu_email}','{$stu_address}')";
$result = mysqli_query($conn, $sql) or die("query not executed");

header("Location: http://localhost/php/Crud/Index.php");

mysqli_close($conn);
?>