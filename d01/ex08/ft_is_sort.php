#!/usr/bin/php
<?php

function ft_is_sort($arr)
{
	$arr_s = $arr;
	sort($arr_s);
	return ($arr === $arr_s);
}

?>
