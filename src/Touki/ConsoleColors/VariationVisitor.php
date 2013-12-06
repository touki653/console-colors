<?php

namespace Touki\ConsoleColors;

/**
 * Variation visitor
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class VariationVisitor
{
    /**
     * Variation value
     * @var integer
     */
    protected $variation;

    /**
     * Color
     * @var ColorInterface
     */
    protected $color;

    /**
     * Constructor
     *
     * @param integer        $variation Variation value
     * @param ColorInterface $color     Color
     */
    public function __construct($variation, ColorInterface $color)
    {
        $this->variation = $variation;
        $this->color = $color;
    }

    /**
     * Get Variation
     *
     * @return integer Variation value
     */
    public function getVariation()
    {
        return $this->variation;
    }

    /**
     * Set Variation
     *
     * @param integer $variation Variation value
     */
    public function setVariation($variation)
    {
        $this->variation = $variation;

        return $this;
    }

    /**
     * Get Color
     *
     * @return ColorInterface Color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set Color
     *
     * @param ColorInterface $color Color
     */
    public function setColor(ColorInterface $color)
    {
        $this->color = $color;

        return $this;
    }
}
