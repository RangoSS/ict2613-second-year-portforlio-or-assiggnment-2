<?php
include "styless.php";
include "connection.php";
include "link.php";

?>

<div style="margin-left: 40%;font-family: arial;">
    <h1>TASK6</h1>
    <h4 style="font-family: italic;color: blue;">make your wish for holidy in </h4>
</div>

<!--dealing with dates-->
  <div class="inserts" style="margin-left: 30%;border-style:solid;border-color: green;width: 30%;padding-left: 5%;height: auto; ">
  <h3>enter name sepate by spaces</h3>
  
    <form action="#" method="post">
      
        <div class="row">
                <div class="col-md-3">
                    <div class="form-group form-group-sm">
                        <label for="firstname" class="control-label myedits">enter text</label>
                        <input type="text" class="form-control widthMe" id="myImplode" name="myImplode" placeholder="mpho mike joe">

                        <input type="submit" class="btn btn-success" name="btninset" value="submit"/>
                    </div>
                </div>
                </div>
    </form>
    <?php
//the use of implode and explode
if(isset($_POST['myImplode'])){
$myImplode=array($_POST['myImplode']);
$str="hello my name is fano.have a wonderful day.";

echo  implode(" ",$myImplode ).'<br>';
print_r(explode(" ",$str ));
}
?>
<br>
<h4><b>this is the function thats views your dates and age</b></h4>
<?php
//////////////////////////////B////////////////////////////////////////////////////////////////////
function birthday(){
   // $date1=date('d-m-Y',strtotime($_POST['dateFrom']));
    // $date1=date('d-m-Y',strtotime($_POST['dateFrom']));
    //$date1=date('Y-m-d',strtotime());
     $date1=date('d/m/Y',strtotime(20-01-1974));
     $date12=date('d-m-Y',strtotime(30-10-2019));
     
   return $date1;
 
}
echo "john was born in: ". birthday(20-01-1974).'<br>';
echo "mike was born in: ". birthday(29-03-1980).'<br>';
echo "wisani was born in: ". birthday(31-12-1996).'<br>';

 function getAge(){
    $date1=date('d/m/Y',strtotime(20-01-1974));
    $dob='20-01-1976';
     $diff=(date('Y')-date('Y',strtotime($dob)));
     
   
     return $diff;
    
}

echo"mugumo"." "."<b>"."age is:"."<b>".getAge();
?>


</div>
<div class="randoms" style="margin-left: 30%;border-style:solid;border-color: green;width: 30%;padding-left: 5%;height: auto; ">
    <p><b>List of Random Numbers</b></p>
<?php

/////////////////////////////////C///////////////////////////////
/////random numbers////////////////////////////////////////////

    $number_array=range(1,15);
    shuffle($number_array);
    $number_array=array_slice($number_array ,0,10);
   
   print_r($number_array)."<br>";
    echo "<br>";
    echo "<br>";
    print_r(array_count_values($number_array))."<br>";
    echo "<br>";
    echo "<br>";

   /////////////////////////array_sum///////////////////
   echo "your total number of array is:".array_sum($number_array);


?>
</div>
</body>

</html>


