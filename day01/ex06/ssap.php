#!/usr/bin/php
<?PHP
    $i = 1;
    $arr = array();
    foreach($argv as $value)
    {
        $str = preg_split("/ +/", trim($value));
        if ($str[0] != "")
			{
                if ($i++ > 1)
				$arr = array_merge($arr, $str);
			}
    }
    sort($arr);
    foreach($arr as $elem)
        echo "$elem"."\n"
?>