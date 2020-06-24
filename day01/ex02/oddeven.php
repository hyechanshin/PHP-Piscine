#!/usr/bin/php
<?PHP
    while(true)
    {
        echo "Enter a number: ";
        $number = fgets(STDIN);
        if (feof(STDIN))
            break;
        $number = trim($number);
        if (!(is_numeric($number)))
            echo "'$number' is not a number\n";
        else
        {
            if ($number % 2 == 0){ 
                echo "The number $number is Even\n";
            }
            else 
                echo "The number $number is Odd\n";
        }
    }
    echo "\n";
?>