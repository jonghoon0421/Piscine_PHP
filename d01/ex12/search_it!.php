#!/usr/bin/php
<?php

if ($argc == 1 || $argc == 2)
	return (0);
else
{
	$arr_key = $argv[1];
	for ($i = 2; $i < $argc; $i++)
	{
		$str = $argv[$i];
		$arr = explode(":", $str);
		$real[$arr[0]] = $arr[1];
	}
	if (array_key_exists($arr_key, $real))
		print "$real[$arr_key]\n";
	else
		return (0);
}

?>
