<!-- <?php
// Start the session
session_start();

?> -->
<!DOCTYPE html>

<html>
    <link rel="stylesheet" href="TTStyle.css">
    <link rel="stylesheet" href="loginStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <body>
      <!-- BEGIN: Sticky Header -->
      <?php include "header.php" ?>
      <!-- END: Sticky Header -->
      <div class="button-wrapper">
          <button class="print-button" onclick="window.print()">Print this page</button>
          <button id="activitiesBtn" onclick="document.getElementById('id02').style.display='block'">Edit Activities</button>
      </div>


        <?php
        include 'display.php';
        include 'editTaskModal.php';
        ?>
        <?php include "footer.php" ?>
        <script src="script.js"></script>
    </body>
</html>
