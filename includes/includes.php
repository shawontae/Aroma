<?php 

function heading(){
	echo "<meta charset='UTF-8'>
		<meta 'viewport' content='width=device-width, initial-scale=1.0'>
		<title>Amomra Bahamas</title>
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/brands.css' integrity='sha384-nT8r1Kzllf71iZl81CdFzObMsaLOhqBU1JD2+XoAALbdtWaXDOlWOZTR4v1ktjPE' crossorigin='anonymous'>
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css' integrity='sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6' crossorigin='anonymous'>
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css' integrity='sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ' crossorigin='anonymous'> 

		    <link rel='stylesheet' href='style.css'>";

}


function navBar(){
echo "	
			
		<nav>
			<div>
				<a href='#index.html'> <img src='img/icon.png' height='80px'></a>
				<h1>Amora Bahamas</h1>

			</div>
			<div align='right'>
				<form action='index.html' method='POST' >
					<input type='text' name='username' placeholder='Enter Username'>
					<input type='password' name='password' placeholder='Enter Password'>
					<input type='submit' name='submit' value='Login'>
				</form>
			</div>
			

			<div>
				 <button ><a href='index.php'>Home</a></button>
				 <button><a href='gallery.php'>Gallery</a></button>
				<button><a href='#product.php'>Products</a></button>
				 <button><a href='about.php'>About</a></button>
				 <button><a href='contact.php'>Contact</a></button>
			</div>
		</nav>";

}


function footer() {
	echo " 	<div>
			<a href = 'www.twitter.com' target=_blank'> <i class='fab fa-twitter-square'> </i> Follow </a>

			<a href = 'www.facebook.com' target='_blank'> <i class='fab fa-facebook-square'> </i> Like </a>

			<a href = 'https://www.cloudconnect.goog' target='_blank'> <i class='fab fa-google-plus'> </i> Connect </a>

			<a href = 'www.instagram.com' target='_blank'> <i class='fab fa-instagram'> </i> Follow </a>

			<a href = 'www.youtube.com' target='_blank'> <i class='fab fa-youtube-square'> </i> Watch </a>
			
		</div>


		<div >Amora Bahamas &copy2018,All Rights Reserved, Designed & Developed By: DevOptical Web Development
		</div> ";

}

function login() {

}

