<?php
include "styless.php";
include "connection.php";
include "link.php";
?>
<div style="margin-left: 40%;font-family: arial;">
	<h1>TASK1</h1>
<?php

//task 1///////////////////////////////////////////////

$Student_name="Vusi Bhopape";
$Number_of_modules_registered= 4;
 $Cost_per_module=1825;
 define($Cost_per_module,"cost");

$Bursary_amount=5000;
$Outstanding_fee=2300;

$Total_fee=$Cost_per_module*$Number_of_modules_registered;


echo "student name".":"." "."<b>".$Student_name."</b>"."<br>";
echo "Number of modules registered".":"." "."<b>".$Number_of_modules_registered."</b>"."<br>";
echo "Costper module".":"." "."<b>".$Cost_per_module."</b>"."<br>";
echo "Total fee".":"." "."<b>".$Total_fee."<b>"."<br>";
echo "Outstanding fee".":"." "."<b>".$Outstanding_fee."</b>"."<br>";
?>

</div>