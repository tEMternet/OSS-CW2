<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   if (isset($_SESSION['id'])) {

      echo template("templates/partials/header.php");
      echo template("templates/partials/nav.php");
      //count = 0;
      $data['content'] = <<<EOD

      <div class="jumbotron vertical-center" style="margin-bottom:0; test-align: HRTime\PerformanceCounter">

      <h2 style="text-align:center;">Add New Student</h2>

      <form name="frmdetails" action="addconfirm.php" method="post">
      <div class="row">
        <div class="col-sm-4" style=""></div>
        <div class="col-sm-2" style="background-color:lavender;">Student Identification Number :</div>
        <div class="col-sm-2" style="background-color:lavenderblush;"><input name="txtstudentid" type="text"  value="" /></div>
      </div>
      <div class="row">
        <div class="col-sm-4" style=""></div>
        <div class="col-sm-2" style="background-color:lavender;">First Name :</div>
        <div class="col-sm-2" style="background-color:lavenderblush;"><input name="txtfirstname" type="text"  value="" /></div>
      </div>
      <div class="row">
        <div class="col-sm-4" style=""></div>
        <div class="col-sm-2" style="background-color:lavender;">Surname :</div>
        <div class="col-sm-2" style="background-color:lavenderblush;"><input name="txtlastname" type="text"  value="" /></div>
      </div>
      <div class="row">
        <div class="col-sm-4" style=""></div>
        <div class="col-sm-2" style="background-color:lavender;">D.O.B :</div>
        <div class="col-sm-2" style="background-color:lavenderblush;"><input name="txtdob" type="text" value="" /></div>
      </div>
      <div class="row">
        <div class="col-sm-4" style=""></div>
        <div class="col-sm-2" style="background-color:lavender;">Number and Street :</div>
        <div class="col-sm-2" style="background-color:lavenderblush;"><input name="txthouse" type="text" value="" /></div>
      </div>
      <div class="row">
        <div class="col-sm-4" style=""></div>
        <div class="col-sm-2" style="background-color:lavender;">Town :</div>
        <div class="col-sm-2" style="background-color:lavenderblush;"><input name="txttown" type="text" value="" /></div>
      </div>
      <div class="row">
        <div class="col-sm-4" style=""></div>
        <div class="col-sm-2" style="background-color:lavender;">County :</div>
        <div class="col-sm-2" style="background-color:lavenderblush;"><input name="txtcounty" type="text" value="" /></div>
      </div>
      <div class="row">
        <div class="col-sm-4" style=""></div>
        <div class="col-sm-2" style="background-color:lavender;">Country :</div>
        <div class="col-sm-2" style="background-color:lavenderblush;"><input name="txtcountry" type="text" value="" /></div>
      </div>
      <div class="row">
        <div class="col-sm-4" style=""></div>
        <div class="col-sm-2" style="background-color:lavender;">Postcode :</div>
        <div class="col-sm-2" style="background-color:lavenderblush;"><input name="txtpostcode" type="text" value="" /></div>
      </div>
      <div class="row">
        <div class="col-sm-4" style=""></div>
        <div class="col-sm-2" style="background-color:lavender;"></div>
        <div class="col-sm-2" style="background-color:lavenderblush;"><input type="submit" value="Save" name="submit"/></div>
      </div>
      </div>
      </form>
EOD;
      echo template("templates/default.php", $data);

   } else {
      header("Location: index.php");
   }
   echo template("templates/partials/footer.php");

?>
