#!/usr/bin/php
<?php

    date_default_timezone_set('America/Los_Angeles');
    $file = fopen("/var/run/utmpx", "r");
	while ($str = fread($file, 628))
	{
        $unpack = unpack("a256login/a4id/a32tty/ipid/itype/I2time/a256host/i16un", $str);
        $arr[$unpack['tty']] = $unpack;
    }
    ksort($arr);
	foreach ($arr as $value)
	{
		if ($value['type'] == 7)
		{
            echo str_pad(substr(trim($value['login']), 0, 8), 8, " ")." ";
            echo str_pad(substr(trim($value['tty']), 0, 8), 8, " ")." ";
            echo date("M", $value["time1"]);
            echo str_pad(date("j", $value["time1"]), 3, " ", STR_PAD_LEFT)." ".date("H:i", $value["time1"]);
            echo "\n";
        }
    }

?>
