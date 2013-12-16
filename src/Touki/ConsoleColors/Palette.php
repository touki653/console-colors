<?php

namespace Touki\ConsoleColors;

use IteratorAggregate, Countable, ArrayIterator;

/**
 * Colorset collection
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class Palette implements IteratorAggregate, Countable
{
    /**
     * An array of colorsets
     * @var array
     */
    protected $colorsets = array();

    /**
     * {@inheritDoc}
     */
    public function getIterator()
    {
        return new ArrayIterator($this->colorsets);
    }

    /**
     * {@inheritDoc}
     */
    public function count()
    {
        return count($this->colorsets);
    }

    /**
     * Sets a colorset
     *
     * @param string   $name     Colorset Name
     * @param ColorSet $colorset A Colorset
     */
    public function set($name, ColorSet $colorset)
    {
        $this->colorsets[$name] = $colorset;
    }

    /**
     * Get a colorset with given name
     *
     * @param string $name Colorset name
     *
     * @return ColorSet
     */
    public function get($name)
    {
        if (!array_key_exists($name, $this->colorsets)) {
            throw new \InvalidArgumentException(sprintf("Colorset %s does not exist", $name));
        }

        return $this->colorsets[$name];
    }
}
