<?php 

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: main.php");
    exit;
}
 

require_once "config.php";

$username = $_SESSION['user_login'];
$id = mysqli_query($link,"select ID from kayttajat where user_login = '$username'")
			or die ("Failed to query database ".mysqli_error());
			
	
	$row = mysqli_fetch_array($id);
	$id = $row['ID'];
$_SESSION['ID'] = $id;




$balance = mysqli_query($link,"select * from account where a_id = '$id'")
			or die ("Failed to query database ".mysqli_error());

$row = mysqli_fetch_array($balance);

	
$id2 = $row['a_id'];
$moneybalance = $row['balance'];
$loan = $row['Loan']; 


$_SESSION['balance'] = $moneybalance;
$_SESSION['Loan'] = $loan;





$query = mysqli_query($link, "SELECT COUNT(*) AS SUM FROM transaction where account_id = '$id'")
or die ("Failed to query database ".mysqli_error());
$rows = mysqli_fetch_assoc($query);


$tramount =  $rows['SUM'];

$_SESSION['SUM'] = $tramount; 



	
	
	
	
	
	
	


 





?>