<?php

namespace Touki\ConsoleColors;

use Touki\ConsoleColors\Color;
use Touki\ConsoleColors\Style;

/**
 * Formats colors into string
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class Formatter
{
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
    public function format($string, ColorInterface $foreground, ColorInterface $background = null, StyleInterface $style = null)
    {
        $style      = $style      ?: new Style\None;
        $background = $background ?: new Color\None;

        $front = sprintf("\033[%d;%dm", $style->getVariation(), $foreground->getValue());
        $back  = sprintf("\033[%dm", $background->getValue() + 10); // Constant
        
        return sprintf("%s%s%s\033[0m", $front, $back, $string);
    }
}
