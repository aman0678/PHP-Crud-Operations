<?php
include 'header.php';

if(isset($_POST['deletebtn'])){
    include 'config.php';
    $stu_id = $_POST['id'];
    $sql = "DELETE FROM student WHERE id = {$stu_id}";
    $result = mysqli_query($conn, $sql) or die("query not executed");
   
    header("Location: http://localhost/php/Crud/Index.php");
   
    mysqli_close();

}
?>
<div id="main-content">
<h2>Delete Record</h2>

<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card p-3">
                    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" class="form-control" id="id" placeholder="Enter id" name="id" value="">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Delete" name="deletebtn">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>

</div>