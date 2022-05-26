<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('config.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($mysqli,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($mysqli,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `admin_user` WHERE username='$username'
        and password='".md5($password)."'";
	$result = mysqli_query($mysqli,$query);
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
        <h3>Username/password is incorrect.</h3>
        <br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">
<center>
<h1>Admin Log In</h1>

<style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */
</style>

<button class="button button1"><a  style="color: white; font-weight: bold" href="../post/user/login.php">User</a></button>
<button class="button button2"><a  style="color: white; font-weight: bold" href="../post/admin/login.php">Admin 1</a></button>
<button class="button button2"><a  style="color: white; font-weight: bold" href="login.php">Admin 2</a></button>

</button>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<br>
<input name="submit" type="submit" value="Login" />
</form>
</div>
<?php } ?>
</body>
</html>
