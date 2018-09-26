<?php 
function Isprime($n)
{
	for($x=2; $x<$n; $x++)
	{
		if($n % $x == 0)
		{
			return 0;
		}
	}
	return 1;

}
$a = Isprime(8);
if($a == 0)
{
	echo ' this is not prime number ';
}
else
{
	echo ' this is prime number';
}

?>