<?php
        // First execute a common code to connect to the database and start the session
        include ("config.php");

        // At the top of the page check to see whether the user is logged in or not
        if(empty($_SESSION['user_login']))
        {
            // If they are not, redirect them to the login page.
            header("Location: login.php");

            // Remember that this die statement is absolutely critical.  Without it,
            // people can view your members-only content without logging in.
            die("Redirecting to login.php");
        }
    ?>

<?php




require_once "bank.php";


$username = $_SESSION['user_login'];


$id = $_SESSION['ID'];
$moneybalance = $_SESSION['balance'];
$loan = $_SESSION['Loan'];
$balance = $moneybalance;
$timestamp = $_SESSION['time_stamp'];
$swapamount = $_SESSION['amount'];
$transactionid = $_SESSION['t_id']; 
$tbalance = $_SESSION['t_balance']; 
$message = $_SESSION['t_description']; 
$recipient = $_SESSION['recipient'];
$row['recipient'] = $_SESSION['recipient']; 

$heh = $row['recipient'];

 $tramount = $_SESSION['SUM'];
 

	

$transaction = mysqli_query($link,"select * from transaction where account_id = '$id'")
or die ("Failed to query database ".mysqli_error());
 
	
	  
 
?>

<!DOCTYPE html>
<html>
<title>Disbank</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<!-- Bootstrap -->
	<!-- CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!--Disbank style and code-->
	<!-- CSS only -->
	
	<style>
  <?php include "style/disbankstyle.css" ?>
</style>
	
	
	<link rel="stylesheet" href="style/disbankstyle.css">
	<!-- JS and PHP -->
</head>

<body class="bgcolor">
	<!-- Top Navbar -->
	<div class="container-fluid">
		<div class="row seccolor">
			<div class="col-sm-1" style="padding: 0px 0px 0px 0px !important;">
				<button class="clearbutt acccolor accname"><?php echo $username;	?></button>
			</div>
			<div class="col-sm-10">
				<p></p>
			</div>
			<div class="col-sm-1" style="padding: 0px 0px 0px 0px !important;">
			 <a href="logout.php"> 	<button class="clearbutt acccolor" style="float: right;">Log Out</button> </a> 
			</div>
		</div>
	</div>
	<!-- Content -->
	<div class="container-fluid row" style="padding: 5% 5% 7.5% 5%;">
		<div class="container-fluid col-sm-6">
			<div class=" fircolor maincontent">
				<img src="images/Logo.png" alt="DisLogo" style="width: 150px; height: 150px; float: right;">
				<div>
			<p class="accname"><?php echo $username;	?> </p> 
			
					
				</div>
				<div>
					<p id="accbalance">Your current account balance:<?php echo $balance; ?> &#2756;</p>
					<p id="accdebt">Your current bank loan: <?php echo $loan; ?>&#2756;</p>
					<p id="accinterest">Standardised Disbank loan interest: 13.37%</p>
				</div>
				<div>
					<p>Amount of your personal transactions: <?php echo $tramount; ?> </p>
					
					
					<?php echo	"<table class='bgcolor' style='width: 100%';>
<?php 						<tr>
							<th> ID</th>
							<th>Date</th>
							<th>Recipient</th>
							<th>Amount &#2756;</th>
							<th>Message </th> 
							<th> Jotain </th>
							<th> Jotain </th></tr> 
							";
						
				
				$transaction = mysqli_query($link,"select * from transaction where account_id = '$id'")
or die ("Failed to query database ".mysqli_error());
 
	  while ($row = mysqli_fetch_array($transaction , MYSQLI_ASSOC)){


$timestamp = $row['time_stamp'];
$swapamount = $row['amount']; 
$transactionid = $row['t_id'];
$tbalance = $row['t_balance'];
$message = $row ['t_description'];
$recipient = $row['recipient'];  // do something 

  echo "<tr>
  
					<td>$transactionid</td>
                 <td>$timestamp</td>
				 <td>$recipient</td>
				 
                 <td>$swapamount</td>
                    <td>$message</td>
                 <td>$tbalance</td>
           
                 
               
                </tr>";
	  

	  }
	  
	echo "</table>"
	  
		  ?>
	  
	  
	  
					
				</div>
			</div>
		</div>
		<div class="container-fluid col-sm-6 ">
			<div class="fircolor maincontent">
				<div>
					<p>
 magna vi
					</p>
				</div>
				<div>
					<p>Other sidebar shit</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Bottom Navbar -->
	<div class="container-fluid bottomnav seccolor">
		<p>Lorem ipsum...</p>
	</div>
</body>
</html>