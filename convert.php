<?PHP
/*
written by urandu bildad namawa email:bildadnamawa@gmail.com website:http://www.urandu.foundit.co.ke
this code is for free and you are free to modify it and play around with it.you can also add new ideas and help fix the bugs.
*/
#conversion from binary to text
	$string=$_POST["textstring"];
	$stringArray=str_split($string);
	$b="";
	foreach($stringArray as $str)
	{
		$new=ord($str);
		$new+=0;
		$b.=decbin($new);
		$b.=" ";
	}
include("index.php");
?>

