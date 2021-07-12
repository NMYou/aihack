<?php
//Development Connection
// $servername = "localhost";
// $dBUsername = "root";
// $dbPassword = "";
// $dBName = "aihack";

// //Remote Database Connection
$servername = "sql6.freemysqlhosting.net";
$dBUsername = "sql6424517";
$dbPassword = "7XdF5frfhS";
$dBName = "sql6424517";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Database Connection Failed";
}

?>