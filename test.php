<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

<div id="errors" style="display:none;">
	please enter you name and choose your wishes
</div>

<form method="post">
	<input type="text" name="array[]" id="array[]" />
	<input type="text" name="array[]" id="array[]"  />
	<input type="text" name="array[]" id="array[]" />
	<input type="text" name="array[]" id="array[]" />
	<input type="submit" id="asubmit" name="asubmit" onclick="checkEmty(event);" />
</form>

<?php

if (isset($_POST['asubmit'])){
    

    $checkhere=$_POST["array"];

    if($checkhere==""){
    	echo "enter name ";
    }
    else{

	foreach($checkhere as $myarray){
		echo $myarray."<br>";
	}
}
}
?>

<!--<script type="text/javascript">
	
		function checkEmty(event){
			event.preventDefault();
     	var showMe=$('#array').val()=="";
     
       $("#errors").show();

}
</script>-->