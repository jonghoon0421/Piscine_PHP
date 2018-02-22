#!/usr/bin/php
<?php

function multi_explode($delim, $string)
{
	$ready = str_replace($delim, $delim[0], $string);
	$launch = explode($delim[0], $ready);
	return ($launch);
}

if ($argc == 2)
{
	$exploded = multi_explode(array("+", "-", "*", "/", "%"), $argv[1]);
	$exploded = array_map('trim', $exploded);
	if (!is_numeric($exploded[0]) || !is_numeric($exploded[1]))
	{
		print "Syntax Error\n";
		return (0);
	}
	$num1 = floatval($exploded[0]);
	$num2 = floatval($exploded[1]);
	$argv_len = strlen($argv[1]);
	$cur = -1;
	while (++$cur < $argv_len)
	{
		if ($argv[1][$cur] == '+')
			$op = '+';
		if ($argv[1][$cur] == '-')
			$op = '-';
		if ($argv[1][$cur] == '*')
			$op = '*';
		if ($argv[1][$cur] == '/')
			$op = '/';
		if ($argv[1][$cur] == '%')
			$op = '%';
	}
	switch ($op)
	{
		case '+':
			$res = $num1 + $num2;
			break ;
		case '-':
			$res = $num1 - $num2;
			break ;
		case '*':
			$res = $num1 * $num2;
			break ;
		case '/':
			$res = $num1 / $num2;
			break ;
		case '%':
			$res = $num1 % $num2;
			break ;
	}
	print "$res\n";
}
else
	print "Incorrect Parameters\n";

?>
