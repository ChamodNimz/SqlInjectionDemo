<?php 

// import connection
require_once('connection.php');

$username = $_POST['username'];
$password = $_POST['password'];

$query= "select username, password from admin where username = '".$username."' and password = '".$password."' ";


if (mysqli_multi_query($connection, $query) or die(mysqli_error($connection))) {
	$resultArray = array();
	do {
		array_push($resultArray,mysqli_store_result($connection));
	}
	while (mysqli_more_results($connection) && mysqli_next_result($connection));
var_dump($resultArray);

if(sizeof($resultArray) == 1 ){
	if(mysqli_num_rows($resultArray[0]) == 1 ){
		header("Location: content/landing.php");
	}else if (mysqli_num_rows($resultArray[0]) == 0) {
		header("Location: index.php?error=1");
	}
	else{
	while ($row = mysqli_fetch_assoc($resultArray[0])) {
		var_dump($row);
	}
}

}
// else if(sizeof($resultArray) == 0){
// 	header("Location: index.php?error=1");
// }
else{
	while ($row = mysqli_fetch_assoc($resultArray[1])) {
		var_dump($row);
	}

	while ($row = mysqli_fetch_assoc($resultArray[0])) {
		var_dump($row);
	}
}

}


?>