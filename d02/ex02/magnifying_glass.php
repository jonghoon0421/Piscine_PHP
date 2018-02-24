#!/usr/bin/php
<?php

if ($argc == 2)
{
	$info = "";
	$file = fopen($argv[1], "r");
	if ($file)
	{
		while (($line = fgets($file)) !== false)
			$info .= $line;
	}
	$info = preg_replace_callback("/(<a )(.*?)(>)(.*?)(<\/a>)/si",
		function($matches)
		{
			$matches[0] = preg_replace_callback("/( title=\")(.*?)(\")/si",
				function($matches)
				{
					return ($matches[1].strtoupper($matches[2]).$matches[3]);
				}, $matches[0]);
			$matches[0] = preg_replace_callback("/(>)(.*?)(<)/si",
				function($matches)
				{
					return ($matches[1].strtoupper($matches[2]).$matches[3]);
				}, $matches[0]);
			return ($matches[0]);
		}, $info);
	echo $info;
}
else
	return (0);

?>
