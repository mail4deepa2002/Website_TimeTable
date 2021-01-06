
<?php

// Connect to server and select database.
include 'connection.php';
  // echo " Connection Successful";


// Get values from form
if (isset($_REQUEST['day']))
{
$formday = $_REQUEST['day'];
$formtask = $_REQUEST['task'];
$formTime = $_REQUEST['Time'];
//
// echo "$formday";
// echo "$formtask";
// echo "$formTime";

// Insert data into mysql
// $sql="UPDATE FinalTT SET '$formday'='$formtask' WHERE Time='$formTime';";
// $result=query($sql);
$sql = "UPDATE FinalTT SET $formday='$formtask' WHERE Time='$formTime'";

if ($conn->query($sql) === TRUE){

//header("Location: timeTable.php");
echo '<script> window.location.href="timeTable.php"; alert("Record updated successfully!") </script>';
}

else{

echo json_encode(array("msg"=>"Error updating record- Try again!"));

}


//
//
//
//  {
//
//   echo '<script type="text/javascript"> alert("Record updated successfully!")
//   window.location.href="timeTable.php";
//   </script>';
//
// }
// else {
//   echo '<script type="text/javascript"> alert("Error updating record!") window.location.href="timeTable.php"; </script>';
//   // echo 'Error updating record!  <a href="timeTableParent.php">Click here</a> to try again';
//
// }


$conn->close();

//
// if successfully insert data into database, displays message "Successful".

}

// echo "<a href='insert.php'>Back to main page</a>";
// }}}

// else {
// echo "ERROR";
// // close connection
// mysql_close();
// }
?>
