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
     * A Colorset palette
     * @var Palette
     */
    protected $palette;

    /**
     * Constructor
     *
     * @param Palette $palette A Colorset Palette
     */
    public function __construct(Palette $palette = null)
    {
        $this->palette = $palette ?: new DefaultPalette;
    }

    /**
     * Formats a string from a name given in palette
     *
     * @param string $string String to format
     * @param string $name   Name of the colorset
     *
     * @return string Formatted string
     */
    public function fromName($string, $name)
    {
        $colorset = $this->palette->get($name);

        return $this->fromColorset($string, $colorset);
    }

    /**
     * Formats from colorset
     *
     * @param string   $string   String to format
     * @param ColorSet $colorset A Colorset
     *
     * @return string Formatted string
     */
    public function fromColorset($string, ColorSet $colorset)
    {
        return $this->format($string, $colorset->getForeground(), $colorset->getBackground(), $colorset->getStyle());
    }

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
