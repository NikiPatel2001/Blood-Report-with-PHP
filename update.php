<?php
		
	include("header.php");


	$id = $_GET['edit_id'];


	$get_up = "select * from report where Id='$id'";
	$run_up = mysqli_query($con,$get_up);
	$row_up = mysqli_fetch_array($run_up);


?>

		<section>
			<form method="post">
				<table class="entery">
					<tr>
						<td>
							<label>Name</label>
							<input type="text" name="nm" value="<?php echo $row_up[1];?>" placeholder="Enter name">
						</td>
						<td>
							<label>Address</label>
							<input type="text" name="address" value="<?php echo $row_up[2];?>" placeholder="Enter address">
						</td>
	
						<td>
							<label>Gender</label><br>
							<?php
								$gen1 = ($row_up[3] == "Male" ? "checked":"");
								$gen2 = ($row_up[3] == "Female" ? "checked":"");
							?>
							<input type="radio" <?php echo $gen1;?>  name="gender" value="Male"> Male &nbsp;&nbsp;
							<input type="radio" <?php echo $gen2;?> name="gender" value="Female"> Female
						</td>
					</tr>
					<tr id="blank"></tr>
					<tr>
						<td>
							<label>Weight</label>
							<input type="text" name="weight" value="<?php echo $row_up[4];?>" placeholder="Enter weight">
						</td>
						<td>
							<label>Height</label>
							<input type="text" name="height" value="<?php echo $row_up[5];?>" placeholder="Enter height">
						</td>
						<td>
							<label>Blood Pressure</label>
							<input type="text" name="blood_pre" value="<?php echo $row_up[6];?>" placeholder="Enter blood pressure">
						</td>
					</tr>
					<tr id="blank"></tr>
					<tr>
						<td>
							<label>Sop2</label>
							<input type="text" name="sop2" value="<?php echo $row_up[7];?>" placeholder="Enter Sop2">
						</td>
						<td>
							<label>Blood Group</label>
							<?php
								$gro1 = ($row_up[8] == "A+" ? "selected":"");
								$gro2 = ($row_up[8] == "B+" ? "selected":"");
								$gro3 = ($row_up[8] == "A-" ? "selected":"");
								$gro4 = ($row_up[8] == "B-" ? "selected":"");
								$gro5 = ($row_up[8] == "AB+" ? "selected":"");
								$gro6 = ($row_up[8] == "AB-" ? "selected":"");
								$gro7 = ($row_up[8] == "O+" ? "selected":"");
								$gro8 = ($row_up[8] == "O-" ? "selected":"");
							?>
							<select name="blood_gro">
								<option>== Select Blood Group ==</option>
								<option <?php echo $gro1;?>>A+</option>
								<option <?php echo $gro2;?>>B+</option>
								<option <?php echo $gro3;?>>A-</option>
								<option <?php echo $gro4;?>>B-</option>
								<option <?php echo $gro5;?>>AB+</option>
								<option <?php echo $gro6;?>>AB-</option>
								<option <?php echo $gro7;?>>O+</option>
								<option <?php echo $gro8;?>>O-</option>
							</select>
						</td>
						<td>
							<label>Blood Glucose Level</label>
							<input type="text" name="blood_glu" value="<?php echo $row_up[9];?>" placeholder="Enter glucose level">
						</td>
					</tr>
					<tr id="blank"></tr>
					<tr>
						<td>
							<label>BMI</label>
							<input type="text" name="bmi" value="<?php echo $row_up[10];?>" placeholder="Enter BMI">
						</td>
						<td>
							<label>Fluid</label>
							<input type="text" name="fluid" value="<?php echo $row_up[11];?>" placeholder="Enter fluid">
						</td>
						<td>
							<label>Fat</label>
							<input type="text" name="fat" value="<?php echo $row_up[12];?>" placeholder="Enter fat">
						</td>
					</tr>
					<tr id="blank"></tr>
					<tr>
						<td>
							<label>Muscle</label>
							<input type="text" name="muscle" value="<?php echo $row_up[13];?>" placeholder="Enter muscle">
						</td>
						<td>
							<label>Calories</label>
							<input type="text" name="calories" value="<?php echo $row_up[14];?>" placeholder="Enter calories">
						</td>
						<td>
							<label>Calcium</label>
							<input type="text" name="calcium" value="<?php echo $row_up[15];?>" placeholder="Enter calcium">
						</td>
					</tr>
					<tr id="blank"></tr>
					<tr id="blank"></tr>
					<tr>
						<td colspan="3" align="center">
							<input type="submit" name="updata" value="Update">
						</td>
					</tr>
				</table>
			</form>
		</section>


<?php

		if(isset($_POST['updata']))
		{
			$gender = $_POST['gender'];

			$updata = "UPDATE `report` SET `Name`='$_POST[nm]',`Address`='$_POST[address]',`Gender`='$gender',`weight`='$_POST[weight]',`Height`='$_POST[height]',`Blood_Pressure`='$_POST[blood_pre]',`Sop2`='$_POST[sop2]',`Blood_Group`='$_POST[blood_gro]',`Blood_Glucose_level`='$_POST[blood_glu]',`BMI`='$_POST[bmi]',`Fluid`='$_POST[fluid]',`Fat`='$_POST[fat]',`Muscle`='$_POST[muscle]',`Calories`='$_POST[calories]',`Calcium`='$_POST[calcium]' WHERE Id='$id'";

			$run_up = mysqli_query($con,$updata);

			if($run_up)
			{
				echo "<script>alert('Update Successfully...!')</script>";
				echo "<script>window.open('index.php','_self')</script>";
			}
			else
			{
				echo "<script>alert('Please Try Again...!')</script>";
			}
		}

?>

<?php

	include("footer.php");

?>