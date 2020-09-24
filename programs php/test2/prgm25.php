<?php
$rows=7;
$temp=1;
for($i=1;$i<=$rows;$i++)
{
	for($j=1;$j<=$i;$j++)
	{
	echo $temp*$j." ";
	}
	echo "<br/>";
	$temp++;
}
for($i=1;$i<=$rows/2;$i++)
{
	for($j=1;$j<=rows/2+1-$i;$j++)
	{
	echo $temp*$j." ";
	}
	echo "<br/>";
	$temp++;
}
?>