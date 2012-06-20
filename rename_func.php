<?
$handle = opendir("./");

while($file = readdir($handle))
{
	if (ereg("^function_5f", $file))
	{
		$renam=substr($file, 11);
		$renam =ereg_replace("(.+)_28([0-9]+)_29","man_2f\\2_2f\\1",$renam);
		rename($file, $renam);
		//echo "$file ==> $renam\n";
	}
}
?>
