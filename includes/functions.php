<?php
$user = 'root';
$pass = ''; //"$pass = 'root'; for mac
$host = 'localhost';
$db = 'a3_cooperinfo';
	
//try connecting to server
$conn = mysqli_connect($host, $user, $pass, $db);
mysqli_set_charset($conn, 'utf8'); //turning gibberish into workable info aka stringified json object

if (!$conn)//testing if php.functions isnt working
{
	echo 'something broke';
	exit;
}

//echo 'connected'; //testing if php.functions is connected

//fetching data from database
$myQuery = "SELECT * FROM mainmodel";

$result = mysqli_query($conn, $myQuery);
$rows = array();
	
while ($row = mysqli_fetch_assoc($result))
{
	$rows[] = $row;
}
//var_dump($rows);
//echo json_encode($rows); //turning gibberish into workable info aka stringified json object

if(isset($_GET["carModel"])) //if the thing is there, make this the variable name
{
	$car = $_GET["carModel"];
	
	//select one car instead of all of them
	$myQuery = "SELECT * FROM mainmodel WHERE model = '$car'";
	
	//store the result
	$result = mysqli_query($conn, $myQuery);
	
	//get the row
	$row = mysqli_fetch_assoc($result);
		
	//show it on the webpage
	echo json_encode($row); //http://localhost/A3_Lab1/includes/functions.php?carModel=F55 in address bar
}
?>