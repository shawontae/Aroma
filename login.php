<?php 
include_once 'includes/dbh-inc.php';

	if(isset($_POST['submit-login'])){
		session_start();
		$uid = mysqli_real_escape_string($connection, $_POST['uid']);
		$pwd = mysqli_real_escape_string($connection, $_POST['pwd']);
    //Error Handlers

        //Check if input are empty
        if(empty($uid) || empty($pwd)){
            header("Location: index.php?login=empty");
            exit();
        }else{
            $query = "SELECT * FROM customers WHERE uid = '$uid'";
            $result = mysqli_query($connection, $query);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck < 1){
                header("Location: index.php?login=error");
                exit();
            }else{
                if($row = mysqli_fetch_assoc($result)){
        //Dehashing password
                    $hashedPwdCheck = password_verify($pwd, $row['pwd']);
                    if($hashedPwdCheck == false){
                        header("Location: index.php?login=errorbam");
                        exit();
                    }elseif ($hashedPwdCheck ==true){
            //Log in the user here
                        $_SESSION['u-id'] = $row['id'];
                        $_SESSION['firstName'] = $row['firstName'];
                        $_SESSION['lastName'] = $row['LastName'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['uid'] = $row['uid'];
                        header("Location: index.php?login=success");
                        exit();

                    }
                }
            }
        }
     };


	?>

	<div>

<button onclick="document.getElementById('id01').style.display='block'" style='width:auto;class='Login'>SignUp</button> 

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="signup.php" method="POST">
    <div class="clos econtainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
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

            <button type='submit' name='submit-signup'>SignUp User</button>

        </div>

        <div>

         <label>
            <input type="checkbox" checked="checked" name="remember"> Agree to Terms and Policy
         </label>

        </div>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
</div>


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

/*Jquery        
$(document).ready(function(){


        });
    
*/
    </script>

</html>