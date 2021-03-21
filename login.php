<?php  include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Log in</title>
  <link href="assets/img/icon.png" rel="icon">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<style type="text/css">
  *{
  font-family: "montserrat",sans-serif;

}
body{
    color: #2d4d7a;
    margin: 0;
    padding: 0;
   background-color: #040b14;

  }
  .login-form{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
  text-align: center;


}
.login-form h1{
  font-weight: 400;
  margin-top: 0;
}
.txtb{
  display: block;
  box-sizing: border-box;
  width: 240px;
  background: #ffffff28;
  border: 1px solid white;
  padding: 10px 20px;
  color: white;
  outline: none;
  margin: 10px 0;
  border-radius: 6px;
  text-align: center;
}
.login-btn{
  width: 240px;
  background: #2c3e50;
  border: 0;
  color: white;
  padding: 10px;
  border-radius: 6px;
  cursor: pointer;
}
.hide-login-btn{
  color: #000;
  position: absolute;
  top: 40px;
  right: 40px;
  cursor: pointer;
  font-size: 24px;
  opacity: .7;
}
.show-login-btn{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
  border: 2px solid;
  padding: 10px;
  cursor: pointer;
}


</style>
<body>

    <div class="login-box">
      <div class="hide-login-btn"><i class="fas fa-times"></i></div>
    <form class="login-form" action="server.php" method="post">

      <h1>Welcome</h1>
      <input class="txtb" type="text" name="username" placeholder="Username" required="">
      <input class="txtb" type="password" name="password" placeholder="Password" required="">
      <input class="login-btn" type="submit" name="login" value="Login">
    </form>
    </div>

</body>
</html>