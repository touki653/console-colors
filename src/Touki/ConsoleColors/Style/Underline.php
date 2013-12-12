<?php

namespace Touki\ConsoleColors\Style;

use Touki\ConsoleColors\StyleInterface;

/**
 * Underline Style
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class Underline implements StyleInterface
{
    /**
     * {@inheritDoc}
     */
    public function getVariation()
    {
        return 4;
    }
}
