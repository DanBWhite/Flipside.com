<?php
//login.php

require_once 'includes/global.inc.php';

$error = "";
$username = "";
$password = "";

//check to see if they've submitted the login form
if(isset($_POST['submit-login'])) { 

	$username = $_POST['username'];
	$password = $_POST['password'];
	$user = unserialize($_SESSION['user']);

	$userTools = new UserTools();
	if($userTools->login($username, $password)){ 
		
		 if($user->side== "right"){ 
		//successful login, redirect them to a page
		header("Location: right.php");
		}
		if($user->side== "left"){ 
		//successful login, redirect them to a page
		header("Location: left.php");
		}
	}else{
		$error = "Incorrect username or password. Please try again.";

		echo "$error";
	}
}
?>

<html>
<head>
	<title>Login</title>
</head>
<body>
<?php
if($error != "")
{
    echo $error."<br/>";
}
?>
	<form action="login.php" method="post">
	    Username: <input type="text" name="username" value="<?php echo $username; ?>" /><br/>
	    Password: <input type="password" name="password" value="<?php echo $password; ?>" /><br/>
	    <input type="submit" value="Login" name="submit-login" />
	</form>
</body>
</html>


