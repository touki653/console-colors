<?php

namespace Touki\ConsoleColors;

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
     * @param string            $string     String to format
     * @param ColorInterface    $foreground Foreground color
     * @param VariatorInterface $variator   Variation
     * @param ColorInterface    $background Background color
     *
     * @return string Formatted color
     */
    public function format(
        $string,
        ColorInterface $foreground,
        VariatorInterface $variator = null,
        ColorInterface $background = null
    ) {
        $visitor = new VariationVisitor(0, $foreground);

        if (null !== $variator) {
            $variator->process($visitor);
        }

        $front = sprintf("\033[%d;%dm", $visitor->getVariation(), $visitor->getColor()->getValue());
        $back  = null;

        if (null !== $background) {
            $back = sprintf("\033[%dm", $background->getValue() + 10); // Constant
        }
        
        return sprintf("%s%s%s\033[0m", $front, $back, $string);
    }
}
