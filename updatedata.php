<?php
$stu_id = $_POST['id'];
$stu_name=$_POST['name'];
$stu_contactNo=$_POST['contactNo'];
$stu_email=$_POST['email'];
$stu_address=$_POST['address'];

include 'config.php';
$sql = "UPDATE student SET name='{$stu_name}', contactNo='{$stu_contactNo}', email='{$stu_email}', address='{$stu_address}' WHERE id={$stu_id}";
$result = mysqli_query($conn, $sql) or die("query not executed");

header("Location: http://localhost/php/Crud/Index.php");

mysqli_close($conn);
?>