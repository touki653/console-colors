# PHP Command Line Colors

This library is just a for-fun-playground to use colors in an UNIX console.  
It's object oriented

## Installation

1. Get Composer at http://getcomposer.org
2. Type in command line

```sh
composer.phar require touki/console-colors
```

And there you go

## Usage

The `Touki\ConsoleColors\Formatter` interface looks like this

```php
<?php

/**
 * Formats colors into a string
 *
 * @param string         $string     String to format
 * @param ColorInterface $foreground Foreground color
 * @param ColorInterface $background Background color
 * @param StyleInterface $style      Style
 *
 * @return string Formatted color
 */
function format($string, ColorInterface $foreground, ColorInterface $background = null, StyleInterface $style = null);

?>
```

For choosing a `Touki\ConsoleColors\ColorInterface` you can pick any in [the list of predefined](https://github.com/touki653/console-colors/tree/master/src/Touki/ConsoleColors/Color) ones.  
Please note that `Color\Light` and `Color\Color` have a special behaviour specified below.

The same goes for a `Touki\ConsoleColors\StyleInterface`. You can pick any in the [list of predefined](https://github.com/touki653/console-colors/tree/master/src/Touki/ConsoleColors/Style) ones.

```php
<?php

use Touki\ConsoleColors\Formatter;
use Touki\ConsoleColors\Color;
use Touki\ConsoleColors\Style;

$formatter = new Formatter;

// Prints red text
echo $formatter->format('foobar', new Color\Red);

// Prints red text on blue background
echo $formatter->format('foobar', new Color\Red, new Color\Blue); 

// Prints underlined red text
echo $formatter->format('foobar', new Color\Red, null, new Style\Underline);

// Prints bold red text on blue background
echo $formatter->format('foobar', new Color\Red, new Color\Blue, new Style\Bold);

?>
```

The `Color\Light` color needs a `ColorInterface` as a constructor parameter. (Cannot be combined with himself)

```php
<?php

use Touki\ConsoleColors\Formatter;
use Touki\ConsoleColors\Color;
use Touki\ConsoleColors\Style;

$formatter = new Formatter;

// Prints light red text
echo $formatter->format('foobar', new Color\Light(new Color\Red));

// Prints red text on light cyan background
echo $formatter->format('foobar', new Color\Red, new Light(new Color\Cyan)); 

// Prints lightblue text on grey background
echo $formatter->format('foobar', new Color\Light(new Color\Blue), new Light(new Color\Black)); 
?>
```
