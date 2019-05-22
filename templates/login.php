
<div class="col-sm-5" style=""></div>
<div class="col-sm-2" style="">
    <div class="login-container" style='align: center; background-color:lavender;'>
      <h1 style="text-align:center;">Login</h1>
      <form name="frmLogin" action="authenticate.php" style="text-align:center;" method="post">
        <div class="col-sm-5" style="">
          Student ID:
          <br/>
          Password:
        </div>
        <div class="col-sm-5" style="">
          <input name="txtid" style="text-align:center;" type="text" />
          <br/>
        <input name="txtpwd"style="text-align:center;" type="password" />
        </div>
        <br/>
        <input type="submit"style="text-align:center;" value="Login" name="btnlogin" />
        <br/>
        <?php echo $message; ?>
        <br/>
      </form>
    </div>
  </div>
