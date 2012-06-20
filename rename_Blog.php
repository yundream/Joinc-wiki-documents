<?
$handle = opendir("./");

while($file = readdir($handle))
{
	if (ereg("^music_5f", $file))
	{
		$renam =ereg_replace("music_5f","music_2f",$file);
		rename($file, $renam);
		echo "$file ==> $renam\n";
	}
}
?>
