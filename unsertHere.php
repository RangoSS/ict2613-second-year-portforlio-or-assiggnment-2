<?php
include "styless.php";
include "connection.php";
include "link.php";

?>
<input type="submit" class="btn btn-success" name="btnBack" value="Back"/>
<div class="inserts" style="margin-left: 30%;border-style:solid;border-color: green;width: 30%;padding-left: 5%;height: 32%; ">
  <h3>inset new information</h3>
  
    <form action="#" method="post">
      
        <div class="row">
                <div class="col-md-3">
                    <div class="form-group form-group-sm">
                        <label for="firstname" class="control-label myedits">Sperciality</label>
                        <input type="text" class="form-control widthMe" id="Spercialitys" name="Spercialitys" placeholder="sperciality">

                        <label for="lastname" class="control-label">Fees</label>
                        <input type="text" class="form-control widthMe" id="feess"  name="feess" placeholder="fees">

                        <input type="submit" class="btn btn-success" name="btninset" value="insert"/>
                    </div>
                </div>
                </div>
    </form>

</div>

<?php

if(isset($_POST['Spercialitys'])){
   $Spercialitys=$_POST['Spercialitys'];
   $feess=$_POST['feess'];
   $btnBack=$_POST['btnBack'];


   $sqlss="INSERT INTO doctor(specialty,fee)
                             VALUES('$Spercialitys','$feess')";
    $result=mysqli_query($con,$sqlss);

    if($result){
      header('location:task4.php');
      echo "one record is inserted";
    }
   
}
