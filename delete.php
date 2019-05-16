<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");


   // check logged in
   if (isset($_SESSION['id'])) {

      echo template("templates/partials/header.php");
      echo template("templates/partials/nav.php");

      // Build SQL statment that selects a student's modules
      for(i=0;i=sizeof($_POST['id']);i++){
        $sql = "DELETE FROM student";
        $sql .= "WHERE studentid = '$_POST['id']'";
        $result = mysqli_query($conn,$sql);
      }
      // prepare page content

      $data['content'] .= "<p>'Selected items deleted'</p>";

      // render the template
      echo template("templates/default.php", $data);

   } else {
      header("Location: index.php");
   }

   echo template("templates/partials/footer.php");

?>
