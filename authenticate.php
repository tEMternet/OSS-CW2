<?php

   session_start();
   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   // If the student has already been authenticated the $_SESSION['id'] variable
   // will been assigned their student id.

   //$stuid = $_POST['txtid'];
     $stuid = mysqli_real_escape_string($conn, $_POST['txtid']);

     $password = mysqli_real_escape_string($conn, $_POST['txtpwd']);
     //$_SESSION["stu"] = $_POST['txtid'];

   //mysqli_query($conn, "CREATE TEMPORARY TABLE myLogin LIKE student");

   // redirect to index if $_POST values not set or $_SESSION['id'] is already set
   if (!isset($_POST['txtid']) || !isset($_POST['txtpwd']) || isset($_SESSION['id'])) {
      header("Location: index.php");

    //$id = msqli_real_escape_string($conn, $_POST['txtid']);

  } else {
      if (validatelogin($_POST['txtid'], $_POST['txtpwd'] == true)) {
      //if (validatelogin($stuid, $password == true)) {
         // valid
         header("Location: index.php?return=success");
      } else {
         // invalid
         unset($_SESSION['id']);
         header("Location: index.php?return=fail");
      }
	}
?>
