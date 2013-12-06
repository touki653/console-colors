<?php

namespace Touki\ConsoleColors\Variator;

use Touki\ConsoleColors\VariatorInterface;
use Touki\ConsoleColors\VariationVisitor;

/**
 * Null variator does nothing on variation
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class NullVariator implements VariatorInterface
{
    /**
     * {@inheritDoc}
     */
    public function process(VariationVisitor $visitor)
    {
    }
}
