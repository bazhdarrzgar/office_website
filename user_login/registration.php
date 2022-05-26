<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('config.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        $name = stripslashes($_REQUEST['name']);
	$name = mysqli_real_escape_string($mysqli,$name);

        $age = stripslashes($_REQUEST['age']);
	$age = mysqli_real_escape_string($mysqli,$age);

        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($mysqli,$username);

	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($mysqli,$email);

	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($mysqli,$password);

	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (name, age, username, email, password, trn_date)
        VALUES ('$name', '$age', '$username', '$email', '".md5($password)."', '$trn_date')";
        $result = mysqli_query($mysqli,$query);
        if($result){
            echo "<div class='form'>
        <h3>You are registered successfully.</h3>
        <br/>Click here to <a href='../post/user/login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="name" placeholder="Name" required />
<input type="text" name="age" placeholder="Age" required />
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>
