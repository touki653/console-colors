<?php

namespace Touki\ConsoleColors\Color;

use Touki\ConsoleColors\ColorInterface;

/**
 * Blue Color
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class Blue implements ColorInterface
{
    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'blue';
    }

    /**
     * {@inheritDoc}
     */
    public function getValue()
    {
        return 34;
    }
}
