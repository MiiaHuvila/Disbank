<?php 



session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: main.php");
    exit;
}
 
// Include config file
require_once "config.php";
 


$username = $_POST['user_login'];
$password = $_POST['user_pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);





$result = mysqli_query($link,"select * from kayttajat where user_login = '$username' and user_pass = '$password'")
			or die ("Failed to query database ".mysql_error());
			
	$row = mysqli_fetch_array($result);
	
	
	if ($row['user_login'] == $username && $row['user_pass'] == $password ) {
		
		
	echo "Onnistui! Tervetuloa  " .$row['user_login'];
	
	} else { 
	echo "Salasana on väärä";
	

}

?>

