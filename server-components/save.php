<?php
$server = "itsadailythingcom.fatcowmysql.com";
$username = "usrbluffed";
$password = "20kowie08";
$database = "bluffed";

$con = mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());

mysql_select_db($database, $con);

$locationID = $_POST["lid"];
$email = mysql_real_escape_string($_POST["email"]);
$comment = mysql_real_escape_string($_POST["comment"]);
//$locationID = 1;
//$email = "luke@lukekowald.com";
//$comment = "Testing 1 2 3";

$sql = "INSERT INTO comments (location_id, email, comment) ";
$sql .= "VALUES ($locationID, '$email', '$comment')";

echo $sql;

if (!mysql_query($sql, $con)) {
	die('Error: ' . mysql_error());
} else {
	echo "Comment added";
}

mysql_close($con);
?>