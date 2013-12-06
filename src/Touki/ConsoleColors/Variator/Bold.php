<?php

namespace Touki\ConsoleColors\Variator;

use Touki\ConsoleColors\VariatorInterface;
use Touki\ConsoleColors\VariationVisitor;

/**
 * Bold variator sets the variation to 1
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class Bold implements VariatorInterface
{
    /**
     * {@inheritDoc}
     */
    public function process(VariationVisitor $visitor)
    {
        $visitor->setVariation(1);
    }
}
