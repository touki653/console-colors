<?php

namespace Touki\ConsoleColors\Color;

use Touki\ConsoleColors\ColorInterface;

/**
 * Purple Color
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class Purple implements ColorInterface
{
    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'purple';
    }

    /**
     * {@inheritDoc}
     */
    public function getValue()
    {
        return 35;
    }
}
