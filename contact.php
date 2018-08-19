<?php 
include_once "includes/includes.php";

session_start();
?>


<?php 


if(isset($_POST['submit-email'])){

	$email_to = "akeemap@hotmail.com";
	$email_subject = "Conjunction to Aroma Bahamas Queries";

	function died($error) {
		//Error code goes here 
		echo "We are very sorry, but there were error(s) found with the form you submitted.";
		echo "These errors appear below.<br /> <br />";
		echo $error. "<br><br>";
		echo "Please go back and fix these erros.<br><br>";
		die();
	}

	//Validation expected data exists

	if(!isset($_POST['firstName']) ||
		!isset($_POST['lastName']) ||
		!isset($_POST['email']) || 
		!isset($_POST['telephone']) ||
		!isset($_POST['comments'])){
			died('We are sorry, but there appears to be a problem with the form you submitted.');
	}

		$firstName = $_POST['firstName']; //required
		$lastName = $_POST['lastName']; //required
		$email = $_POST['email']; //required
		$telephone = $_POST['telephone']; //not required
		$comments = $_POST['comments']; //required

		$error_message = "";
		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

	if(!preg_match($email_exp,$email)) {
		$error_message .= 'The Email Address you entered does not appear to be valid.<br>';
	}

		$string_exp = "/^[A-Za-z .'-]+$/";

	if(!preg_match($string_exp,$firstName)) {
		$error_message .= "The First Name you've entered does not appear to be valid.<br>";
	}

	if(!preg_match($string_exp,$lastName)) {
		$error_message .= "The Last Name you've entered does not appear to be valid.<br>";
	}

	if(strlen($error_message) > 0) {
		died($error_message);
	}

		$email_message = "Form details below. \n\n";

		function clean_string($string) {
			$bad = array("content-type", "bcc:", "to:", "cc:", "href");
			return str_replace($bad,"",$string);
		}

		$email_message .= "First Name: ".clean_string($firstName)."\n";
		$email_message .= "Last Name: ".clean_string($lastName)."\n";
		$email_message .= "Email: ".clean_string($email)."\n";
		$email_message .= "Telephone: ".clean_string($telephone)."\n";
		$email_message .= "Comments: ".clean_string($comments)."\n";

//Create Email Headers

	$headers ='From: ' .$email."\r\n".
	'Reply-To: '.$email."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);		
}

?>




<!DOCTYPE html>
	<head>

		<?php 
			heading();	
		?>

	</head>
	<body>

<!--Nav Bar -->

		<?php 

			 navBar();
		?>

<!--Start of Contact Form -->
	
		<div class="row">
			<div class="column1">
				<center>
			<h3>Contact Us</h3>
			<form action="contact.php" method="POST" width="60%" >

<!--Users First Name Entry-->

				<div class="row">
					<div class="col-25">
						<label for="firstName">Full Name</label>
					</div>
					<div class="col-75">
						<input type="text" name="firstName" placeholder="First Name" required>
					</div>
				</div>

<!-- User Last Name Entry-->

				<div class="row">
					<div class="col-25">
						<label for="lastName">Last Name</label>
					</div>
					<div class="col-75">
						<input type="text" name="lastName" placeholder="Last Name" required>
					</div>
				</div>


<!--Users Email Entry-->

				<div class="row">
					<div class="col-25">
						<label for="email">Email Address</label>
					</div>
					<div class="col-75">
						<input type="email" name="email" placeholder=" Email Address" required>
					</div>
				</div>
					
<!--Users TeleContact Entry-->

				<div class="row">
					<div class="col-25">
						<label for="telephone">TelePhone #</label>
					</div>
					<div class="col-75">
						<input type="text" name="telephone" placeholder=" Contact Number">
					</div>
				</div>

<!--Select Subject for comments-->

				<div class="row">
					<div class="col-25">
						<label for="subjects">Subjects</label>
					</div>
					<div class="col-75">
						<select id="subjects" name="subjects" mulitple required>
							<option value="option1">Issues</option>
							<option value="option2">Sales</option>
							<option value="option3">Customer Service</option>
						</select>
					</div>
				</div>
			
<!--TextArea for comments-->

				<div class="row">
					<div class="col-25">
						<label for ="comments">Comments</label>
					</div>
					<div class="col-75">
						<textarea id='comments' name="comments" placeholder="Add Comments:" style="height:100px" required></textarea>
					</div>
				</div>	

<!--Button to Submit to Contact-->

				<input type="submit" name="submit-email" value="Send Email">
			</center>
			</form>

		</div>

<!--Contact Information-->

			<div class="column2">
				<h2>Contact Information:</h2>
					<div align="right">
					<center>
					<i class="fas fa-map-marker-alt" <h4> Cameron Road, Wirral Road Burgaunday Block, United States</h4></i> 

					<i class="fas fa-phone-square" <h4> +242 342 2243
					 <br>+876 232 8483</h4></i> 

					<i class="fas fa-envelope"<h4> info@amorabahamas.com</h4></i> 

					<i class="fas fa-globe" <h4> www.amorabahamas.com</h4></i> 

					<hr>

					<p>We are Fragrance Store where you can explore all kinds of Perfumes, Disfusers, Colenges and place your order online.</p>
					</center>
			</div>
		</div>

	</div>
		
		<!--Style for Two Column-->
		<style>
	.row{
		display: flex;
	}

	.column1 {
		flex:65%;
		padding:8px;
		height:80%;
	}
	.column2{
		flex:30%;
		height:659px;
	}

	.col-25{
		float:left;
		width:25%;
		margin-top: 6px;
	}

	.col-75{
		float:left;
		width:75%;
		margin-top: 6px;
	}

	.label{

	}

	.row: after {
		content: "";
		display:table;
		clear:both;
	}
	</style>
	</body>

<!--Footer div -->
	<footer>

		<?php footer(); ?>

	</footer>

</html>