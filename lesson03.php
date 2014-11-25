<?php
 	$filepointerA=fopen("./fileA.txt","r");
	$filepointerB=fopen("./fileB.txt","w");
	while(!feof($filepointerA)){
 		$fileline = fgets($filepointerA);
		$fileline = preg_replace('/(\s|　)/','',$fileline);
 		fputs($filepointerB,$fileline."\n");
	}
	fclose($filepointerA);
	fclose($filepointerB);
?>