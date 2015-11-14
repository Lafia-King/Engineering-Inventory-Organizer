<?php
  include('login.php'); // Includes Login page

  if(isset($_SESSION['login_user'])){
    header("location: home.php");
  }
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Invertory Keep login </title>
        <link rel='stylesheet prefetch' href='css/bootstrap.min.css'>

        <link rel="stylesheet" href="css/style.css">
    
  </head>

  <body>

    <div class="container">
      <div class="row">
        <h1 class="text-center">Inventory Management Login </h1>
        <div class="login-wrap">
          <form class="form-horizontal" role="form" method="post" action="">

            <span class="text-center" style="color:red;"><?php echo $error; ?></span>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-3 control-label">
                UserName</label>
              <div class="col-sm-9">
                <input type="username" class="form-control" id="inputUser" name="username" placeholder="UserName" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-3 control-label">
                Password</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" id="inputPsw" name="password" placeholder="Password" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-9">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" /> Remember me
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group last">
              <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" name="submit" class="btn btn-success btn-sm" >
                  Sign in</button>
                <button type="reset" class="btn btn-default btn-sm">
                  Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    
  </body>
</html>