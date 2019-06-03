<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Women Empowerment Website</title>
<!--links stylesheet-->
<link rel="stylesheet" href="css/styles.css" /> <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"><!--linked to stylesheet named style.css-->
</head>
<header>
	<div class="maincontainer"><!--div tag with class name main container-->
	<!--div class for nav bar-->
	<div class="topnav" id="myTopnav">
	  <a href="index.php" class="active">Home</a><!--links to index page-->
	  <a href="independent.php">Independent Living</a><!--links to independent.php-->
		<a href="build.php">Build Self Confidence</a><!--links to build.php-->
	  <a href="conquer.php">Conquer your dreams</a><!--links to conquer.php-->
	  <a href="aboutUs.php">About Us</a><!--links to aboutUs.php-->
		<a href="aboutme.php">Our Team</a><!--links to aboutme.php-->
		<a href="login.php">Login</a><!--links to login.php-->
	  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
	</div>
</header>
<!--links javascript for the dropdown menu-->
<script src="js/myscripts.js" /></script>
	<script>
	function myFunction() {
	    var x = document.getElementById("myTopnav");
	    if (x.className === "topnav") {
	        x.className += " responsive";
	    } else {
	        x.className = "topnav";
	    }
	}
	</script>
</div>
