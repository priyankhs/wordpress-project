<?php
include("db.php");
$id = $_GET['id'];
$query = mysqli_query($con, "delete from student where id='$id'");
header ('location:index.php');
die();
?>