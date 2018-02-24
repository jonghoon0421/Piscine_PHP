#!/usr/bin/php
<?php

if ($argc < 2)
	return (0);
else
{
	date_default_timezone_set('Europe/Paris');
	$arr = preg_split("/[\s]/", $argv[1]);
	$arr = array_values(array_filter($arr));
	if (count($arr) != 5)
		exit("Wrong Format\n");
	$clock = preg_split("/[:]/", $arr[4]);
	if (count($clock) != 3)
		exit("Wrong Format\n");
	$month = array("janvier"=>1, "fevrier"=>2, "mars"=>3, "avril"=>4, "mai"=>5,
		"juin"=>6, "juillet"=>7, "aout"=>8, "septembre"=>9,	"octobre"=>10,
		"novembre"=>11, "decembre"=>12);
	$arr[2] = strtolower($arr[2]);
	if (!is_numeric($arr[1]) || !is_numeric($arr[3]) || !ctype_alpha($arr[2]) ||
		!is_numeric($clock[0]) || !is_numeric($clock[1]) ||
		!is_numeric($clock[2]) || !array_key_exists($arr[2], $month))
		exit("Wrong Format\n");
	$real = array("Day"=>$arr[0], "nDay"=>intval($arr[1]),
		"Month"=>intval($month[$arr[2]]), "Year"=>intval($arr[3]),
		"Hour"=>intval($clock[0]), "Minute"=>intval($clock[1]),
		"Second"=>intval($clock[2]));
	$res = mktime($real["Hour"], $real["Minute"], $real["Second"],
		$real["Month"],	$real["nDay"], $real["Year"]);
	return (print "$res\n");
}

?>
