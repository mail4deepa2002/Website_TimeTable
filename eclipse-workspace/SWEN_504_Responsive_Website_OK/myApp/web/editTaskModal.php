
<!DOCTYPE html>
<html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="loginStyle.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">

  </head>

<!-- The Modal -->

<div id="id02" class="modal">
	<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

	<!-- Modal Content -->
	<form class="modal-content animate" style="background-color:#FFDD00" onsubmit="submitActivity()" action="addActivityProcess.php" method="POST">
		<div class="imgcontainer">
			  <h1> Edit Activity </h1>
		</div>

		<div class="container">

		 <label for="day">Day:</label>
		 <select id="day" name="day">
			 <option value="Monday">Monday</option>
			 <option value="Tuesday">Tuesday</option>
			 <option value="Wednesday">Wednesday</option>
			 <option value="Thursday">Thursday</option>
			 <option value="Friday">Friday</option>
			 <option value="Saturday">Saturday</option>
			 <option value="Sunday">Sunday</option>
		 </select><br /><br />


     	 <label for="task">Task:</label>
       <div class="select-editable">

     <!-- <select id="task" name="task"> -->
       <select id="task" onchange="this.nextElementSibling.value=this.value">
       <option value=""></option>
			 <option value="SpinWheel">SpinWheel</option>

     </select>
     <input type="text" name="task" placeholder="Select or Enter your own Task" value="" /><br /><br />
   </div>
   <br /><br />

		<label for="Time">Time:</label>
		<select id="Time" name="Time">
			<option value="8am">8 am</option>
			<option value="9am">9 am</option>
			<option value="10am">10 am</option>
			<option value="11am">11 am</option>
			<option value="12pm">12 pm</option>
			<option value="1pm">1 pm</option>
			<option value="2pm">2 pm</option>
			<option value="3pm">3 pm</option>
			<option value="4pm">4 pm</option>
			<option value="5pm">5 pm</option>
			<option value="6pm">6 pm</option>
			<option value="7pm">7 pm</option>
			<option value="8pm">8 pm</option>
			<option value="9pm">9 pm</option>
			<option value="10pm">10 pm</option>
		</select><br /><br />
	 <!-- <input type="text" class="btn btn-primary" value="Submit"> -->
   <button type="submit" class="btn btn-primary" onclick="document.getElementById('id02').style.display='none'" >Submit</button>


	</form>
</div>
		</div>



<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
