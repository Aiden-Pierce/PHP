<?php
$rows=5;
for($i=1;$i<=$rows;$i++)
{
	for($j=1;$j<$i;$j++)
	{
	echo " 0 ";
	}
	echo $i." ";
	for($k=$i;$k<$rows;$k++)
	{
	echo " 0 ";
	}
	echo "<br/>";
}
?>