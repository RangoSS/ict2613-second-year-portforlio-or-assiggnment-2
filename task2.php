<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<link href="css/logoinStyle.css" rel="stylesheet" id="bootstrap-css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

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

