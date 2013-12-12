<?php

namespace Touki\ConsoleColors\Color;

use Touki\ConsoleColors\ColorInterface;

/**
 * Cyan Color
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class Cyan implements ColorInterface
{
    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'cyan';
    }

    /**
     * {@inheritDoc}
     */
    public function getValue()
    {
        return 36;
    }
}
