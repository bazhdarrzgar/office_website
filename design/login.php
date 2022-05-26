<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
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
<button class="button button2"><a  style="color: white; font-weight: bold" href="../post/admin/login.php">Admin 1</a></button>
<button class="button button2"><a  style="color: white; font-weight: bold" href="../Dashboard/login.php">Admin 2</a></button>


</button>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<br>
<input name="submit" type="submit" value="Logi-n" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>

</body>
</html>
