<?php

function countchars($x,$y,$z){
if(strlen($x)<$y){
	$newstring = str_pad($x,$y,$x);
	//echo $newstring;
	//echo '</br>';
	$return = substr_count( $newstring , $z );
	
}
else{
	$str = substr($x,0,$y);
	//echo $str;
	//echo '</br>';
	$return = substr_count( $str, $z);
	
}
return $return;
}

	$string = "abcac";
	$n = 10;
	$find = 'a';

$ans = countchars($string,$n,$find);
 echo 'There are ' . $ans . ' occurrences of ' . $find ;
  
?>