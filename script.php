<?php 

// import connection
require_once('connection.php');

$username = $_POST['username'];
$password = $_POST['password'];

$query= "select username, password from admin where username = '".$username."' and password = '".$password."' ";

if(mysqli_multi_query ($connection,$query)){

	if(mysqli_num_rows($result = mysqli_store_result($connection))){
		
		mysqli_free_result($result);
		header("Location: content/landing.php");

		}else{
			header("Location: index.php?error=1");
		}

	}

?>