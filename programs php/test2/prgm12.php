<?php
$rows=5;
for($i=$rows;$i>=1;$i--)
{
	for($j=1;$j<=$i;$j++)
	{
	echo $j." ";
	}
	echo "<br/>";
}
	for($i=1;$i<=$rows;$i++)
	{
		for($j=1;$j<=$i;$j++)
		{
			echo $j." ";
		}
		echo "<br/>";
	}

?>