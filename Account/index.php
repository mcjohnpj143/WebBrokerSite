<?php session_start();
if(!isset($_SESSION["userTrapUser"])){
header("location:../../WebBroker");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>My Account</title>
<!--Cards-->
<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 5px; /* 5px rounded corners */
}

/* Add rounded corners to the top left and the top right corner of the image */
img {
    border-radius: 5px 5px 0 0;
}
</style>
<!--Cards end-->
<style>
.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
	border-radius: 0% 0% 0% 0%;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../CSS/LoginStyle.css">
<link rel="stylesheet" href="../CSS/FontStyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="../CSS/FixedMenuTopStyle.css">
<link rel="stylesheet" href="../CSS/ModalLoginStyle.css">

<body>

<!-- Navigation -->
<nav>
  <ul class="w3-black topnav" id="fixed" >
    <li><a href="javascript:void(0)"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
    <li><a href="javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
    <li><a href="javascript:void(0)"><i class="fa fa-wrench" aria-hidden="true"></i> Manage Houses</a></li>
	<li id="logout"><a href="../PHP/Session_Destroy.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
	<li class="icon" id="wew">
		<a href="javascript:void(0);" onclick="myFunction()" id="menuIcon" >
			<i class="fa fa-bars" ></i>
		</a>
		<a href="javascript:void(0);" onclick="myFunction()" style="display:none;" id="closeIcon">
			<i class="fa fa-times"></i>
		</a>
	</li><!--☰ or &#9776;-->
	<li>
		<form>
			<input type="text" class="search2 " id="search" name="search" placeholder="Search here and press enter..." />
			
		</form>
	</li>
  </ul>
</nav>

<!-- Content -->
<div class="main">

<!-- Profile -->
<br>
<br>
<center>
<section class="w3-row-padding w3-center w3-light-grey" style="max-width:400px">
	<div class="card">
	  <img src="../Images/img_avatar.png" alt="Avatar" style="width:100%">
	  <div class="container">
		<h4 class="w3-wide"><b>Paul John D. Peligro</b></h4> 
		<p>IT Developer/IT Instructor/Brooker<br>
		<h5 class="w3-wide">Contact Me</h5>
		<strong><center>Email: pauljohn.peligro@brooker.ph<br>Contact Me: +639262298793</center></strong>
	  </div>
	</div>
</section>
</center>
<br>

<!-- Brooker Description -->
<section class="w3-container w3-center w3-content" style="max-width:600px">
  <h2 class="w3-wide">My Description</h2>
  <p class="w3-opacity"><i>I find home for you</i></p>
  <p class="w3-justify">I am Paul John D. Peligo, a registered Broker since 2010. 
						I will find a better house that suits for you.  The site can actually allow all brookers around the Philippines, 
						to post their selling products/properties by just signing up for FREE subscription, no payments guaranteed!
						The main purpose of this site is to help all brookers. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						Ut enim ad minim veniam, quis nostrud exercitation ullamco 
						laboris nisi ut aliquip ex ea commodo consequat. 
						Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
						cupidatat non proident, sunt in culpa qui officia deserunt mollit 
						anim id est laborum consectetur adipiscing elit, sed do eiusmod 
						tempor incididunt ut labore et dolore magna aliqua.
						<br>
</section>
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-pinterest-p"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium">
  Powered by <a href="https://www.facebook.com/mcjohn.pj22" target="_blank">The Brooker's Profile</a>
  <br>&copy; 2016 - The Brooker Site
  </p>
</footer>

</div>
<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}
function myFunction() {
    var x = document.getElementById("fixed");
    if (x.className === "w3-black topnav") {
        x.className += " responsive";
		showStuff2();
    } else {
        x.className = "w3-black topnav";
		showStuff1();
    }
}
function showStuff1() {
    document.getElementById("menuIcon").style.display = 'block';
	document.getElementById("closeIcon").style.display = 'none';
}
function showStuff2() {
    document.getElementById("menuIcon").style.display = 'none';
	document.getElementById("closeIcon").style.display = 'block';
}
</script>



</body>
</html>

