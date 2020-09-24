<?php
$rows=5;
for($i=1;$i<=5;$i++)             
   {
    for($j=$rows;$j>$i;$j--)
   	{
   		echo " &nbsp;&nbsp ";
   	}
   	for($k=1;$k<=$i;$k++)
   	{
   		echo $i." &nbsp;&nbsp;  ";

   	}
   	echo "<br/>";
   }
?>