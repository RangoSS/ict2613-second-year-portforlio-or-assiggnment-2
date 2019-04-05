
<?php
include "styless.php";
include "connection.php";
include "link.php";

?>

<div style="margin-left: 40%;font-family: arial;">
    <h1>TASK4</h1>
    
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
    <br>
    <div style="height: 5%;background-color: red;margin-top: 55px;width: 50%;">
      <p style="font-family: 'Times New Roman', Times, serif;padding-left: 60%;color: white;font-size: large;" >To Delete Double Click</p>
    </div>
    </form>
  </div>
      
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
                
                <td class='text-center'><a class='btn btn-info btn-xs' href='updating.php?upd=$row[practicenumber]'><span class='glyphicon glyphicon-edit'></span> Update</a> <a href='task4.php?del=$row[practicenumber]' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span>Delete</a></td>
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
                
                <td class='text-center'><a class='btn btn-info btn-xs' href='updating.php?upd=$row[practicenumber]'><span class='glyphicon glyphicon-edit'></span> Update</a> <a name='del' href='task4.php?del=$row[practicenumber]' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span>Delete</a></td>
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
//////////////////////////go to insert page//////////////////////////////////
if(isset($_POST['btnd'])){
  header("location:unsertHere.php");
}
//////////////delete/////////////////////////////////////////////////////////////

if(isset($_GET['del'])){
  $deleting=$_GET['del'];

  $qer="DELETE from doctor WHERE practicenumber='$deleting'";
  $results=mysqli_query($con,$qer);
  if($results){
    echo "row has been deleted";
  }
}







