<?php
session_start();
include("connection.php");
include("function.php"); //from function.php
$user_data = check_login($con);


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>ListingLane</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/7a1a8867fc.js" crossorigin="anonymous"></script>
</head>

<body>
	<?php include("./shared/header.php") ?>
	<?php include("./shared/hero.php") ?>
	<?php include("./shared/searchbar.php") ?>
	<?php include("./shared/feature.php") ?>
	<?php include("./shared/display.php") ?>
	<?php include("./shared/footer.php") ?>

</body>

</html>