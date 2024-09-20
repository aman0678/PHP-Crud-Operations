<?php
include 'header.php';
?>
<div id="main-content">
<h2>Update Record</h2>

<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card p-3">
                    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" class="form-control" id="id" placeholder="Enter id" name="id" value="">
                        </div>
                        <input type="submit" class="btn btn-primary" value="SHOW" name="showbtn">
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
if(isset($_POST['showbtn'])){
 include 'config.php';

 $stu_id = $_POST['id'];
 $sql = "SELECT * FROM student WHERE id={$stu_id}";
 $result = mysqli_query($conn, $sql) or die("query not executed");
 
 if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
?>

<!-- data -->
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card p-3">
                    <form class="post-form" action="updatedata.php" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="hidden" name="id" value=" <?php echo $row['id']; ?>" />
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" value="<?php echo $row['name']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="contact" class="form-label">Contact No.</label>
                            <input type="text" class="form-control" id="contact" placeholder="Enter your contact no." name="contactNo" value="<?php echo $row['contactNo']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" value="<?php echo $row['email']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Enter your address" name="address" value="<?php echo $row['address']; ?>">
                        </div>
                        <input type="submit" class="btn btn-primary" value="SAVE">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
    }
}
else{
    echo "<script>alert('No data found')</script>";
}
}
?>
</div>

</div>