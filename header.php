<?php

	$con = mysqli_connect("localhost","root","","blood");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Blood Report</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="styleSheet/Style.css">
	<link rel="stylesheet" type="text/css" href="styleSheet/popup.css">
	<link rel="stylesheet" type="text/css" href="Icon/css/font_icon.css">
</head>
<body>
	<div id="weper">
		<header>
			<div class="img">
				<img src="Images/head.jpg">
			</div>
			<div class="title">
				<div><a href="add_new.php">Add New</a></div>
				<div><h1>Blood Report</h1></div>
				<div><a href="index.php">Show List</a></div>
			</div>
		</header>
		