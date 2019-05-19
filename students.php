<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   //session_start();

   // check logged in
   if (isset($_SESSION['id'])) {

      echo template("templates/partials/header.php");
      echo template("templates/partials/nav.php");

      count = 0;

      // Build SQL statment that selects a student's modules
      $sql = "select * from student;";

      $result = mysqli_query($conn,$sql);

      // prepare page content
      $data['content'] .= "<form action='delete.php' method='post'>";
      $data['content'] .= "<table border='1'>";
      $data['content'] .= "<tr><th colspan='10' align='center'>Students</th></tr>";
      $data['content'] .= "<tr><th>Student ID</th><th>D.O.B</th><th>First Name</th>";
      $data['content'] .= "<th>Last Name</th><th>Home Address</th><th>Town</th>";
      $data['content'] .= "<th>County</th><th>Country</th><th>Post Code</th><th>Select</th></tr>";

      // Display the modules within the html table
      while($row = mysqli_fetch_array($result)) {
         $data['content'] .= "<tr><td> $row[studentid] </td><td> $row[dob] </td>";
         $data['content'] .= "<td> $row[firstname] </td><td> $row[lastname] </td>";
         $data['content'] .= "<td> $row[house] </td><td> $row[town] </td>";
         $data['content'] .= "<td> $row[county] </td><td> $row[country] </td><td> $row[postcode] </td>";
         //$data['content'] .= "<td><input type='checkbox' name='$stuID[]' value='$row[studentid]'/></td></tr>";
         count++;
      }
      $data['content'] .= "</table>";
      $data['content'] .= "<input type='hidden' name='btndel' value='DELETE'/>";

      //$data['content'] .= "<form action=''/delete.php' method='post'>";
      $data['content'] .= "<input type='submit' name='btndel' value='DELETE'/>";
      $data['content'] .= "</form>";

      // render the template
      echo template("templates/default.php", $data);

   } else {
      header("Location: index.php");
   }

   echo template("templates/partials/footer.php");

?>
