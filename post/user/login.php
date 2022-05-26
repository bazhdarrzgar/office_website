<?php include('Account.php');  ?>

<?php
 $user = new Account($db);
?>
<?php
if(isset($_POST['btnLogin'])){
	$user->login($_POST['username'],md5($_POST['password']));


}

?>


<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</header>
<body>
<div class="form">
<center>
<h1>User Log In</h1>

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

<button class="button button1"><a  style="color: white; font-weight: bold" href="login.php">User</a></button>
<button class="button button2"><a  style="color: white; font-weight: bold" href="../admin/login.php">Admin 1</a></button>
<button class="button button2"><a  style="color: white; font-weight: bold" href="../../Dashboard/login.php">Admin 2</a></button>

</button>


<form action="login.php" method="POST">
	<div class="container">
		<div class="col-md-4">
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="username...">
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="password...">
			</div>
			<div class="form-group">
      <input name="btnLogin" type="submit" value="Logi-n" />

			</div>

		</div>
	</div>
</form>

<p>Not registered yet? <a href='../../user_login/registration.php'>Register Here</a></p>

<body>
<html>



