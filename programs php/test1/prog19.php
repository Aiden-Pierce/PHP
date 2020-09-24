<?php
$rows=5;
for($i=1;$i<=5;$i++)
{
	for($j=$rows;$j>$i;$j--)
	{
    echo " &nbsp;&nbsp; ";
    }
    for($k=$i;$k>=1;$k--)
    {
    echo " * ";
    }
    echo "<br/>";
}
for($i=$rows-1;$i>=1;$i--)
{
	for($j=$rows;$j>$i;$j--)
	{
		echo " &nbsp;&nbsp; ";
	}
	for($k=$i;$k>=1;$k--)
	{
		echo " * ";
	}
	echo "<br/>";
}
?>