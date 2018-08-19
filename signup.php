 <?php 
 include_once "includes/dbh-inc.php";


	if(isset($_POST['submit-signup'])){
		session_start();
		$firstName = mysqli_real_escape_string($connection, $_POST['firstName']);
		$lastName = mysqli_real_escape_string($connection, $_POST['lastName']);
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$uid = mysqli_real_escape_string($connection, $_POST['uid']);
		$pwd = mysqli_real_escape_string($connection, $_POST['pwd']);
		$pwdconfirm = mysqli_real_escape_String($connection, $_POST['pwdconfirm']);

//Error Handlers

//Check for empty fields
		if(empty($firstName) || empty($lastName) || empty($email) || empty($uid) || empty($pwd) || empty($pwdconfirm)){
			header("Location: index.php?signup=empty");
			exit();
		}else{
// Check if input chars are valid
			if(!preg_match("/^[a-zA-Z]*$/", $firstName) || !preg_match("/^[a-zA-Z]*$/", $lastName) || !preg_match("/^[a-zA-Z]*$/", $uid)){
				header("Location: index.php?signup=invalid");
				exit();
			}else{
//Check if email is valid 
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					header("Location: index.php?signup=email");
					exit();
				}else{
//Checking if username already exsists
					$query = "SELECT * FROM customers WHERE uid = '$uid'";
					$queryResult = mysqli_query($connection, $query);
					$queryResultCheck = mysqli_num_rows($queryResult);
//Check if user id  is more than 0
					if($queryResultCheck > 0){
						header("Location: index.php?signup=usertaken");
						exit();
					}else{
//Hashing the Password
						$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
//Insert user into database
						$query = "INSERT INTO customers(firstName,lastName,email,uid,pwd)" ;
						$query .= "VALUES ('$firstName', '$lastName', '$email', '$uid', '$hashedPwd')" ;
						$result = mysqli_query($connection, $query);
						if(!result){
							die("Connection and query has failed");
						}else{
							header("Location: index.php?signup=success");
							exit();
						}
					}
				}
			}
			}
		};

			/*	$_SESSION['message'] = "User registration successful";
				header("Location: index.php");
			}else {
				$_SESSION['message'] = "The Password do not match";
				header("Location: signup.php");
				exit();};*/


?>
