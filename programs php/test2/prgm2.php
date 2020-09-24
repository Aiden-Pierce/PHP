<?php
$rows=5;
for($i=1;$i<=$rows;$i++)
{
	for($j=$rows;$j>=$i;$j--)
	{
		echo $j." ";
	}
	
	echo "<br/>";
}
?>
