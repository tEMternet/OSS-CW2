<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");


// check logged in
if (isset($_SESSION['id'])) {

   echo template("templates/partials/header.php");
   echo template("templates/partials/nav.php");

   // If a module has been selected
   if (isset($_POST['selmodule'])) {
      $sql = "insert into studentmodules values ('" .  $_SESSION['id'] . "','" . $_POST['selmodule'] . "');";
      $result = mysqli_query($conn, $sql);
      $data['content'] .= "<p>The module " . $_POST['selmodule'] . " has been assigned to you</p>";
    }
     //Build sql statment that selects all the modules
     $sql = "select * from module";
     $result = mysqli_query($conn, $sql);

     $data['content'] = <<<EOD
     <div class="jumbotron vertical-center" style="margin-bottom:0">
     <h1 style="text-align: center">Choose Your Modual</h1>
     <form name='frmassignmodule' action='' method='post' >
     <div class="row" style="center">
      <div class="col-sm-4" style=""></div>
       <div class="col-sm-2" style="background-color:lavender;">Select a module to assign</div>
       <div class="col-sm-2" style="background-color:lavenderblush;">
       <select name='selmodule' id='selmodule'>
EOD;
       while($row = mysqli_fetch_array($result)) {
               $data['content'] .= "<option value='$row[modulecode]'>$row[name]</option>";
            }
       $data['content'] .= <<<EOD
       </select></div>
     </div>
     <div class="row">
       <div class="col-sm-6" style=""></div>
       <div class="col-sm-2" style="background-color:lavenderblush;"><input type='submit' name='confirm' value='Save' /></div>
     </div>
     </form>
EOD;
   echo template("templates/default.php", $data);

} else {
   header("Location: index.php");
}

echo template("templates/partials/footer.php");

?>
