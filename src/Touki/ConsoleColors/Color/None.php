<?php

namespace Touki\ConsoleColors\Color;

use Touki\ConsoleColors\ColorInterface;

/**
 * None Color
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class None implements ColorInterface
{
    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'none';
    }

    /**
     * {@inheritDoc}
     */
    public function getValue()
    {
        return 8;
    }
}
