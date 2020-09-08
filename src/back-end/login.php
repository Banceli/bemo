<?php
    function validate_credentials($username,$password){
       $hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';
       if ( $username == 'admin' && password_verify($password, $hash)) {
         //echo 'Password is valid!';
		  header("Location: ../templates/home.php");
          exit();
      } else {
         echo 'Wrong username or password';
      }
	}
	validate_credentials($_POST['username'], $_POST['password']);
?>