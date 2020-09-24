<?php
$size=5;
$num=1;
for($i=1;$i<=$size;$i++)
{
for($j=1;$j<=$i;$j++)
{
	echo $num." ";
	$num=$num+1;
}
echo "<br/>";
}
