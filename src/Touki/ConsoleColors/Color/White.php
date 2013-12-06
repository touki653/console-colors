<?php

namespace Touki\ConsoleColors\Color;

use Touki\ConsoleColors\ColorInterface;

/**
 * White Color
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class White implements ColorInterface
{
    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'white';
    }

    /**
     * {@inheritDoc}
     */
    public function getValue()
    {
        return 37;
    }
}
