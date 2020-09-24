<?php
$rows=5;
for($i=1;$i<=$rows;$i++)
{
	for($j=$rows;$j>$i;$j--)
	{
	echo " &nbsp;&nbsp; ";
	}
	for($k=1;$k<=$i;$k++)
	{
	echo $k." ";
	}
	for($l=$i-1;$l>=1;$l--)
	{
	echo $l." ";
	}
	echo "<br/>";
}
?>