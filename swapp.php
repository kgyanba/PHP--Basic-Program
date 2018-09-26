<?php 
function Swap()
{
	$x = 20;
	$y = 30;
	 echo "before swaping: x = ".$x.",y = ".$y;
	 echo "<br>";
	 $x = $x ^ $y;
	 $y = $x ^ $y;
	 $x = $x ^ $y;

	 echo "after swaping: x = ".$x.",y = ".$y;
}
swap();

?>