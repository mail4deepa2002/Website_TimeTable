<?php
session_start();
?>
<html>
    <link rel="stylesheet" href="TTStyle.css">
    <link rel="stylesheet" href="loginStyle.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <body>
      <!-- BEGIN: Sticky Header -->
      <?php
      include "header.php";
      include "userLoginCheck.php";
      ?>

      <!-- END: Sticky Header -->
<div class="container">
      <div class="button-wrapper">
      </p>
          <button class="btn btn-outline-success" onclick="window.print()">Print this page</button>

          <?php

          $delim = $_REQUEST['message'];
          if($delim == 1) // parent
          {
            echo '<button class="btn btn-outline-success" style="display:<?php echo $dislogout ?>" onclick="document.getElementById(\'id02\').style.display=\'block\'">Edit Activity</button>';

            echo '<button class="btn btn-outline-success" style="display:<?php echo $dislogout ?>" float: "right" onclick="document.getElementById(\'id03\').style.display=\'block\'">Add Child</button>';
          }
          ?>



        </p>


        <?php
        {include 'display.php';}
        {include 'editTaskModal.php';}
        {include 'addChild.php';}
        ?>
      </div>
    </div>

        <?php include "footer.php" ?>
        <script src="script.js"></script>
    </body>

</html>
