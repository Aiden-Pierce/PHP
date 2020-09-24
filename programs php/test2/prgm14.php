<?php
$rows=5;
for($i=1;$i<=$rows;$i++)
{
	for($j=1;$j<$i;$j++)
	{
	echo " &nbsp;&nbsp; ";
	}
	for($k=$i;$k<=$rows;$k++)
	{
	echo $k." ";
	}
	echo "<br/>";
}
   for($i=$rows;$i>=1;$i--)
   {
   	for($j=1;$j<$i;$j++)
   	{
   		echo " &nbsp;&nbsp; ";
   	}
   	for($k=$i;$k<=$rows;$k++)
   	{
   		echo $k." ";
   	}
   	echo "<br/>";
   }
?>