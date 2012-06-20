<?
$handle = opendir("./");

while($file = readdir($handle))
{
	if (ereg("^Code_2fPerl_2f", $file))
	{
		$renam =ereg_replace("Perl_","JPerl_",$file);
		rename($file, $renam);
		echo "$file ==> $renam\n";
	}
}
?>
