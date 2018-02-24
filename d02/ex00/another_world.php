#!/usr/bin/php
<?php

if ($argc < 2)
	return (0);
$arr = preg_split("/[\s\t]/", $argv[1]);
$arr = array_values(array_filter($arr));
$len = count($arr);
for ($i = 0; $i < $len; $i++)
{
	if ($i + 1 == $len)
		echo "$arr[$i]\n";
	else
		echo "$arr[$i] ";
}

?>
