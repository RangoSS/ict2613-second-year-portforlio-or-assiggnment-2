<?php

$db_host="localhost";
$db_user="root";
$db_data="doctors";
$db_password="";

$con=mysqli_connect($db_host,$db_user,$db_password,$db_data);

if(!$con){
	echo("you are not connected".mysqli_error($con));
}

?>