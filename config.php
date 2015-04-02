<?php
ob_start();
session_start();
error_reporting(0);
require("defines.php");

//Connection to MySQL db
$connection = mysqli_connect(DB_Host,DB_Username,DB_Password);
if (!$connection)
{
  echo "Unable to connect to the database server.";
  ?><span class="IL_AD" id="IL_AD10">exit</span>()";<?php
}
 
mysqli_query($connection,"set character_set_server='utf8'");
mysqli_query($connection,"set names 'utf8'");
if (!mysqli_set_charset($connection, 'UTF8'))
{
  echo 'Unable to set database connection encoding.';
  exit();
}
 
if(!mysqli_select_db($connection, DB_Database))
{
  echo 'Unable to locate demo database.';
  exit(); 
}

//$connection = mysqli_connect(DB_Host,DB_Username,DB_Password,DB_Database);
//$connection = mysql_connect(DB_Host,DB_Username,DB_Password) or die('Could not connect to database server.');
//$connection=mysqli_connect("localhost","root","","tbnaacom_tbnaa02");
//mysql_select_db(DB_Database) or die('Could not select database.');
//mysql_query("set character_set_server='utf8'");
//mysqli_query($connection,"set character_set_server='utf8'");
//mysql_query("set names 'utf8'");
//mysqli_query($connection,"set names 'utf8'");

// Check connection
//if (mysqli_connect_errno()) {
  //echo "Failed to connect to MySQL: " . mysqli_connect_error();
//}
//else
  //echo "Connect Succful";

//$url = WS_URL;
//$site = WS_NAME;
//$description = WS_DESC;
//$email = WS_EMAIL;

function get_value($variable) {
    $variable = mysqli_real_escape_string($connection,trim($variable));
    return $variable;
}

$_SESSION['user-id']=1;
if (isset($_SESSION['user-id'])) {
	$uid = $_SESSION['user-id'];
	$my_pets = mysqli_query ($connection,"select * from a_pets where  uid = $uid and tbnee = 0 order by date desc, id desc");
	$untnbee_pets = mysqli_num_rows($my_pets);
}
?>