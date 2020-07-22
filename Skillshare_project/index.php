<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/bootstrap.css">
</head>


<?php
$heading = "My awesome website";

  DEFINE('DB_USERNAME', 'root');
  DEFINE('DB_PASSWORD', 'root');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'test_db');

  $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }

  echo 'Connected successfully.';

?>
<body>
  <div class="container">
    <div class="page-header">
      <h1><?php print $heading; ?><small>the best website ever</small></h1>
    </div>
    <div class="jumbotron" id="jumbotron">
      <h1>Hello, world!</h1>
      <p>...</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button" id="get-started-button">Learn more</a></p>
      <p style="display:none" id="hidden-text">This is a text</p>
    </div>
    <div class="row">
      <?php
            $sql = "SELECT username, email FROM users";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo "<div class='db-row'>  <strong> Username: </strong>" . $row["username"]. "<strong> Email: </strong>" . $row["email"]. "</div>";
              }
            } else {
              echo "0 results";
            }
            $mysqli->close();
        ?>
      </div>
  </div>



  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>
