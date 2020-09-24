<?php
$rows=5;
for($i=1;$i<=$rows;$i++)
{
	for($j=$rows;$j>$i;$j--)
	{
		echo " &nbsp;&nbsp; ";
	}
	$temp=1;
	for($k=1;$k<=$i;$k++)
	{
     echo $temp."  &nbsp;&nbsp; ";
     $temp=$temp*($i-$k)/($k);
	}
	echo "<br/>";
}
?>