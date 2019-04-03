<?php
include "styless.php";
include "link.php";
?>
<div style="margin-left: 40%;font-family: arial;">
    <h1>TASK2</h1>
    <h4 style="font-family: italic;color: blue;">make your wish for holidy in </h4>
</div>
<!--your wishes -->
<div class="container">
<form method="post" style='background-color:silver;width: 50%;'>
     <label for="first_name" class="text-info">First Name:</label><br>
     <input type="text" name="array[]" id="first_name" class="form-control" style="width: 30%">
    <input type="checkbox" name="array[]" value="i want to quit smoking" />i want to quit smoking
    <input type="checkbox" name="array[]" id="array[]" value="loose weight"  />loose weight
    <input type="checkbox" name="array[]" id="array[]" value="marriage" />marriage
    <input type="checkbox" name="array[]" id="array[]" value="winning Lotto"/>winning Lotto
    <input type="checkbox" name="array[]" value="pass php" />pass php<br>
    <input type="checkbox" name="array[]" id="array[]" value="employed"  />employed
    <input type="checkbox" name="array[]" id="array[]" value="new car"  />new car
    <input type="checkbox" name="array[]" id="array[]" value="new house" />new house
    <input type="checkbox" name="array[]" value="expecting baby" />expecting baby
    <input type="checkbox" name="array[]" id="array[]" value="buying someone gift"  />buying someone gift<br>
    <input type="submit" class="btn btn-success" id="asubmit" name="asubmit" />
</form>
<div>
<?php

if (isset($_POST['asubmit'])){
    

    $checkhere=$_POST["array"];

    if($checkhere==""){
        echo "enter names ";
    }
    else{

    foreach($checkhere as $myarray){
        echo "<div style='background-color:silver;padding-left:1%;width: 50%;'>";
        echo $myarray.'<br>';
        echo '</div>';

    }
}
}
?>

