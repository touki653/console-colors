<?php

namespace Touki\ConsoleColors\Style;

use Touki\ConsoleColors\StyleInterface;

/**
 * Strike Style
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class Strike implements StyleInterface
{
    /**
     * {@inheritDoc}
     */
    public function getVariation()
    {
        return 9;
    }
}
