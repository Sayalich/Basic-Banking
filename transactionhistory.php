<?php
 
	session_start();
	include 'connection.php';

	$q="select * from transactions";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
	
?>
<html>
<head>
	<title>Transaction History</title>
	<link rel = "stylesheet" type = "text/css" href = "buttons.css">
	<style>
		table {
		font-family: sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h1{
		font-family: serif;
		font-size:40px;
		}
		
		td, th {
		border: 2px solid black;
		text-align: center;
		border-radius: 1px;
		padding: 8px;
		}

		tr:nth-child(odd) {
		background-color: #FAEBD7;
		}
	</style>
</head>
<body style="background-color:#FFEBCD;">
<link rel = "stylesheet" type = "text/css" href = "style.css">

	<div align="center" style="top:0px">		  			
		<table class = "t">
			<tr>
            <td style = "text-align:center;border:0px"> <a href="index.php" target="frame"><button class = "btn2" style="color:black"> Home </button></a></td>	 	
			<td style = "text-align:center;border:0px"><a href="customer.php" target="frame"><button class = "btn2" style="color:black">View Customers</button></a></td>
			<td style = "text-align:center;border:0px"><a href="Transfermoney.php" target="frame"><button class = "btn2" style="color:black">Transfer Money</button></a></td>
			<td style = "text-align:center;border:0px"><a href="transactionhistory.php" target="frame"><button class = "btn2" style="color:black">View Transaction History</button></a></td>
			</tr>
		</table>
	</div>

    <h1 style="color:black;text-align: center;font-family: 'Josefin Sans', sans-serif;" >Transaction History</h1>
    <table style="font-family: serif;color: black;font-weight: bold;">
	<thead>
		<th>SENDER NAME</th>
		<th>RECEIVER NAME</th>
		<th>AMOUNT</th>	
	</thead>
	<tbody>
		<tr align = center>
        <?php  
			while($row=mysqli_fetch_array($result)){
        ?>
	<td><?php echo  $row["Sender"]; ?></td>
	<td><?php echo  $row["Receiver"]; ?></td>
	<td><?php echo  $row["Amount"]; ?></td>
	<tr align = center>
	<?php }
	?>
	</tr>
	</tbody>
	</table>
	
		
</body>
</html>