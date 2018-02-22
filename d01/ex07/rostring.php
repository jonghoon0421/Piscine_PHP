#!/usr/bin/php
<?php

$arr = preg_split("/[\s]+/", $argv[1]);
$arr = array_values(array_filter($arr));
$len = count($arr);
$i = 0;
while (++$i < $len)
	print "$arr[$i] ";
print "$arr[0]\n";

?>
