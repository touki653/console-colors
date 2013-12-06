<?php

namespace Touki\ConsoleColors\Color;

use Touki\ConsoleColors\ColorInterface;

/**
 * Flat color
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class Color implements ColorInterface
{
    /**
     * Color name
     * @var string
     */
    protected $name;

    /**
     * Color value
     * @var integer
     */
    protected $value;

    /**
     * Constructor
     *
     * @param string  $name  Color name
     * @param integer $value Color value
     */
    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritDoc}
     */
    public function getValue()
    {
        return $this->value;
    }
}
