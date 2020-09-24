<?php
$rows=4;
for($i=$rows;$i>=1;$i--)
{
	for($j=1;$j<=$i;$j++)
	{
	echo $j." ";
	}
	for($j=$i*2;$j<$rows*2;$j++)
	{
	echo " * ";
	}
	for($k=$i;$k>=1;$k--)
	{
	if($k<=$rows)
	{
	echo $k." ";
	}
	}
	echo "<br/>";
}
?>