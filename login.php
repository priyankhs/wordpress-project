<?php
include("db.php");

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $password = $_POST['password'];
    $sql = mysqli_query($con,"select * from admin_table Where name='$name' AND password='$password'");
    $row = mysqli_num_rows($sql);

    if($row>0){
        $_SESSION['login_id'] = "login";
        header('location:index.php');
    }else{
        echo  "Please check Username and Password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <form method="POST">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
    </form>
</body>
</html>