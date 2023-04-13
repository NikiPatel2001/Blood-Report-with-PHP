<?php
		
	include("header.php");

?>

		<section>
			<form method="post">
				<table class="entery">
					<tr>
						<td>
							<label>Name</label>
							<input type="text" name="nm" placeholder="Enter name">
						</td>
						<td>
							<label>Address</label>
							<input type="text" name="address" placeholder="Enter address">
						</td>
	
						<td>
							<label>Gender</label><br>
							<input type="radio" name="gender" value="Male"> Male &nbsp;&nbsp;
							<input type="radio" name="gender" value="Female"> Female
						</td>
					</tr>
					<tr id="blank"></tr>
					<tr>
						<td>
							<label>Weight</label>
							<input type="text" name="weight" placeholder="Enter weight">
						</td>
						<td>
							<label>Height</label>
							<input type="text" name="height" placeholder="Enter height">
						</td>
						<td>
							<label>Blood Pressure</label>
							<input type="text" name="blood_pre" placeholder="Enter blood pressure">
						</td>
					</tr>
					<tr id="blank"></tr>
					<tr>
						<td>
							<label>Spo2</label>
							<input type="text" name="sop2" placeholder="Enter Sop2">
						</td>
						<td>
							<label>Blood Group <input type="checkbox" value="1" checked name="h1"></label>
							<select name="blood_gro">
								<option>== Select Blood Group ==</option>
								<option>A+</option>
								<option>B+</option>
								<option>A-</option>
								<option>B-</option>
								<option>AB+</option>
								<option>AB-</option>
								<option>O+</option>
								<option>O-</option>
							</select>
						</td>
						<td>
							<label>Blood Glucose Level <input type="checkbox" checked value="1" name="h2"></label>
							<input type="text" name="blood_glu" placeholder="Enter glucose level">
						</td>
					</tr>
					<tr id="blank"></tr>
					<tr>
						<td>
							<label>BMI</label>
							<input type="text" name="bmi" placeholder="Enter BMI">
						</td>
						<td>
							<label>Fluid</label>
							<input type="text" name="fluid" placeholder="Enter fluid">
						</td>
						<td>
							<label>Fat</label>
							<input type="text" name="fat" placeholder="Enter fat">
						</td>
					</tr>
					<tr id="blank"></tr>
					<tr>
						<td>
							<label>Muscle</label>
							<input type="text" name="muscle" placeholder="Enter muscle">
						</td>
						<td>
							<label>Calories</label>
							<input type="text" name="calories" placeholder="Enter calories">
						</td>
						<td>
							<label>Calcium</label>
							<input type="text" name="calcium" placeholder="Enter calcium">
						</td>
					</tr>
					<tr id="blank"></tr>
					<tr id="blank"></tr>
					<tr>
						<td colspan="3" align="center">
							<input type="submit" name="add" value="Submit">
							<input type="reset" name="" value="Cancle">
							<!-- <input type="Submit" name="add" value="Print"> -->
						</td>
					</tr>
				</table>
			</form>
		</section>


<?php

		if(isset($_POST['add']))
		{
			$gender = $_POST['gender'];

			$add = "INSERT INTO `report`(`Name`, `Address`, `Gender`, `weight`, `Height`, `Blood_Pressure`, `Sop2`, `Blood_Group`, `Blood_Glucose_level`, `BMI`, `Fluid`, `Fat`, `Muscle`, `Calories`, `Calcium`,`hide_group`, `hide_level`) VALUES ('$_POST[nm]','$_POST[address]','$gender','$_POST[weight]','$_POST[height]','$_POST[blood_pre]','$_POST[sop2]','$_POST[blood_gro]','$_POST[blood_glu]','$_POST[bmi]','$_POST[fluid]','$_POST[fat]','$_POST[muscle]','$_POST[calories]','$_POST[calcium]','$_POST[h1]','$_POST[h2]')";

			// echo "<script>alert('$_POST[h1]')</script>";	

			$run_add = mysqli_query($con,$add);

			if($run_add)
			{
				echo "<script>alert('Add Successfully...!')</script>";
				echo "<script>window.open('add_new.php','_self')</script>";
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