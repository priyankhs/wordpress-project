<?php
include("db.php");
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $city = $_POST['city'];
    $query = mysqli_query($con,"Insert into student (name,city) values ('$name','$city')"); 
    header ('location:index.php');
    die();
}

?>
<form method="POST">
<table>
    <tr>
        <td>Name</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>City</td>
        <td><input type="text" name="city"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit"></td>
    </tr>

</table>