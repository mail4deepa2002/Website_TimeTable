
<?php

if (!isset($_SESSION)){
  session_start();
}

// Connect to server and select database.
include 'connection.php';
//include 'userLoginCheck.php'
  // echo " Connection Successful";

	$userName = "";
if (isset($_SESSION)) {
	// code...

	$userName = $_SESSION['userName'];
	//echo $a;
		//echo "yaaaaaaah $userName";
}
else {
	echo "nooooooooooooo";
}

// Get values from form
if (isset($_REQUEST['uname']))
{

	$childName=$_REQUEST['uname'];
		$childPassword=$_REQUEST['psw'];

		//echo "yaaaaaaah $userName $childName $childPassword"; // parent name


$childPassword=md5($childPassword); //use of md5 alogorittm to hash the text
$sql = "INSERT INTO children VALUES(?, ? )";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
echo "Error updating record: ";
} else {
mysqli_stmt_bind_param($stmt,"ss",$childName, $childPassword);
mysqli_stmt_execute($stmt);

$sql = "INSERT INTO childrenParent VALUES(?, ? )";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
echo "Error updating record: ";
} else {
	mysqli_stmt_bind_param($stmt,"ss",$userName, $childName);
	mysqli_stmt_execute($stmt);
	echo '<script> window.location.href="timeTable.php"; alert("Child added"); </script>';
}




$conn->close();

//
// if successfully insert data into database, displays message "Successful".

}
}

// echo "<a href='insert.php'>Back to main page</a>";
// }}}

// else {
// echo "ERROR";
// // close connection
// mysql_close();
// }
?>
