<?php
if (!isset($_SESSION)){
  session_start();
}
?>

<!DOCTYPE html>
<html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">

  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	<!-- <link rel="stylesheet" href="loginStyle.css">-->
  </head>

<body>
  <!-- The Modal -->
  <div id="id03" class="modal">
    <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>

    <!-- Modal Content -->
    <form class="modal-content animate" style="background-color:#FFDD00" onsubmit="addChildJS()" action="addChild_process.php" method="POST">
      <div class="imgcontainer">
        <h1> Add a Child </h1>
      </div>

      <div class="container">
        <table class="table">
          <tr>
            <td>
            <label for="uname"><b>Child's Username</b></label>
            </td>
            <td>
            <input type="text" placeholder="Enter Username" name="uname" class="form-control" required>
            </td>
          </tr>
          <tr>
            <td>
            <label for="psw"><b>Child's Password</b></label>
            </td>
            <td>
            <input type="password" placeholder="Enter Password" name="psw" class="form-control" required>
            </td>
          </tr>
          <tr>
            <td>
            <button id="addChild" type="submit" onclick="addChild()" class="btn btn-primary">Add Child</button>
            </td>
            <td>
            <button id="cancelButton" type="button" class="btn btn-primary" onclick="document.getElementById('id03').style.display='none'" >Cancel</button>
            </td>
          </tr>
        </table>


      </div>
    </form>
  </div>
  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





</body>

</html>
