<?php
// error_reporting(E_ALL);
// ini_set('display_errors',1);
$servername = "localhost";
$username = "root";
$password = "";
$dbname="indiatvonline";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<?php
// // error_reporting(E_ALL);
// // ini_set('display_errors',1);
// $servername = "localhost";
// $username = "anujkumar";
// $password = "United84@";
// $dbname="indiatvonline";
// // Create connection
// $conn = mysqli_connect($servername, $username, $password,$dbname);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// // else{
// //     echo "Connected";
// // }

?>