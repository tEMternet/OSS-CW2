
<div class="col-sm-4" style=""></div>
<div class="col-sm-4" style="">
  <div class="login-container" style='align: center; background-color:lavender;'>
    <h1 style="text-align:center;">Login</h1>
    <form name="frmLogin" action="authenticate.php" style="text-align:center;" method="post">
      Student ID:
      <input name="txtid" style="text-align:center;" type="text" />
      <br/>
      Password:
      <input name="txtpwd"style="text-align:center;" type="password" />
      <br/>
      <input type="submit"style="text-align:center;" value="Login" name="btnlogin" />
      <br/>
      <?php echo $message; ?>
      <br/>
    </form>
  </div>
</div>
