<?php 

include 'conn.php';
$title=$_POST['title'];
$des=$_POST['des'];
session_start();

$username=$_SESSION['name'];
$sql="insert into posts(name,title,post)

values('$username','$title','$des')";

$result=$conn->query($sql);

header("Location:home.php");













?>