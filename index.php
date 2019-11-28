
<?php
  require('autoload.php');
  if(isset($_POST['submitpost'])) {
    if(isset($_POST['g-recaptcha-response'])) {
      $recaptcha = new \ReCaptcha\ReCaptcha('clé_secrète');
      $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
      if ($resp->isSuccess()) {
          var_dump('Captcha Valide');
      } else {
          $errors = $resp->getErrorCodes();
          var_dump('Captcha Invalide');
          var_dump($errors);
      }
    } else {
      var_dump('Captcha non rempli');
    }
  }
?>

	<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
	<script src="js/bootstrap.js"></script>
	
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

	<script src="js/jquery.min.js"></script>
	<script type="text/javascript">

	<style>
		#head{
			background-color: cornflowerblue;
			color: white;
		}
	
	
	</style>
</head>
<body>
	<div class="g-recaptcha" data-sitekey="6Lcu9MQUAAAAAMt0HCZVKc1QcYKWJh9E7c8kMNoB
"></div>
      <br/>
      <input type="submit" value="Valider" name="submitpost">
	<div class="container-fluid">
		<?php 'conn.php' ?>
		
		<div id="head" class="row">
		<div class="col-xs-6"><h2>Smida</h2></div>
		<div class="col-xs-6"></div>
		</div>
		
		<br>
		
		
		<div id=info>
		<h2>Login here</h2>
		
		<form action="login.php" method="post">
			<label>Username:</label>
		<input type="text" name="uname" placeholder="User name"><br><br>
			<label>Password:</label>
			
	 <input type="text" name="pass" placeholder="Password"><br><br>

			<button style="background-color:#6495ed;color:white;" type="submit"><b>Login</b></button>
			
			
			
			
			</form>
		
		
		
		
		
		<h2>Signup here</h2>
			
			<form action="signup.php" method="post">
			<label>Username:</label>
		<input type="text" name="name" placeholder="User name"><br><br>
			<label>Password:</label>
			
	 <input type="text" name="pass" placeholder="Password"><br><br>

			<button style="background-color:#6495ed;color:white;" type="submit"><b>Signup</b></button>
			
			
			
			
			</form>
		
		
		
	<!-- 	
		**************** -->
		
		</div>
		
	
	
	
	
	</div>
	
	
	
	
	
	
	
	
	
</body>






</html>