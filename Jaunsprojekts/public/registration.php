<?php
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Reģistrācija</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
        if (isset($_POST['username'])){
        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		$email = stripslashes($email);
		$email = mysql_real_escape_string($email);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysql_query($query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="login-card">
<h1>Reģistrācija</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Vārds" required />
<input type="text" name="email" placeholder="E-pasts" required />
<input type="password" name="password" placeholder="Telefons numurs" required />
<input type="password" name="password" placeholder="Parole" required />
<input type="submit" name="submit" value="Registrācija" />

<p> Atpakaļ: <a type="submit" href='login.php'>Ienākt</a></p>
				
</form>
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
