<?php
$rows=5;
for($i=1;$i<=$rows;$i++)
{
	for($j=$rows;$j>$i;$j--)
	{
	echo  " 1 ";
	}
	for($k=1;$k<=$i;$k++)
	{
	echo $i." ";

	}
	echo "<br/>";
}
?>