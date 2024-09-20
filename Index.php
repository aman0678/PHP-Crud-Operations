<?php
include 'header.php';
?>
<div id="main-content">
  <h2>All Records</h2>
</br>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn, $sql) or die("query not executed");

    if(mysqli_num_rows($result)>0){
    ?>
<table class="table table-bordered border-primary">
<thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile No.</th>
      <th scope="col">E-mail</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($row=mysqli_fetch_assoc($result)){
    ?>
    <tr class="table-warning">
      <th scope="row"><?php echo $row['id'];    ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['contactNo']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td>
      <a class="btn btn-warning btn-primary btn-sm" href="edit.php?id=<?php echo $row['id']; ?>">EDIT</a>
      <a class="btn btn-danger btn-primary btn-sm" href="deletedata.php?id=<?php echo $row['id']; ?>">DELETE</a>
      <b
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php } 
else{
  echo "<h2>No Record found</h2>";
}
mysqli_close($conn);
?>
