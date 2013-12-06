<?php

namespace Touki\ConsoleColors\Variator;

use Touki\ConsoleColors\Color\Color;
use Touki\ConsoleColors\VariatorInterface;
use Touki\ConsoleColors\VariationVisitor;

/**
 * Lighten variator upgrades the color value by 60
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class Lighten implements VariatorInterface
{
    /**
     * {@inheritDoc}
     */
    public function process(VariationVisitor $visitor)
    {
        $color = $visitor->getColor();

        $visitor->setColor(new Color($color->getName(), $color->getValue()+60));
    }
}
