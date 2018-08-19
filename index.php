<?php 
include 'includes/dbh-inc.php';

session_start();

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<meta "viewport" content="width=device-width, initial-scale=1.0">
		<title>Amomra Bahamas</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/brands.css" integrity="sha384-nT8r1Kzllf71iZl81CdFzObMsaLOhqBU1JD2+XoAALbdtWaXDOlWOZTR4v1ktjPE" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous"> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

		<link href="https://fonts.googleapis.com/css?family=Fenix" rel="stylesheet">

		    
		    <link rel="stylesheet" href="style.css">


	</head>

	
	
		<nav>
			<div>
				<a href="#index.html"> <img src="img/icon.png" height="80px"></a>
					

			<div>
				<h2>
				<?php 
					if(isset($_SESSION['uid'])){
						echo "Hello ";
						echo $_SESSION['firstName'] ; 
					}
				?>
					
				</h2>
			</div>

<!--Login Area of WebSite-->
			
			<div align='right' class='dropdown-area'>

		<?php 
			if(isset($_SESSION['uid'])){
				echo '
					<button onmouseover=\'showOption()\' class="dropbtn"><i class="fas fa-user-circle">My Account</i></button>
					<div id="myDropdown" class="dropdown-content">';
			} else{
				echo '
					<button onmouseover=\'showOption()\' class="dropbtn"><i class="fas fa-user-circle">My Account</i></button>
					<div id="myDropdown" class="dropdown-content">';
			}
			
			?>
		

<!--Sign Up Form Modal-->
<?php 
	if(!isset($_SESSION['uid'])){
		echo '
<div>

<button class = "button-mix" onclick="document.getElementById(\'id02\').style.display=\'block\'" style=\'width:auto;class=\'Login\'>SignUp</button> 

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="signup.php" method="POST">
    <div class="clos econtainer">
      <span onclick="document.getElementById(\'id02\').style.display=\'none\'" class="close" title="Close Modal">&times;</span>
    </div>

<div>
	<h1 align="center"> Aroma Bahamas Create User</h1>s
</div>

	<div class="container">

		<div > 
  			<label for="uid"><b>First Name</b></label>
  			<i class="fas fa-pencil-alt"></i>
  			<input type="text" name="firstName" placeholder="First Name" required>
  		</div>

  		<div > 
  			<label for="uid"><b>Last Name</b></label>
  			<i class="fas fa-pencil-alt"></i>
  			<input type="text" name="lastName" placeholder="Last Name" required>
  		</div>

  		<div > 
  			<label for="uid"><b>Email</b></label>
  			<i class="fas fa-envelope"> </i>
  			<input type="text" name="email" placeholder="Email" required>
  		</div>

  		<div > 
  			<label for="uid"><b>Username</b></label>
  			<i class="fas fa-user"></i>
  			<input type="text" name="uid" placeholder="Username" required>
  		</div>

  		<div > 
  			<label for="uid"><b>Password</b></label>
  			<i class="fas fa-unlock"> </i>
  			<input type="password" name="pwd" placeholder="Password" required>
  		</div>

  		<div>
  			<label for="pwd"><b>Confirm Password</b></label>
  			<i class="fas fa-unlock"></i>
  			<input type="password" name="pwdconfirm" placeholder="Confirm Password" required>
  		</div>

		<div align="left">
	     	<label>
	        <input type="checkbox" checked="checked" name="remember" required> Agree to Terms and Policy
	     	</label>
      	</div>

  		<div align="center">

      		<button type=\'submit\' name=\'submit-signup\'>SignUp User</button>

      	</div>

      	
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById(\'id02\').style.display=\'none\'" class="cancelbtn">Cancel</button>
      <span class="psw">Already<a href="#">have an Account?</a></span>
    </div>
  </form>
</div>
</div>  ' ;}

?>

					
<!--Login Button Modal -->

<?php 
	if(!isset($_SESSION['uid'])){
		echo '

<div>
 
<button class = "button-mix" onclick="document.getElementById(\'id01\').style.display=\'block\'" style=\'width:auto;class=\'Login\'>Login</button> 


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="POST">
    <div class="closecontainer">
      <span onclick="document.getElementById(\'id01\').style.display=\'none\'" class="close" title="Close Modal">&times;</span>
    </div>

<div>
	<h1 align="center"> Aroma Bahamas Login User</h1>
</div>

	<div class="container">

  		<div > 
  			<label for="uid"><b>Username</b></label>
  			<i class="fas fa-user"></i>
  			<input type="text" name="uid" placeholder="Username" required>
  		</div>

  		<div>
  			<label for="pwd"><b>Password</b></label>
  			<i class="fas fa-unlock"></i>
  			<input type="password" name="pwd" placeholder="Password" required>
  		</div>

  		<div>

      		<button type="submit" name="submit-login">Login Your Account</button>

      	</div>

      	<div>

	     <label>
	        <input type="checkbox" checked="checked" name="remember"> Remember me
	     </label>

      	</div>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById(\'id01\').style.display=\'none\'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
	</div>	'
;}

?>
		
		<?php 
				if(!isset($_SESSION['uid'])){
					
					
					;}
			?>
				
			<?php 
				if(isset($_SESSION['uid'])){
					echo	" 
						<a href = '#'><button type='button' name='myAccount'>Your Account</button></a>

						<a href = '#'><button type='button' name='myOrders'>Your Orders</button></a>

						<a href = '#'><button type='button' name='myRecommendations'>Your Recommendations</button></a>

						<a href = '#'><button type='button' name='myAccount'> Your Subscribe & Save Items</button></a>

						<a href='logout.php'><button type='button' name='log-out'>Sign Out</button></a>
						"
					;}
					
			?>
			</div>



			<?php 
			if(isset($_SESSION['uid'])){
				echo "<button><i class='fas fa-shopping-cart'>My Cart</i></button>"
				;};

			?>
		</div>	
	</div>



<!--Nav Bar and Nav Links-->

			<div>
				 <button ><a href="index.php">Home</a></button>
				 <button><a href="gallery.php">Gallery</a></button>
				<button><a href="#product.php">Products</a></button>
				 <button><a href="about.php">About</a></button>
				 <button><a href="contact.php">Contact</a></button>
			</div>
		</nav>

<!-- Bottom Section of Page -->
	<section>
		
		<div> 
			<h3>Featured Perfume</h3>
		</div>

	</section>

	<section id="mingo">

	<div id="">
		<div>
			<center><a href="index.html"> <img src="img/icon.png" alt="Amora Branding" height="280px"></a>

				<p> We are Royal Amora Bahamas where you can explore all kinds of Perfumes and Fragrances. Place your order online and be fine. lorem ipsum dolor sit amet, consecteur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolre.</p>
				<hr><br>
			</center>
		</div>

		<div >
			<ul> Fragrance Catergory
				<li>Perfume</li>
				<li>Disfusers</li>
				<li>Colenge</li>
				<li>Woman</li>
				<li>Man</li>
			</ul>	
		</div>


<!--Operating Hours-->
		<div>
			<table width="50%" cellpadding="03px" align="center">
			<th> </th>
			<th align="center"> Store Hours for Visits</th>
			<th> </th>
				<tr>
					<th>Days</th>
					<th></th>
					<th>Hours</th>
				</tr>
				<tr>
					<td>Monday</td>
					<td></td>
					<td>09:00am - 05:00pm</td>
				</tr>
				<tr>
					<td>Tuesday</td>
					<td></td>
					<td>09:00am - 05:00pm</td>
				</tr>
				<tr>
					<td>Wednesday</td>
					<td></td>
					<td>09:00am - 05:00pm</td>
				</tr>
				<tr>
					<td>Thursday</td>
					<td></td>
					<td>09:00am - 05:00pm</td>
				</tr>
				<tr>
					<td>Friday</td>
					<td></td>
					<td>09:00am - 05:00pm</td>
				</tr>
				<tr>
					<td>Saturday</td>
					<td></td>
					<td>09:00am - 02:00pm</td>
				</tr>
				<tr>
					<td>Sunday</td>
					<td></td>
					<td> Closed </td>
				</tr>
			</table>
		</div>
	</div>
	</section>
	</body>

	<footer>

		<div id="connect">
			<a href = "www.twitter.com" target="blank"> <i class="fab fa-twitter-square"> </i> Follow </a>

			<a href = "www.facebook.com" target="_blank"> <i class="fab fa-facebook-square"> </i> Like </a>

			<a href = "https://www.cloudconnect.goog" target="_blank"> <i class="fab fa-google-plus"> </i> Connect </a>

			<a href = "www.instagram.com" target="_blank"> <i class="fab fa-instagram"> </i> Follow </a>

			<a href = "www.youtube.com" target="_blank"> <i class="fab fa-youtube-square"> </i> Watch </a>
			
		</div>


		<div >Amora Bahamas &copy2018,All Rights Reserved, Designed & Developed By: DevOptical Web Development
		</div>

	</footer>

	<style>
		.dropbtn{
			font-size:25px;
		}

		.dropdown-content{
			display:none;
			position:absolute;
			background-color: #f1f1f1;
			overflow:auto;
			z-index:1;
			min-width:160px;
			box-shadow: 0px 8px 16px 0px rbga(0,0,0,0.2);
		}


		.dropdown-content a{
			color:#aaaaaa;
			padding: 12px 16px;
			text-decoration:none;
			display:block;
		}

		.dropdown a:hover {
			background-color:#ddd;
		}
		.dropdown{
			position: relative;
			display: inline-block;

		}
		.show{
			display:block;
		}
		.dropdown-area{
			position:relative;
			display:inline-block;
			float:right;
		}

		.button-mix{
			background-color:silver;
			display:inline-block;
			font-size:40px;
			max-width:100%;
			text-align:center;
		}

		.button-mix:hover{
			background-color: green;
			opacity:0.4;
		}

	</style>

	<style>


/* Full-width input fields */
input[type=text], input[type=password] {
    width: 65%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
/*button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 25%;
}*/

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.closecontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

.container {
    padding: 25px;

}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>

	<script>


//Allow for the hover over My Account 
		function showOption() {
			document.getElementById('myDropdown').classList.toggle("show");
		}

		function clearOption(){
			document.getElementById('myDropdown').classList.toggle("");
		}

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal2, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


/*Jquery		
$(document).ready(function(){


		});
	
*/
	</script>

</html>