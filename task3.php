
<?php
include "styless.php";
include "connection.php";
include "link.php";

?>

<div style="margin-left: 40%;font-family: arial;">
    <h1>TASK3</h1>
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

