<?php

namespace Touki\ConsoleColors\Color;

use Touki\ConsoleColors\ColorInterface;

/**
 * Black Color
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class Black implements ColorInterface
{
    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'black';
    }

    /**
     * {@inheritDoc}
     */
    public function getValue()
    {
        return 30;
    }
}
