<?php
function print_pattern($num)
{
for($i=1;$i<=$num;$i++)
 {
	for($k=$num;$k>$i;$k--)
	{
	echo " &nbsp;&nbsp; ";
	}
	for($j=1;$j<=$i;$j++)
	{
	echo  $j." ";
	echo " &nbsp;&nbsp; ";
	}
	echo "<br/>";
 } 
 for($i=$num-1;$i>=1;$i--)
 {
 	for($k=$num-1;$k>=$i;$k--)
 	{
 		echo " &nbsp;&nbsp; ";
 	}
 	for($j=1;$j<=$i;$j++)
 	{
 	echo $j." ";
 	echo " &nbsp;&nbsp; ";
    }
 	echo "<br/>";
 }
 
}
$num=5;
print_pattern($num);
?>