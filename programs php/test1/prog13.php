<?php
$size=5;
for($i=1;$i<=$size;$i++)
{
	for($j=$size;$j>$i;$j--)
	{
	echo " &nbsp;&nbsp; ";
	}
	for($k=1;$k<=$i;$k++)
	{
	echo  " * ";
	echo " &nbsp;&nbsp; ";
    }
	echo "<br/>";
}
?>