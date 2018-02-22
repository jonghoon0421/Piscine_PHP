#!/usr/bin/php
<?php

while (1)
{
	print "Enter a number: ";
	$str = trim(fgets(STDIN));
	if (feof(STDIN))
	{
		print "^D\n";
		break ;
	}
	if (is_numeric($str))
	{
		if (($num = intval($str)) % 2 == 1 || ($num = intval($str)) % 2 == -1)
			print "The number $num is odd\n";
		else
			print "The numer $num is even\n";
	}
	else
		print "'$str' is not a number\n";
}

?>
