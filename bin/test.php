<?php

require __DIR__.'/../vendor/autoload.php';

use Touki\ConsoleColors\Formatter;
use Touki\ConsoleColors\Style;
use Touki\ConsoleColors\Color;

$formatter = new Formatter;
$string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.";

$foreground = new Color\Light(new Color\Red);

echo $formatter->format($string, $foreground, null, new Style\Underline), PHP_EOL;


// for ($a = 0; $a <= 100; $a++) {
//     echo $a, ': ', sprintf("\033[%sm%s\033[0m", sprintf("0;%d", $a), $string), PHP_EOL;
//     // echo $a, ': ', sprintf("\033[%sm%s\033[0m", sprintf("%d;91", $a), $string), PHP_EOL;
//     echo PHP_EOL;
// }
