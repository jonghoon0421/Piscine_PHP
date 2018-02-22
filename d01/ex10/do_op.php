#!/usr/bin/php
<?php

if ($argc == 4)
{
	$num1 = intval(trim($argv[1]));
	$op = trim($argv[2]);
	$num2 = intval(trim($argv[3]));
	if ($op == '+')
		$res = $num1 + $num2;
	else if ($op == '-')
		$res = $num1 - $num2;
	else if ($op == '*')
		$res = $num1 * $num2;
	else if ($op == '/')
		$res = $num1 / $num2;
	else if ($op == '%')
		$res = $num1 % $num2;
	print "$res\n";
}
else
	print "Incorrect Parameters\n";

?>
