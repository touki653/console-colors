<?php

namespace Touki\ConsoleColors\Style;

use Touki\ConsoleColors\StyleInterface;

/**
 * Bold Style
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class Bold implements StyleInterface
{
    /**
     * {@inheritDoc}
     */
    public function getVariation()
    {
        return 1;
    }
}
