<?php 

include 'conn.php';
$uname=$_POST['name'];
$pass=$_POST['pass'];

if (!isset($_POST['name'])) $error [] = "please fill out all fields" ; 
if (!isset($_POST['pass'])) $error [] = "please fill out all fields" ; 


$sql="insert into signup(name,passs)

values('$uname','$pass')";

$result=$conn->query($sql);

header("Location:index.php");













?>