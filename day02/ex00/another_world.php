#!/usr/bin/php
<?PHP
	if ($argc > 1)
	{
		$str = preg_replace('/\s+/', ' ', trim($argv[1]));
		echo $str;
	}
?>
