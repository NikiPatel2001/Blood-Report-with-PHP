<?php
	
	$con = mysqli_connect("localhost","root","","blood");

		if($_GET['delet_id'])
		{
			$id = $_GET['delet_id'];
			$del = "delete from report where Id='$id'";
			$run_del = mysqli_query($con, $del);

			if($run_del)
			{
				echo "<script>alert('Delete Successfully...!')</script>";
				echo "<script>window.open('index.php','_self')</script>";
			}
			else
			{
				echo "<script>alert('Please Try Again...!')</script>";
			}

		}
		

?>