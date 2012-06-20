<?
$handle = opendir("./");
/*
Site_2fTransHowTo_2fTerm
Site_2fTransHowTo_2fTerm_2fBit
Site_2fTransHowTo_2fTerm_2fBranches
Site_2fTransHowTo_2fTerm_2fCycle
Site_2fTransHowTo_2fTerm_2fEmulator
Site_2fTransHowTo_2fTerm_2fLayer
Site_2fTransHowTo_2fTerm_2fLoad_20Module
Site_2fTransHowTo_2fTerm_2fLoop
Site_2fTransHowTo_2fTerm_2fObject_20Module
Site_2fTransHowTo_2fTerm_2fOperation
Site_2fTransHowTo_2fTerm_2fPath
Site_2fTransHowTo_2fTerm_2fSegment
Site_2fTransHowTo_2fTerm_2fStatement
Site_2fTransHowTo_2fTerm_2fSystem_20Call
Site_2fTransHowTo_2fTerm_2fTutorial
Site_2fTransHowTo_2fTerm_2fVirtual
Site_2fTransHowTo_2fTerm_2finteger
Site_2fTransHowTo_2fTerm_2fpattern
Site_2fTransHowTo_2fTerm_2fpseudoinstructions
*/

while($file = readdir($handle))
{
	if (ereg("Site_2fTransHowTo_2fTerm_2f", $file))
	{
		$renam=substr($file, 27);
		$renam =ereg_replace("(.+)","man_2f1004_2f\\1",$renam);
		rename($file, $renam);
		//echo "$file ==> $renam\n";
	}
}
?>
