<?php
// database connection variable
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'vampireinu';
// Create connection
$connection = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

?>
 <?php
include('about.php');
include('roadmap.php');

?> 
<?php
mysqli_close($connection);

?>