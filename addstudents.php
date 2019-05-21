<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   //session_start();

   // check logged in
   if (isset($_SESSION['id'])) {

      echo template("templates/partials/header.php");
      echo template("templates/partials/nav.php");
      //count = 0;
      $data['content'] = <<<EOD

      <h2>Add New Student</h2>
      <form name="frmdetails" action="addconfirm.php" method="post">
      Student Identification Number :
      <input name="txtstudentid" type="text"  value="" /><br/>
      First Name :
      <input name="txtfirstname" type="text"  value="" /><br/>
      Surname :
      <input name="txtlastname" type="text"  value="" /><br/>
      D.O.B :
      <input name="txtdob" type="text" value="" /><br/>
      Number and Street :
      <input name="txthouse" type="text" value="" /><br/>
      Town :
      <input name="txttown" type="text" value="" /><br/>
      County :
      <input name="txtcounty" type="text" value="" /><br/>
      Country :
      <input name="txtcountry" type="text" value="" /><br/>
      Postcode :
      <input name="txtpostcode" type="text" value="" /><br/>
      <input type="submit" value="Save" name="submit"/>
      </form>

EOD;
      // render the template
      echo template("templates/default.php", $data);

   } else {
      header("Location: index.php");
   }

   echo template("templates/partials/footer.php");

?>
