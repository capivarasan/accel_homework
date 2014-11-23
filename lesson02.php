<?php
$wari3=0;
$wari5=0;
for($i=100;$i>=1;$i--){
	$wari3=$i%3;
	$wari5=$i%5;
	if($wari3==0&&$wari5==0){
		echo "$i\n";
	}
}
?>