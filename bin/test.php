<?php

require __DIR__.'/../vendor/autoload.php';

use Touki\ConsoleColors\Formatter;
use Touki\ConsoleColors\Variator;
use Touki\ConsoleColors\Color;

$formatter = new Formatter;

echo $formatter->format('foobar', new Color\Black, new Variator\NullVariator), PHP_EOL;
echo $formatter->format('foobar', new Color\Black, new Variator\Lighten), PHP_EOL;
echo $formatter->format('foobar', new Color\Black, new Variator\Bold), PHP_EOL;
echo $formatter->format('foobar', new Color\Black, new Variator\ChainVariator(array(new Variator\Bold, new Variator\Lighten))), PHP_EOL;
echo $formatter->format('foobar', new Color\Black, new Variator\Strike), PHP_EOL;
echo $formatter->format('foobar', new Color\Black, new Variator\ChainVariator(array(new Variator\Strike, new Variator\Lighten))), PHP_EOL;
echo $formatter->format('foobar', new Color\Black, new Variator\Underline), PHP_EOL;
echo $formatter->format('foobar', new Color\Black, new Variator\ChainVariator(array(new Variator\Underline, new Variator\Lighten))), PHP_EOL;

$string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.";

// for ($a = 0; $a <= 100; $a++) {
//     echo $a, ': ', sprintf("\033[%sm%s\033[0m", sprintf("%d;31", $a), $string), PHP_EOL;
//     echo $a, ': ', sprintf("\033[%sm%s\033[0m", sprintf("%d;91", $a), $string), PHP_EOL;
//     echo PHP_EOL;
// }
