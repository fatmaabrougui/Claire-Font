
<script type="text/javascript">
	
if (!isset($_post['name'])) $error[] = "please fill out al fields"; 
if (!isset($_POST['pass'])) $error[] = "please fill out al fields"; 







</script>


<?php 

session_start();

include 'conn.php';

$uname=$_POST['name'];
$pass=$_POST['pass'];



$sql="SELECT * from signup WHERE name='$uname' AND passs='$pass'";

$result=$conn->query($sql);


$_SESSION['name']=$_POST['uname'];

header("Location:home.php");













?>6