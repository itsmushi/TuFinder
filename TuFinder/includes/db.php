<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname="tufinder";

//real for deployment in heroku
$servername="us-cdbr-east-02.cleardb.com";
$username = "b9ac30daddae48";
$password = "e8625356";
$dbname="heroku_c8d476e1a5e6864";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
  echo "connected";
}

?>