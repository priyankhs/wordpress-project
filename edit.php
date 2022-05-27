<?php
include("db.php");
$id = $_GET['id'];
$query = mysqli_query($con,"Select * from student where id='$id'");
foreach ($query as $row) {
    $name = $row['name'];
    $city = $row['city'];
}
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $city = $_POST['city'];
    $query = mysqli_query($con,"UPDATE student SET  name='$name', city='$city' where id='$id'"); 
    header ('location:index.php');
die();
}
?>

<form method="POST">
<table>
    <tr>
        <td>Name</td>
        <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
    </tr>
    <tr>
        <td>City</td>
        <td><input type="text" name="city" value="<?php echo $city; ?>"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit"></td>
    </tr>

</table>
</form>
