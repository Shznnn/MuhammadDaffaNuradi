<?php

$conn = mysqli_connect("localhost","root","","kopi");

if ($conn -> connect_error){
	die('database tidak terkoneksi'.$conn -> connect_error);
}

function query($query){
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}	

	return $rows;
}
?>
