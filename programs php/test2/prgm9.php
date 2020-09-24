<?php
$rows=5;
for($i=$rows;$i>=1;$i--)
{
	for($j=$i;$j<=$rows;$j++)
	{
		echo $j." ";
	}
	for($k=$i-1;$k>=1;$k--)
	{
		echo " 5 ";
	}
	echo "<br/>";
}
?>