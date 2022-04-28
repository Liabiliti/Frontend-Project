<?php
function acallback($item){
	print strtoupper($item);
}
function myFunction ($strFunction, $str)
{
	$strFunction($str);
}
myFunction("acallback","cat");
?>
