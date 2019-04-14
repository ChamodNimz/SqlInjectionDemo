<?php 

// import connection
require_once('connection.php');


if(isset($_POST['search'])){

$query = "select * from courses where courseName like '%$search%' ";


if(mysqli_multi_query ($connection,$query)){

	if($result = mysqli_store_result($connection))){
		while($row = mysqli_fetch_array($result)){
			
		}
		mysqli_free_result($result);
		header("Location: content/landing.php");

		}else{
			header("Location: index.php?error=1");
		}

	}

}

?>
