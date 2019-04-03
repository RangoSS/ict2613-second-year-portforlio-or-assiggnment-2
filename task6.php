<?php
include "styless.php";
include "connection.php";
include "link.php";

?>

<div style="margin-left: 40%;font-family: arial;">
    <h1>TASK6</h1>
    <h4 style="font-family: italic;color: blue;">make your wish for holidy in </h4>
</div>
<form method="post" action="">
    <p> enter name sepate by spaces</p>
    <input type="text" name="myImplode">
    <input type="submit" value="submit">
  </form>
</body>
</html>


<?php
//the use of implode and explode
if(isset($_POST['myImplode'])){
$myImplode=array($_POST['myImplode']);
$str="hello my name is fano.have a wonderful day.";
echo implode(" ",$myImplode ).'<br>';
print_r(explode(" ",$str ));
}
?>

<?php
function birthday(){
    //$date1=date('Y-m-d',strtotime($_POST['dateFrom']));
    $date1=date('Y-m-d',strtotime(2019-03-12));
}

?>