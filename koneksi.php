<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'kopi';

$conn = mysqli_connect($hostname,$username,$password,$database);

if ($conn -> connect_error){
	die('database tidak terkoneksi'.$conn -> connect_error);
}
?>
