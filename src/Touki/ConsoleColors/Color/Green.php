<?php

namespace Touki\ConsoleColors\Color;

use Touki\ConsoleColors\ColorInterface;

/**
 * Green Color
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class Green implements ColorInterface
{
    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'green';
    }

    /**
     * {@inheritDoc}
     */
    public function getValue()
    {
        return 32;
    }
}
