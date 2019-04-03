<?php
/*if($_GET){
    if(isset($_GET['insert'])){
        insert();
    }elseif(isset($_GET['select'])){
        select();
    }
}

    function select()
    {
       echo "The select function is called.";
    }
    function insert()
    {
       echo "The insert function is called.";
    }
*/
?>.

<!--
<input type="submit" class="button" name="insert" value="insert" />
<input type="submit" class="button" name="select" value="select" />
-->
===============================================



<?php
 if($_GET['button1']){fun1();}
 if($_GET['button2']){fun2();}

 function fun1()
 {
   echo "gjgjdfjdfjfdj";
 }
 function fun2()
 {
   echo "love you";
 }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
  </head>
  <body>
    <button id="btnfun1" name="btnfun1" onClick='location.href="?button1=1"'>Update to 1</button>
    <button id="btnfun2" name="btnfun2" onClick='location.href="?button2=2"'>Update to 2</button>
  </body>
</html>
