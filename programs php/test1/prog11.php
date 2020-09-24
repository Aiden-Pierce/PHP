<?php
$rows=5;
for($i=1;$i<=$rows;$i++)
{
	for($j=$rows;$j>$i;$j--)
	{
		echo " &nbsp;&nbsp; ";
	}
	for($k=$i;$k>=1;$k--)
	{
		echo $k." ";
	}
	echo "<br/>";

}
?>