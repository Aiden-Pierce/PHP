<?php
$n=5;
for($i=1;$i<=$n;$i++)
{
	for($j=1;$j<=$i;$j++)
	{
	echo $j." ";
	}
	for($k=$n-$i;$k>=1;$k--)
	{
	echo " * ";
	}
	echo "<br/>";
}
?>