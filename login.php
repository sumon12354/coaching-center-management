<!DOCTYPE html>
<html lang="en">
<head>
  <title>coaching_management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="style.css" rel="stylesheet">

</head>
<body>
<div class="container-fluid">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
<div class="animated bounceInDown">
  <div class="container">
    <form name="form1" class="box" action="action.php" method="POST">
      <h4>CMS<span>soft</span></h4>
      <h5>Sign in to your account.</h5>
        <input type="text" name="username" placeholder="Enter Your Username" autocomplete="on">
        <i class="typcn typcn-eye" id="eye"></i>
        <input type="password" name="pswd" placeholder="Passsword" id="pswd" autocomplete="off">
        <label>
          <input type="checkbox">
          <span></span>
          <small class="rmb">Remember me</small>
        </label>
        <a href="#" class="forgetpass">Forget Password?</a>
        <input type="submit" value="Sign in" class="btn1">
      </form>
        <a href="signup.php" class="dnthave">Don’t have an account? Sign up</a>
  </div> 
      </div>
      <div class="col-2"></div>
    </div>
  </div>
</div>

</body>
</html>