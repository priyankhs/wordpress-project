<?php
// Created By Priyank
$con = mysqli_connect("localhost","root","","practice");
if($con == false){
    echo "Please check Database Connection";
    die();
}
session_start();
?>