<?php
$rows=5;
for($i=1;$i<=$rows;$i++)
{
	for($j=$i;$j<=$rows;$j++)
	{
	echo $j." ";
	}
	for($k=$rows-1;$k>=$i;$k--)
	{
	echo $k." ";
	}
	echo "<br/>";
}
?>