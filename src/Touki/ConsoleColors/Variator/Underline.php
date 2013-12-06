<?php

namespace Touki\ConsoleColors\Variator;

use Touki\ConsoleColors\VariatorInterface;
use Touki\ConsoleColors\VariationVisitor;

/**
 * Underline variator sets the variation to 4
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class Underline implements VariatorInterface
{
    /**
     * {@inheritDoc}
     */
    public function process(VariationVisitor $visitor)
    {
        $visitor->setVariation(4);
    }
}
