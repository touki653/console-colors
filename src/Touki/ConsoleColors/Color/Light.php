<?php

namespace Touki\ConsoleColors\Color;

use Touki\ConsoleColors\ColorInterface;

/**
 * Light color lightens a color
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class Light implements ColorInterface
{
    /**
     * Color to light
     * @var ColorInterface
     */
    protected $color;

    /**
     * Constructor
     *
     * @param ColorInterface $color Color to lighten
     */
    public function __construct(ColorInterface $color)
    {
        if ($color instanceof self) {
            throw new \InvalidArgumentException("Cannot lighten an already lighten color");
        }

        $this->color = $color;
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return sprintf('light-%s', $this->color->getName());
    }

    /**
     * {@inheritDoc}
     */
    public function getValue()
    {
        return $this->color->getValue()+60;
    }
}
