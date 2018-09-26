<?php 
function fibo($n)
{
	$first = 0;
	$second = 1;

	echo $first;
	echo '<br>';
	echo $second;
	for($i=2; $i<$n; $i++)
	{
		$third = $first + $second;
		echo '<br>';
		echo $third.'';
		$first = $second;
		$second = $third;
	}
}
fibo(12);


?>