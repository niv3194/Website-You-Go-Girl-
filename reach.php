<!DOCTYPE HTML>
<html>
  <head>
  	<meta charset="utf-8"/>
  	<title>Women Empowerment Website</title>
    	<?php include('includes/header.php'); ?><!--includes header using php-->
  	<link rel="stylesheet" href="css/styles.css" /> <!--linked to stylesheet named style.css-->
  </head>
<body class="contact"><div class="heading">
  <h1>Reach out to us</h1><!--displays heading in largest size-->
</div>
<!--displays labels and textboxes for name,email and commnets-->
<div class="contact-form">
  <form id="contact-form" method="post" action="reach.php">
    Name: <input type="text" class="control" name="name">
    <br><br>
    E-mail: <input type="text" class="control" name="email">
    <br><br>
    Comment:<textarea class="control" rows="4" name="comments"></textarea><!--text area for comment-->
    <br>
    <input type="submit" name="submit" class="control submit" value="Submit"><!--button for submit-->
  </form>
</div>
<div class="social">
<h3>Let's Connect </h3>
</div>
<a href="https://www.facebook.com/" target='_blank' class="fa fa-facebook"></a><!--links facebook icon-->
<?php
// define variables and set to empty values
if(isset($_POST['submit'])){
  $con= mysqli_connect("localhost","root","");//connects to db
  if(!$con)
  {
    die("Cannot connect".mysql_error());//displays error if cannot connect to db
  }

mysqli_select_db($con,"mycontact");//enters details in table mycontact
$sql= "INSERT INTO contact_form (name,email,comment) VALUES ('$_POST[name]','$_POST[email]','$_POST[comments]')";
mysqli_query($con,$sql);

mysqli_close($con);
echo "We will get back to you soon!!";//displays the message once the data is entered
}
?>
<?php include('includes/footer.php');?><!--includes footer using php-->
