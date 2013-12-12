<?php

namespace Touki\ConsoleColors\Color;

use Touki\ConsoleColors\ColorInterface;

/**
 * Yellow Color
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class Yellow implements ColorInterface
{
    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'yellow';
    }

    /**
     * {@inheritDoc}
     */
    public function getValue()
    {
        return 33;
    }
}
