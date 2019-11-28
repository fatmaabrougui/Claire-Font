
<?php

session_start();

include("conn.php"); 


$username=$_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.min.js"></script>
<link href="style.css" rel="stylesheet"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<style>
		
		hr { 

    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;

    border: 1px solid cornflowerblue;
			
			
			
} 
		#post{
			
			text-align: center;
		}
		#head{
			background-color: cornflowerblue;
			color: white;
		}

	#head2{
text-align: right;
		}
		#img{
			height: 100px;
			width: 100px;
			border-radius: 100px;
			border: 1px solid cornflowerblue;
		}
		
		#pro3{
			text-align: right;
		}
		 input[type=submit], input[type=reset] {
    background-color:cornflowerblue;
    border: 1px solid black;
    color: white;
   height: 30px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
			 border-radius: 8px;
}
		input[type=text] {
    
    border: 2px solid cornflowerblue;
    
  
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
			border-radius: 5px;
}
	</style>

</head>
<body>


<div class="container-fluid">
	
	<div id="head" class="row">
		
		
	<div class="col-xs-6"><h2>Blog</h2></div>
    <div id="head2" class="col-xs-6"><h3><?php echo "$username"  ?></h3></div>
	




	</div>
    <br>
	
	
	
	
	
	
	
	
	<div id="profile" class="row">
		
		
	<div class="col-xs-2"><?php	
		      $username=$_SESSION['name'];

		       $sql = "SELECT 	* FROM signup where name='$username'";
              $result = $conn->query($sql);

               if ($result->num_rows > 0) {
                // output data of each row
               while($row = $result->fetch_assoc()) {
		       $location= $row["image"];
              echo "<img id='img' src='$location'>";
              }
             } else {
            echo "0 results";
           }
          $conn->close();
             ?></div>
    <div id="pro2" class="col-xs-2">
		<?php



                 include("conn.php"); 


           $username=$_SESSION['name'];


           if(isset($_POST['submit']))

               {
	$name=$_FILES['myfile']['name'];
	$tmp_name=$_FILES['myfile']['tmp_name'];
	
	
	
	if($name)
	{
	$location="image/$name";
    move_uploaded_file($tmp_name,$location);	
		
	$query=mysqli_query($conn,"UPDATE signup SET image='$location' WHERE name='$username'");
		
		
		header("Location:suc.php");
		
	}
	else 
		die("Please select a file");
}

 

echo "<br>";
echo "

<form action='home.php' method='post' enctype='multipart/form-data'>
	
<input type='file' name='myfile'>
<input type='submit' name='submit' value='Change Your Avatar'>
</form>
";
?></div>
	

		<div id="pro3" class="col-xs-8"><h3><a href="logout.php">LogOut</a></h3></div>


	</div>
    <hr>
<div id="post" class="row">
		

	<div class="col-xs-12"><form method="post" action="post.php">
		<input type="text" name="title" placeholder="title...." >
		<input type="text" name="des" placeholder="description...." >
	

		
<input type="submit" value="Post">
		
</form>
	
	</div>
	
    
</div>
	<hr>


	
    <div id="body" class="row">
		

	<div class="col-xs-12"><?php	$sql = "SELECT 	* FROM posts ORDER BY id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	
        echo   "<b>"."Title:" .$row["title"]."</b>"."<br>". $row["post"]."<br>"."<i>Posted By--</i><br>"."<b>".$row["name"]." </b>"."<b>".$row["time"]."</b>";
		
		
		echo"<hr>";
        echo "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?></div>

	</div>
	</div>
</body>
</html>