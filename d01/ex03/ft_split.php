#!/usr/bin/php
<?php

function ft_split($str)
{
	$arr = preg_split("/[\s]+/", $str);
	sort($arr);
	$arr = array_values(array_filter($arr));
	print_r($arr);
}

?>
