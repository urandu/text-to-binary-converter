<?PHP

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

