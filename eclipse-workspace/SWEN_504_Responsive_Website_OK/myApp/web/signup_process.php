<?php
    //  echo '<script>alert("Register   Process")</script>';
	// Connect to server and select database.
	{include 'connection.php';

	}

	// Get values from form
	if (isset($_REQUEST['fname']))
	{
	$ffname = $_REQUEST['fname'];
	$flname = $_REQUEST['lname'];
	$funame = $_REQUEST['uname'];
	$fpsw = $_REQUEST['psw'];
	$fcpsw = $_REQUEST['cpsw'];

		// $ffname = mysqli_real_escape_string($conn,$_REQUEST['fname']);
		// $flname = mysqli_real_escape_string($conn,$_REQUEST['lname']);
		// $funame = mysqli_real_escape_string($conn,$_REQUEST['uname']);
		// $fpsw = mysqli_real_escape_string($conn,$_REQUEST['psw']);
		// $fcpsw = mysqli_real_escape_string($conn,$_REQUEST['cpsw']);

		if ($_POST['psw' != 'cpsw'])
	 {
		echo
		 ("Oops! Password did not match! Try again. ");
		 $conn->close();
		 header('Location:signup.php');

	 }

	 	$fpsw=md5($fpsw); //use of md5 alogorittm to hash the text
	 	$sql = "INSERT INTO TTLogin
	 (firstName, lastName, userName, password)
	 -- VALUES('$ffname', '$flname', '$funame', '$fpsw ');

	 VALUES(?, ?, ?, ? );";
	 $stmt=mysqli_stmt_init($conn);
	 if(!mysqli_stmt_prepare($stmt,$sql)){
	 	echo "Error updating record: ";
	 } else {
	 	mysqli_stmt_bind_param($stmt,"ssss",$ffname, $flname, $funame, $fpsw );
	 	mysqli_stmt_execute($stmt);
	 	echo '<script>
	 	window.location.href="index.php";
	 	alert("Welcome to the Organised kid. Please login to edit Timetable activities");

	 	</script>';
	 }

	 	$conn->close();
	 }


?>
