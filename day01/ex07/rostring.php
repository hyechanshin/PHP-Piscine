#!/usr/bin/php
<?PHP
    if ($argc < 1)
        exit();
    $arr = explode(" ", $argv[1]);
    $first_element = array_shift($arr);
	array_push($arr, $first_element);
	$str = implode(" ", $arr);
	if ($str)
        echo "$str\n";
?>