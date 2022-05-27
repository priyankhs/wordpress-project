<?php
include("db.php");
unset($_SESSION['login_id']);
header ('location:login.php');
die();


?>