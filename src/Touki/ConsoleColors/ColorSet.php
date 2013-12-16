<?php

namespace Touki\ConsoleColors;

use Touki\ConsoleColors\Color;
use Touki\ConsoleColors\Style;

/**
 * ColorSet struct
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class ColorSet
{
    /**
     * Foreground
     * @var ColorInterface
     */
    protected $foreground;

    /**
     * Background
     * @var ColorInterface
     */
    protected $background;

    /**
     * Style
     * @var StyleInterface
     */
    protected $style;

    /**
     * Constructor
     *
     * @param ColorInterface $foreground A Foreground Color
     * @param ColorInterface $background A Background Color
     * @param StyleInterface $style      A Style
     */
    public function __construct(ColorInterface $foreground, ColorInterface $background = null, StyleInterface $style = null)
    {
        $this->foreground = $foreground;
        $this->background = $background ?: new Color\None;
        $this->style      = $style      ?: new Style\None;
    }

    /**
     * Get Foreground
     *
     * @return ColorInterface Foreground Color
     */
    public function getForeground()
    {
        return $this->foreground;
    }

    /**
     * Set Foreground
     *
     * @param ColorInterface $foreground Foreground Color
     */
    public function setForeground(ColorInterface $foreground)
    {
        $this->foreground = $foreground;

        return $this;
    }

    /**
     * Get Background
     *
     * @return ColorInterface Background color
     */
    public function getBackground()
    {
        return $this->background;
    }
    
    /**
     * Set Background
     *
     * @param ColorInterface $background Background color
     */
    public function setBackground(ColorInterface $background)
    {
        $this->background = $background;

        return $this;
    }

    /**
     * Get Style
     *
     * @return StyleInterface Style
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set Style
     *
     * @param StyleInterface $style Style
     */
    public function setStyle(StyleInterface $style)
    {
        $this->style = $style;

        return $this;
    }
}
