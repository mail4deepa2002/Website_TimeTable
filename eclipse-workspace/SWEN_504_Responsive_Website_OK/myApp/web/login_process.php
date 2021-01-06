<?php
if (!isset($_SESSION)){
  session_start();
}
// echo '<script>alert("Login  Process")</script>';
//Get values from form to PHP

// Get values from form
if (isset($_POST["uname"]))
{
$radio_value1 = $_POST['parentRadio'];
$radio_value2 = $_POST['childRadio'];
$formUsername=$_POST["uname"];
$formPassword=$_POST["psw"];

}


//server connnection
//server connnection
{include 'connection.php';}

if ($conn==true){
	echo "Connection Successful";
} else{
	die("Connection failed: " . $conn->connect_error);
}

// Query if email exists in db
// $sql = "select username, password from TTLogin where username='$formUsername' and password='$formPassword'";


//Create a template
$formPassword=md5($formPassword);

if(isset($_POST['customRadio1'])){
	$sql = "select username, password from TTLogin where username=? and password=?";

	//Create a prepared PDOStatement
	$stmt= mysqli_stmt_init($conn);

	//Prepare the prepared statement
	if (!mysqli_stmt_prepare($stmt, $sql)){echo "SQL  statement failed";}
	else {
		//Bind parameters to the placeholder
		mysqli_stmt_bind_param($stmt,"ss",$formUsername,$formPassword);

		//Run parameters inside database
		mysqli_stmt_execute($stmt);

		$result = mysqli_stmt_get_result($stmt);
		$rowCount = mysqli_num_rows($result);

		if($row = mysqli_fetch_array($result)) {

		$qusername = $row['username'];
		$qpassword = $row['password'];

		//echo "Login sucessful";
		$_SESSION["userName"] = $qusername; //Session Variable to prevent session vulnerability. Unauthorized user cannot login to the session. got rid of index2.php which wasnt chceking the session

		// echo $_SESSION["userName"];
		// echo "good";
		header('Location: timeTable.php?message=1');

		} else {
		//echo "problem";
			echo '<script>
			alert("Incorrect Username or Password. Try again");

			window.location.href="index.php";


			</script>';

	}
	// header('Location: login.php');
	}

}

else if(isset($_POST['customRadio2'])) {
	$sql = "select childName, password from children where childName=? and password=?";

	//Create a prepared PDOStatement
	$stmt= mysqli_stmt_init($conn);

	//Prepare the prepared statement
	if (!mysqli_stmt_prepare($stmt, $sql)){echo "SQL  statement failed";}
	else {
		//Bind parameters to the placeholder
		mysqli_stmt_bind_param($stmt,"ss",$formUsername,$formPassword);

		//Run parameters inside database
		mysqli_stmt_execute($stmt);

		$result = mysqli_stmt_get_result($stmt);
		$rowCount = mysqli_num_rows($result);

		if($row = mysqli_fetch_array($result)) {

		$qusername = $row['childName'];
		$qpassword = $row['password'];
		$_SESSION["customRadio2"]=$radio_value2;

		//echo "Login sucessful";
		$_SESSION["userName"] = $qusername; //Session Variable to prevent session vulnerability. Unauthorized user cannot login to the session. got rid of index2.php which wasnt chceking the session
		// echo $_SESSION["userName"];
		// echo "good";

		header('Location: timeTable.php?message=2');

		} else {
		//echo "problem";
			echo '<script>
			alert("Incorrect Username or Password. Try again");

			window.location.href="index.php";


			</script>';

	}
	// header('Location: login.php');
	}
    }



?>
