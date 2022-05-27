<?php
include("db.php");
if(!isset($_SESSION['login_id'])){
    header('location:login.php');
}
$query = mysqli_query($con,"select * from student"); ?>
<a href="add.php">Add New Record</a><br/><br/>
<a href="logout.php">Logout</a><br/><br/>
<table border="2">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>City</td>
        <td>Action </td>
        </tr>
<?php 
$x= 1;
while($row = mysqli_fetch_assoc($query)){ ?>
    <tr>
        <td><?php echo $x; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['city']; ?></td>
        <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a> </td>
        </tr>
    
<?php 
$x++;
}
?>

</table>