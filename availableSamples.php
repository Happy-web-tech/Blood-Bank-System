<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./Styles/availableSamples.css">
	<title>Available Blood Samples</title>
</head>
<body>
	<?php
		include("header.php");
		if(isset($_COOKIE['username']) || isset($_COOKIE['username1']))
		{
	?>
	<script type="text/javascript">
		var logout=document.getElementById('logout');
		var loginNameContainer=document.getElementsByClassName('loginNameContainer')[0];
		logout.style.display="block";
		loginNameContainer.style.display="flex";
	</script>
	<?php
		}
	?>
	<main>
		<content>
			<h2 class="titleText">Available Blood Samples</h2>

			<?php
				require("./Database/dbConnection.php");
				$sql="select * from availablebloodsamples;";
				$result=mysqli_query($con,$sql);
				if(mysqli_num_rows($result)==0)
				{
					
			?>
			<div class="noBloodAvailable">SORRY!!<br>There is <span style="color: red; font-weight: bold;">NO AVAILABILITY</span> of blood.
			</div>
			<?php
				}
			?>

			<div class="table">
				<table>
					<tr>
						<th>S.No.</th>
						<th>Blood Type</th>
						<th>Quantity</th>
						<th>Hospital Name</th>
						<th>Address</th>
						<th>Request</th>
					</tr>
					<!-- php script -->

					<?php
						if(mysqli_num_rows($result) > 0)
						{
							while($row=mysqli_fetch_assoc($result))
							{
								echo "<tr> <td>".$row['Sno']."</td>".
								"<td>".$row['bloodType']."</td>".
								"<td>".$row['quantity']."</td>".
								"<td>".$row['hospitalName']."</td>".
								"<td>".$row['address']."</td>".
								"<td> <button class ='requestButton' type='button'>Request</button> </td>".
								"</tr>";
							}
						?>
							<script type="text/javascript" src="./Js/availableSamples.js"></script>
					<?php
						}
					?>

				</table>
			</div>
		</content>
	</main>

	<?php
		include("footer.html");
	?>


</body>
</html>