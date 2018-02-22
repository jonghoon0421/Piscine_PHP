#!/usr/bin/php
<?php

function ft_sort($cmp, $against)
{
	$a = str_split(strtolower(($cmp)));
	$b = str_split(strtolower(($against)));
	$i = -1;
	while ($a[++$i] && $b[$i])
	{
		if (is_numeric($a[$i]))
		{
			if (ctype_alpha($b[$i]))
				return (1);
			if (is_numeric($b[$i]) && $a[$i] != $b[$i])
				return (($a[$i] > $b[$i]) ? 1 : -1);
			else if (!is_numeric($b[$i]))
				return (0);
		}
		else if (ctype_alpha($a[$i]))
		{
			if (is_numeric($b[$i]))
				return (-1);
			if (ctype_alpha($b[$i]) && $a[$i] != $b[$i])
				return (($a[$i] > $b[$i]) ? 1 : -1);
			else if (!ctype_alpha($b[$i]))
				return (0);
		}
		else
		{
			if (ctype_alpha($b[$i]) || is_numeric($b[$i]))
				return (1);
			if ($a[$i] > $b[$i])
				return (1);
		}
	}
	if ($a[$i] && !$b[$i])
		return (1);
	return (0);
}

$cur = 0;
$arr_n = [];
while (++$cur < $argc)
{
	$arr = preg_split("/[\s]+/", $argv[$cur]);
	$arr = array_values((array_filter($arr)));
	$arr_n = array_merge($arr_n, $arr);
}
usort($arr_n, 'ft_sort');
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
