#!/usr/bin/php
<?php

$cur = 0;
$arr_n = [];
while (++$cur < $argc)
{
	$arr = preg_split("/[\s]+/", $argv[$cur]);
	$arr = array_values((array_filter($arr)));
	$arr_n = array_merge($arr_n, $arr);
}
sort($arr_n);
$len = count($arr_n);
$st = -1;
while (++$st < $len)
{
	if ($st == $len + 1)
		print "$arr_n[$st]";
	else
		print "$arr_n[$st]\n";
}

?>
