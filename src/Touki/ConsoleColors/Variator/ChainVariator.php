<?php

namespace Touki\ConsoleColors\Variator;

use Touki\ConsoleColors\Color\Color;
use Touki\ConsoleColors\VariatorInterface;
use Touki\ConsoleColors\VariationVisitor;

/**
 * Chain variator lets you have multiple variator
 * !! Careful: you cannot combine Bold, Strike, Underline...
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class ChainVariator implements VariatorInterface
{
    /**
     * An array of variators
     * @var array<VariatorInterface>
     */
    protected $variators;

    /**
     * Constructor
     *
     * @param array $variators An array of variators
     */
    public function __construct(array $variators = array())
    {
        $this->setVariators($variators);
    }

    /**
     * Sets and replaces variators
     *
     * @param  array $variators An array of Variator instances
     * @return ChainVariator
     */
    public function setVariators(array $variators = array())
    {
        $this->variators = array();
        $this->addVariators($variators);

        return $this;
    }

    /**
     * Adds multiple variators
     *
     * @param  array $variators An array of Variator instances
     * @return ChainVariator
     */
    public function addVariators(array $variators = array())
    {
        foreach ($variators as $variator) {
            $this->addVariator($variator);
        }

        return $this;
    }

    /**
     * Adds a variator
     *
     * @param  VariatorInterface $variator A Variator instance
     * @return ChainVariator
     */
    public function addVariator(VariatorInterface $variator)
    {
        $this->variators[] = $variator;

        return $this;
    }

    /**
     * Gets Variators
     *
     * @return array An array of Variator
     */
    public function getVariators()
    {
        return $this->variators;
    }

    /**
     * {@inheritDoc}
     */
    public function process(VariationVisitor $visitor)
    {
        foreach ($this->variators as $variator) {
            $variator->process($visitor);
        }
    }
}
