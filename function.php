<?php
function check_login($con)
{
	if (isset($_SESSION['user_id'])) {
		$id = $_SESSION['user_id'];
		$query = "select * from customer where user_id = '$id' limit 1";

		$result = mysqli_query($con, $query);
		if ($result && mysqli_num_rows($result) > 0) {

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
	// header("Location: login.php");
	// die;
}


function fetch_all_city($property_con){
	$query = "select DISTINCT city FROM property";
	$all_property = $property_con->query($query);
	$result=array();
	while($row=mysqli_fetch_assoc($all_property)){
		$result[]=$row;
	}
	return $result;
}

function fetch_by_city($property_con,$city){
	$query = "select * from  property where city = '".$city."'";
	$all_property = $property_con->query($query);
	$result=array();
	while($row=mysqli_fetch_assoc($all_property)){
		$result[]=$row;
	}
	return $result;
}
