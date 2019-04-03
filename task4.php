
<?php
include "styless.php";
include "connection.php";
include "link.php";

?>

<div style="margin-left: 40%;font-family: arial;">
    <h1>TASK4</h1>
    <h4 style="font-family: italic;color: blue;">make your wish for holidy in </h4>
</div>

<div id="showMyBookings" style="border-style: solid;border-color: blue;height: auto;">
  <div class="form-group" id="myHostes" style="margin-left: 25%;padding-bottom: 10px;">
    <form method="post">
    <label class="control-label col-sm-2" for="hospital">fitler by price:</label>
    <div class="col-sm-10"> 
      <select id="hospital" class="form-control minimiseInput" name="hospital" style="color: blue;">
      <option value="">--select--</option>
      <option value="300">300</option>
      <option value="400">400</option>
      <option value="1000">1000</option>
      <option value="2000">2000</option>
      <option value="3000">3000</option>
      <option value="400">morethan 400</option>
      </select>
      <br>
      <input type="submit" class="btn btn-success" name="btn" value="submit"/>
      <input type="submit" class="btn btn-success" name="btnd" value="Add new Doctor"/>
        
      
      
    </div>
    <br>
    </form>
  </div>
       <br>
    <div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <!--<a name="addNewRecods" href="#" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new Record</a><br>-->
  
        <tr>
            <th>practicenumber</th>
            <th>sperciality</th>
            <th>fees</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>

       <?php 
       


       if(isset($_POST['hospital'])){

         $selection=false;

         $selectMe=$_POST['hospital'];  
            $sql="select * from doctor where fee<='$selectMe'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){

      echo "
            <tr>
                <td>$row[practicenumber]</td>
                <td>$row[specialty]</td>
                <td>$row[fee]</td>
                
                <td class='text-center'><a class='btn btn-info btn-xs' href='#'><span class='glyphicon glyphicon-edit'></span> Update</a> <a href='#' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span>Delete</a></td>
            </tr>";
            }
echo "<div style='background-color:silver;'>";           
echo $sql;
echo "</div>";
}

//////////////////

       if(!isset($_POST['hospital'])){
  
            $sql="select * from doctor";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){

      echo "
            <tr>
                <td>$row[practicenumber]</td>
                <td>$row[specialty]</td>
                <td>$row[fee]</td>
                
                <td class='text-center'><a class='btn btn-info btn-xs' href='task4.php?upd=$row[practicenumber]'><span class='glyphicon glyphicon-edit'></span> Update</a> <a name='del' href='task4.php?del=$row[practicenumber]' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span>Delete</a></td>
            </tr>";
     
            }
  echo "<div style='background-color:silver;'>";           
echo $sql;
echo "</div>";
}

            ?>
           
    </table>
    </div>
</div>

</div>
<?php
if(isset($_POST['btnd'])){
  header("location:unsertHere.php");
}


if(isset($_GET['del'])){
  $deleting=$_GET['del'];

  $qer="DELETE from doctor WHERE practicenumber='$deleting'";
  $results=mysqli_query($con,$qer);
  if($results){
    echo "row has been deleted";
  }
}



//////////////////////////////////UPDATE INFORMATION//////////////////////////////////////



if(isset($_GET['upd'])){
    
   $updates=$_GET['upd'];
  // $Spercialitys=$_GET['Spercialitys'];
   //$feess=$_GET['feess'];
    
   //////////////////select////
   $sqlSelect="SELECT * FROM doctor where practicenumber='$updates'";
     $resultSelect=mysqli_query($con,$sqlSelect);
     while($row=mysqli_fetch_assoc($resultSelect)){

      echo '<form method="post">
       <label for="firstname" class="control-label myedits">Sperciality</label>
                        <input type="text" class="form-control widthMe" id="Spercialitys" name="Spercialitys" value="'.$row[specialty].'">

                        <label for="lastname" class="control-label">Fees</label>
                        <input type="text" class="form-control widthMe" id="feess"  name="feess" value="'.$row[fee].'">

                        <input type="submit" class="btn btn-success" name="btninset" value="insert"/></form>';
     }
      
     //////////////////////////////////////////

  /* $sqlss="UPDATE doctor(specialty,fee)
                             SET('$Spercialitys','$feess')";
    $result=mysqli_query($con,$sqlss);

    if($result){
 
 echo '    
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

</div>';
*/

}

?>
