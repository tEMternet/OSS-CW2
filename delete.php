<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");


   // check logged in
   if (isset($_SESSION['id'])) {

      echo template("templates/partials/header.php");
      echo template("templates/partials/nav.php");

      //echo $_POST['stuID'];
      if(isset($_POST['btndel'])){
      // Build SQL statment that selects a student's modules
        foreach ($_POST['stuID'] as $id){
          $sql = "Delete FROM student ";
          $sql .= "WHERE studentid = $id";
          $result = mysqli_query($conn,$sql);
        }
      }
      // prepare page content

      $data['content'] .= "<p>'Selected items deleted'</p>";

      mysqli_close($conn);

      //<a href="details.php">My Details</a>
      $data['content'] .= "<form action='students.php' method='post'>";
      $data['content'] .= "<input type='submit' name='btnback' value='Back'/>";
      $data['content'] .= "</form>";

      // render the template
      echo template("templates/default.php", $data);

   } else {
      header("Location: index.php");
   }

   echo template("templates/partials/footer.php");

?>
