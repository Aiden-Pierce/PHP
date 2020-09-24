<?php
$num=5;
for($i=$num;$i>=1;$i--)
{
	for($k=$num-1;$k>=$i;$k--)
 	{
 		echo " &nbsp;&nbsp; ";
 	}
 	for($j=1;$j<=$i;$j++)
 	{
 	echo $j." &nbsp;&nbsp; ";
 	}
 	echo "<br/>";
 }
 ?>