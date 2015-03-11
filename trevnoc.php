<?php

	$bildad="";
	$nw=explode(" ",$_POST['textstring']);

	foreach($nw as $x)
	{
		$f=bindec($x);
		$bildad.=chr($f);
	}
include("index.php");
?>

