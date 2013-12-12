<?php

namespace Touki\ConsoleColors\Style;

use Touki\ConsoleColors\StyleInterface;

/**
 * No Style
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class None implements StyleInterface
{
    /**
     * {@inheritDoc}
     */
    public function getVariation()
    {
        return 0;
    }
}
