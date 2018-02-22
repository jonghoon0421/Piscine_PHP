#!/usr/bin/php
<?php

$arr = preg_split("/[\s]+/", $argv[1]);
$arr = array_values(array_filter($arr));
$len = count($arr);
$i = -1;
while (++$i < $len)
{
	if ($i == $len - 1)
		print "$arr[$i]";
	else
		print "$arr[$i] ";
}

?>
