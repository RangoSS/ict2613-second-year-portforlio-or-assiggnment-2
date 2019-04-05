<?php

$var1=3;
$var2=2;
for( $i=1; $i<=19; $i++ ){

 if (($i % $var1)!==0 && ($i % $var2)!==0){
 	 print $i;
 	}

if (($i % $var1)==0 && ($i % $var2)==0){
	print "[".$i."]";
}
if (($i % $var1)==0 && !(($i % $var2)==0)){
	print"[".$i."]";
}
if (!(($i % $var1)==0) && ($i % $var2)==0){
	print"[".$i."]";
}





}


?>


<?php

function getNumbers($i) {
    if ($i % 3 == 0) {
        return $i +0;
    } else {
        return $i;
    }
}

for ($i = 1; $i <= 20; $i++) {
    echo "[".getNumber($i)."]";
}

?>

<?php

function getNumber($i) {
    if ($i % 3 == 0) {
        return $i * 4;
    } else {
        return $i;
    }
}

for ($i = 1; $i <= 20; $i++) {
    echo getNumber($i) . "\n";
}

?>

