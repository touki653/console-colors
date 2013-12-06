<?php

namespace Touki\ConsoleColors\Color;

use Touki\ConsoleColors\ColorInterface;

/**
 * Red Color
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class Red implements ColorInterface
{
    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'red';
    }

    /**
     * {@inheritDoc}
     */
    public function getValue()
    {
        return 31;
    }
}
