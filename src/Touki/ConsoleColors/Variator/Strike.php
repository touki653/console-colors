<?php

namespace Touki\ConsoleColors\Variator;

use Touki\ConsoleColors\VariatorInterface;
use Touki\ConsoleColors\VariationVisitor;

/**
 * Strike variator sets the variation to 9
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class Strike implements VariatorInterface
{
    /**
     * {@inheritDoc}
     */
    public function process(VariationVisitor $visitor)
    {
        $visitor->setVariation(9);
    }
}
