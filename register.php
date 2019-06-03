<?php
session_start();

include_once 'dbconnect.php';
//set validation error flag as false
$error = false;
//check if form is submitted
if (isset($_POST['signup'])) {
 $name = mysqli_real_escape_string($con, $_POST['name']);
 $email = mysqli_real_escape_string($con, $_POST['email']);
 $password = mysqli_real_escape_string($con, $_POST['password']);
 $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

 //name can contain only alpha characters and space
 if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
 $error = true;
 $name_error = "Name must contain only alphabets and space";
 }
 //checks if the email is valid
 if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
 $error = true;
 $email_error = "Please Enter Valid Email ID";
 }
 //checks if the password length is greater than 6
 if(strlen($password) < 6) {
 $error = true;
 $password_error = "Password must be minimum of 6 characters";
 }
 //checks if the password and confirm password are same
 if($password != $cpassword) {
 $error = true;
 $cpassword_error = "Password and Confirm Password doesn't match";
 }
 //enters details into table if there are no errors
 if (!$error) {
 if(mysqli_query($con, "INSERT INTO users(name,email,password) VALUES('" . $name . "', '" .
$email . "', '" . md5($password) . "')")) {
 $successmsg = "Successfully Registered! <a href='login.php'>Click here to Login</a>";//displays success message if no errors
 } else {
 $errormsg = "Error in registering...Please try again later!";//displays error message if there are errors
 }
 }
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Women Empowerment</title>
 <meta content="width=device-width, initial-scale=1.0" name="viewport" >
 <link rel="stylesheet" href="css/styles.css" /><!--links to stylesheet-->
</head>
	<?php include('includes/header.php'); ?><!--includes header using php-->
<body class="signup">
 <div class="container-fluid">
 <!-- add header -->
 <div class="navbar-header">
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>

</div><!--close of navbar-->
 <!-- menu items -->
</div><!--close of containerfluid-->
<div class="container">
 <div class="row">
 <div class="col">
 <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
name="signupform"><!--calls the php database-->
   <h2><center>Sign-Up for updates!!</center></h2><!--displays heading in second largest size and center aligns it-->
 <legend>Sign Up</legend>
 <!--displays label for name,email,password and confirm password-->
 <div class="form-group">
 <label for="name">Name</label>
 <input type="text" name="name" placeholder="Enter Full Name" required
value="<?php if($error) echo $name; ?>" class="form-control" /><!--textbox for name with placeholder as name-->
 <span class="text-danger"><?php if (isset($name_error)) echo $name_error;
?></span><!--calls the php name validator to check if the name is valid-->
 </div>

 <div class="form-group">
 <label for="name">Email</label>
 <input type="text" name="email" placeholder="Email" required value="<?php
if($error) echo $email; ?>" class="form-control" /><!--textbox for email with placeholder as email-->
 <span class="text-danger"><?php if (isset($email_error)) echo $email_error;
?></span><!--class the php email validator for validation-->
 </div>
 <div class="form-group">
 <label for="name">Password</label>
 <input type="password" name="password" placeholder="Password" required
class="form-control" /><!--textbox for password with placeholder as password-->
 <span class="text-danger"><?php if (isset($password_error)) echo
$password_error; ?></span><!--calls the php password validator for validation-->
 </div>
 <div class="form-group">
 <label for="name">Confirm Password</label>
 <input type="password" name="cpassword" placeholder="Confirm Password"
required class="form-control" /><!--text box for confirm password with placeholder  as confirm password-->
 <span class="text-danger"><?php if (isset($cpassword_error)) echo
$cpassword_error; ?></span><!--calls the php confirm password validator for validation-->
</div><!--close of form-group-->
 <div class="form-group"><!--div class for sign up button-->
 <input type="submit" name="signup" value="Sign Up" class="btn btn-primary" />
</div><!--close of form-group-->
</form><!--close of form-->
 <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; }
?></span><!--prints the success message if the data is correct else the warning message is printed-->
 <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
</div><!--close of col-->
</div><!--close of row-->
 <div class="row"><!--div class with name row-->
 <div class="col"><!--div class with name column-->
 <center>Already Registered? <a href="login.php">Login Here</a></center><!--calls the php program for login -->
</div><!--close of col-->
</div><!--close of row-->
</div><!--close of container-->
</body><!--close of body tag-->
	<?php include('includes/footer.php'); ?><!--includes footer-->
</html>
