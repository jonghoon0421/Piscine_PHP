#!/usr/bin/php
<?php

$i = 0;
while (++$i < $argc)
{
	if ($i == $argc)
		print "$argv[$i]";
	else
		print "$argv[$i]\n";
}

?>
