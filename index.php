<?php
		
	include("header.php");

?>

		<section>
			<div>
				<table class="show">
					<tr>
						<th width="5%">No.</th>
						<th width="20%">Name</th>
						<th>Address</th>
						<th width="10%">Gender</th>
						<th width="10%">Weight</th>
						<th width="10%">Height</th>
						<!-- <th>Blood Pressure</th>
						<th>Sop2</th>
						<th>Blood Group</th>
						<th>Blood Glucose Level</th> -->
						<!-- <th>BMI</th>
						<th>Fluid</th>
						<th>Fat</th>
						<th>Muscle</th>
						<th>Calories</th>
						<th>Calcium</th> -->
						<th width="16%">Option</th>
					</tr>
					<?php

						$get_list = "Select * from report order by Id desc";
						$run_list = mysqli_query($con,$get_list);
						$i=1;
						while($list_row = mysqli_fetch_array($run_list))
						{
							echo "<tr>";
							echo "<td>$i";
							echo "<td>$list_row[1]";
							echo "<td>$list_row[2]";
							echo "<td>$list_row[3]";
							echo "<td>$list_row[4]";
							echo "<td>$list_row[5]";
							echo "<td>
									<a href='index.php?show_id=$list_row[0]#show'><i class='fa fa-eye' arial-hidden='true'></i></a>
									<a href='update.php?edit_id=$list_row[0]'><i class='fa fa-edit' arial-hidden='true'></i></a>
									<a href='delete.php?delet_id=$list_row[0]'><i class='fa fa-trash' arial-hidden='true'></i></a>

							";
							echo "</tr>";

							$i++;
						}

					?>
				</table>
			</div>
		</section>
<?php
	
		if(isset($_GET['show_id']))
		{
			$id = $_GET['show_id'];

			$get = "select * from report where Id='$id'";
			$run = mysqli_query($con,$get);
			$row = mysqli_fetch_array($run);
		}
?>

	<div id="popbox">
		<div class="pop_box_bg" id="show">
			<div class="pop_box" id="show">
				<div class="pop_head">
					<h2><i class="fa fa-tasks" aria-hidden="true"></i> Show Report</h2>
					<p><a onclick="dataPrint()"><i class="fa fa-print" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></p>
				</div>
				<div id="printAria">
					<div class="show" style="border: 1px solid">
						<div class="head">
							<div class="img" style="width:99%;height:160px;margin: 1px auto;">
								<img src="Images/head.jpg" style="width:100%;height:100%; ">
							</div>
							<div class="title" style="border:px solid;margin: 10px auto;width:98%;">
								<h1 style="border:px solid;text-align: center;font-size: 25px;font-weight: bold;padding:10px 0px;background: #000;color:#fff;letter-spacing: 1.5px; ">Report</h1>
							</div>
						</div><hr style="margin: 5px 20px;"><hr style="margin: 5px 20px;">
						<div class="body">
							<div style="width: 90%;height:20px;margin: 20px auto;position: relative;">
								<p style="width: 200px;position: absolute;left: 3%;">Visitor's ID : <?php echo $row[0];?></p>
								<p style="width: 200px;position: absolute;right: 3%;text-align: right;">Date : <?php echo date('d/m/Y')?></p>	
							</div>
							<table border style="width: 90%;height: 600px;margin: 20px auto;border-collapse:collapse;">
								<tr>
									<td style="width: 250px">&nbsp; Name</td>
									<td>&nbsp; <?php echo $row[1];?></td>
								</tr>
								<tr>
									<td>&nbsp; Address</td>
									<td>&nbsp; <?php echo $row[2];?></td>
								</tr>
								<tr>
									<td>&nbsp; Gender</td>
									<td>&nbsp; <?php echo $row[3];?></td>
								</tr>
								<tr>
									<td>&nbsp; Weight</td>
									<td>&nbsp; <?php echo $row[4];?></td>
								</tr>
								<tr>
									<td>&nbsp; Height</td>
									<td>&nbsp; <?php echo $row[5];?></td>
								</tr>
								<tr>
									<td>&nbsp; Blood Pressure</td>
									<td>&nbsp; <?php echo $row[6];?></td>
								</tr>
								<tr>
									<td>&nbsp; Spo2</td>
									<td>&nbsp; <?php echo $row[7];?></td>
								</tr>
								<?php
									if($row[16] == 1 )
									{
								?>
								<tr>
									<td>&nbsp; Blood Group</td>
									<td>&nbsp; <?php echo $row[8];?> </td>
								</tr>
								<?php
									}
									if($row[17] == 1)
									{
								?>
								<tr>
									<td>&nbsp; Blood Glucose Level</td>
									<td>&nbsp; <?php echo $row[9];?></td>
								</tr>
								<?php
									}
								?>
								<tr>
									<td>&nbsp; BMI</td>
									<td>&nbsp; <?php echo $row[10];?></td>
								</tr>
								<tr>
									<td>&nbsp; Fluid</td>
									<td>&nbsp; <?php echo $row[11];?></td>
								</tr>
								<tr>
									<td>&nbsp; Fat</td>
									<td>&nbsp; <?php echo $row[12];?></td>
								</tr>
								<tr>
									<td>&nbsp; Muscle</td>
									<td>&nbsp; <?php echo $row[13];?></td>
								</tr>
								<tr>
									<td>&nbsp; Calories</td>
									<td>&nbsp; <?php echo $row[14];?></td>
								</tr>
								<tr>
									<td>&nbsp; Calcium</td>
									<td>&nbsp; <?php echo $row[15];?></td>
								</tr>
							</table>
						</div>
						<div class="footer">
							<p style="text-align: center;letter-spacing: 0.8px;font-size: 10px;margin: 20px;">
							Note : This report has been generated by the student only for the purpose of seminar hence not valid for pathology or clinical diagnosis.
						</p>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>

<?php

	include("footer.php");
?>



	




