<?php
      $loggedin=""; //declare variable to check user has logged in
      // Start the session


      if(!isset($_SESSION['userName']) )
      {
        //echo '<script>alert("success")</script>';
         $loggedin="false";

      }
      else{
       // header("Location: index.php");
       //echo '<script>alert("Not logged in")</script>';
        $loggedin="true";
      }

      $dislogin=""; //display login
      $dislogout=""  ; //display logout
			$disuserName="";//display Username




      $userName = "";

      if($loggedin=="true"){

        $userName = $_SESSION['userName'];
        $dislogin="none";
        $dislogout="initial";
				$disuserName="Welcome ".$userName;
      }
      else{

        $dislogin="initial";
        $dislogout="none"  ;
				$disuserName="none";
      }


      ?>
