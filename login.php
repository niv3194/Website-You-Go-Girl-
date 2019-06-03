<?php
session_start();

include_once 'dbconnect.php';
//check if form is submitted
if (isset($_POST['login'])) {
 $email = mysqli_real_escape_string($con, $_POST['email']);//fetches the email of user
 $password = mysqli_real_escape_string($con, $_POST['password']);//fetches the password of user
 $result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $email. "' and password
= '" . md5($password) . "'");
 if ($row = mysqli_fetch_array($result)) {
 $_SESSION['usr_id'] = $row['id'];
 $_SESSION['usr_name'] = $row['name'];
 header("Location: index.php");
 } else {
 $errormsg = "Incorrect Email or Password!!!";//displays error message if the user logs in with incorrect emai/password
 }
}
?><!--close of php-->
<!DOCTYPE html>
<html>
<head>
 <title>Women Empowerment Website </title>
 	<link rel="stylesheet" href="css/styles.css" /><!--links stylesheet-->
 <meta content="width=device-width, initial-scale=1.0" name="viewport" ><!--sets the width and height as per the device-->
</head>
	<?php include('includes/header.php'); ?><!--includes header,php-->
<body class="login"><!--body tag with the class name login-->
<div class="container">
 <div class="row">
 <div class="col">
   <!--connects to php server-->
 <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
name="loginform">

 <legend>Login</legend>
<!--displays labels for email and password-->
 <div class="form-group">
 <label for ="name">Email</label>
 <input type="text" name="email" placeholder="Your Email" required class="textbox"/>
 </div>
 <div class="form-group">
 <label for ="name">Password</label>
 <input type="password" name="password" placeholder="Your Password" required
class="textbox" />
 </div>
 <div class="form-group">
 <input type="submit" name="login" value="Login" class="btn btn-primary" /><!--button for logging in-->
 </div>
 </form>
 <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
</div><!--close of col-md-4-->
</div><!--close of row-->
 <div class="row"><!--div tag with name row-->
 <div class="col">
 New User? <a href="register.php">Sign Up Here</a><!--calls the php program for sign up-->
</div><!--closeof col-md-4-->
</div><!--close of row-->
</div><!--close of container class-->
</body><!--close of body tag-->
<?php include('includes/footer.php');?><!--includes footer using php-->
</html>
