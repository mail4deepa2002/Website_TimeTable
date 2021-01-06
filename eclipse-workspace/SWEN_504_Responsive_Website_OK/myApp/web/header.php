<?php
if (!isset($_SESSION)){
  session_start();
}


?>

<!DOCTYPE html>
<html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
<link rel="stylesheet" href="style.css">
      <?php
        $deepa0 = "index.php";
        $deepa1 = "usefulLinks.php";
        $deepa2 = "timeTable.php";
        $deepa3 = "wheel.php";
        $deepa4="instructions.php";
        include "userLoginCheck.php";
        // $disuserName=""  ; //display userName


        // if($loggedin=="true"){
        //   $userName = $_SESSION['userName'];
        //   include connection.php;
        //   if ($conn==true){
        //   	echo "Connection Successful";
        //   } else{
        //   	die("Connection failed: " . $conn->connect_error);
        //   }
        // // $sql = "select firstName, lastName from TTLogin where userName='$userName'";
        // $sql = "select firstName, lastName from TTLogin where username='$userName'";
        //   //
        //   echo $sql;
        //   $result = mysqli_query($conn, $sql);
        //
        //   $row = mysqli_fetch_array($result);
        //
        //   $qfirstName= $row['firstName'];
        //   $qlastName= $row['lastName'];



        //   $disuserName="Welcome ".$userName;
        //   // $disuserName="Welcome ".$userName;
        // }
        // else{
        //
        //
        //   $disuserName="none" ;
        //
        // }

?>
<div class="" style="top:0;margin:0 auto;">
        <nav class="navbar navbar-expand-lg navbar-light" style="background:#FFDD00;">

          <a class="navbar-brand" href="#">
          <img src="images/TTLogo.png" height="60" alt="">
        </a>

            <!-- s<a class="logo" href="home.php"></a> -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="btn btn-outline-success" href="<?php echo $deepa0 ?>" >Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">

                <a class="btn btn-outline-success" href="<?php echo $deepa2 ?>" >Time Table</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-success" href="<?php echo $deepa3 ?>" > We'll Decide</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-success" href="<?php echo $deepa1 ?>" > Useful Links</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-success" href="<?php echo $deepa4 ?>" > Instructions</a>
              </li>
              <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="uname">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </ul>


            <nav class="navbar navbar-light">
              <li class="navbar-text" style="display:<?php echo $disuserName ?>" >
                <?php echo "$disuserName" ?>

              </li>
            </nav>

            <ul class="navbar-nav">

            <li class="nav-item"><button class="btn btn-outline-success" style="display:<?php echo $dislogin ?>" onclick="document.getElementById('form1').style.display='block'">Register</button>
              <?php
              {include 'signup.php';}
              ?>
            </li>
            <li class="nav-item "><button class="btn btn-outline-success" style="display:<?php echo $dislogin ?>"  onclick="document.getElementById('id01').style.display='block'">Login</button>
              <?php
              {include 'login.php';}
              ?>
            </li>
            <li class="nav-item"><button class="btn btn-outline-success" style="display:<?php echo $dislogout ?>"  onclick="document.location.href='logout.php'">Logout</button>

            </li>
            </ul>
            <!-- <span class="navbar-text">
              Navbar text with an inline element
            </span> -->
          </div>
        </nav>
</div>

</html>
