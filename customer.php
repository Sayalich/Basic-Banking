<?php 

session_start();
include 'connection.php';

$q="select * from customers";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);

?>

<html>
<head>
	<title>
   Customer Details
	</title>
	<link rel = "stylesheet" type = "text/css" href = "buttons.css">
	<style>
		table {
		font-family: sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h2{
		font-family: monospace;
		font-size:37px;
		}
		
		td, th {
		border: 2px solid black;
		border-radius: 1px;
		text-align: center;
		padding: 10px;
		}

		tr:nth-child(odd) {
		background-color: #FAEBD7;
		}
	</style>
</head>

<body style="background-color:#FFEBCD;">
	<div align="center" style="top:0px">
          		  			
		<table width="1200" align="center"  class = "t" >
			<tr>
				<td style = "text-align:center;border:0px"> <a href="index.php" target="frame"><button class = "btn2" style="color:black"> Home </button></a></td>
            	<td style = "text-align:center;border:0px"><a href="customer.php" target="frame"><button class = "btn2" style="color:black">View Customers</button></a></td>
				<td style = "text-align:center;border:0px"><a href="Transfermoney.php" target="frame"><button class = "btn2" style="color:black">Transfer Money</button></a></td>
				<td style = "text-align:center;border:0px"><a href="transactionhistory.php" target="frame"><button class = "btn2" style="color:black">View Transaction History</button></a></td>
            </tr>
		</table>
		  
	</div>

<br>	  
    <h2 style="color:black;text-align: center;font-family: 'Josefin Sans', sans-serif;">Customer Details</h2>
    <table class="flat-table flat-table-1" align=center style="font-family: serif;color: black;">
		<thead>
			<th>CUSTOMER ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>BALANCE</th>
		</thead>
		<tbody>
		<tr align = center>
				
			<?php  
				while($row=mysqli_fetch_array($result)){
			?>
			
			<td><?php echo  $row["C_ID"]; ?></td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email"]; ?></td>
			<td><?php echo  $row["Balance"]; ?></td>
		<tr align = center>
	<?php }
	?>
		</tr>

        
		</tbody>
	</table>
	
	
</body>
</html>