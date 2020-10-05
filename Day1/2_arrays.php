<?php
$a=array(array(7,2),array(11,3));
$b=array(array(5,3),array(8,3));

echo "matrix addition <br>";

for($i=0;$i<2;$i++)
{
	 
	 for($j=0;$j<2;$j++)
	 {
		  echo $a[$i][$j]+$b[$i][$j],"";
	 }
	 echo "<br>";
}
?>