 
<?php
include_once "connection.php";
if(isset($_GET['upd'])){
  
    $updates=(int)$_GET['upd'];
    
   //////////////////select////
   $sqlSelect="SELECT * FROM doctor where practicenumber='$updates'";
     $resultSelect=mysqli_query($con,$sqlSelect);
     $row=mysqli_fetch_assoc($resultSelect);
}
     ?> 

      <form  action="" method="post">
       <label for="firstname" class="control-label myedits">Sperciality</label>
       <input type="hidden" class="form-control widthMe" id="practicenumber" name="practicenumber" value="<?php echo $row['practicenumber']?>">
                        <input type="text" class="form-control widthMe" id="Spercialitys" name="Spercialitys" value="<?php echo $row['specialty']?>">

                        <label for="lastname" class="control-label">Fees</label>
                        <input type="text" class="form-control widthMe" id="feess"  name="feess" value="<?php echo $row['fee']?>">

                        <input type="submit" class="btn btn-success" name="btninset" value="insert"/>
                        </form>
     
      
     //////////////////////////////////////////



  

  <?php
  
  if(isset($_POST['btninset'])){


    $feess=$_POST['feess'];
    $Spercialitys=$_POST['Spercialitys'];
    $practicenumber=$_POST['practicenumber'];

    $sqlss="UPDATE doctor    
                             SET
                              specialty='$Spercialitys',
                               fee='$feess'
                              WHERE practicenumber='$practicenumber'";
    $result=mysqli_query($con,$sqlss);

    if(!$result){
      echo "your sql statement is not oky";

     
 }
 else{
 	header("location:task4.php");
 }
 }
 
?>
