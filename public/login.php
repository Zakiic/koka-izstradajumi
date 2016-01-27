<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Koka izstrādājumi mājas lapa</title>
<link rel="stylesheet" href="css/style.css" />
 <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>
</head>
<body>
     

    
<?php

	require('db.php');
	session_start();
    
    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
	
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysql_query($query) or die(mysql_error());
		$rows = mysql_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); 
            }else{
				echo "<div class='form'><h3>Vārds vai parole ir nepareizi.</h3><br/>Nav pareizi! <a href='login.php'>Vēlreiz ienākt</a></div>";
				}
    }else{
?>
<div class="login-card">
<h1>Koka izstrādājumi mājas lapa</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Vārds" required />
<input type="password" name="password" placeholder="Parole" required />
<input name="submit" type="submit" value="Ienākt" />
</form>
<p>Reģistrēties? <a href='registration.php'>Registrācija</a></p>

</div>
<?php } ?>
 <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p>Copyright &copy; Kristaps Legzdiņš KL14023 
        					<i class="fa fa-smile-o"></i></p>
        			</div>
        			
        		</div>
        	</div>
        </footer>   
    
    
    
</body>
</html>
