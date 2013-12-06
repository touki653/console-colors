<?php

namespace Touki\ConsoleColors;

/**
 * Color Interface
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
interface ColorInterface
{
    /**
     * Get color name
     *
     * @return string Color name
     */
    public function getName();

    /**
     * Get Color value
     *
     * @return integer Color Value
     */
    public function getValue();
}
