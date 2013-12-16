<?php

namespace Touki\ConsoleColors;

use Touki\ConsoleColors\Color\Light;

/**
 * Default palette
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class DefaultPalette extends Palette
{
    /**
     * Constructor instanciates default colorsets
     */
    public function __construct()
    {
        $this->addDefaultColors();
    }

    /**
     * Adds all default color
     */
    public function addDefaultColors()
    {
        $files = glob(__DIR__.'/Color/*.php');
        $namespace = "Touki\ConsoleColors\Color\%s";

        foreach ($files as $file) {
            $name = basename($file, '.php');

            if ($name == 'Light') {
                continue;
            }

            $classname = sprintf($namespace, $name);
            $color = new $classname;
            $light = new Light($color);

            $this->set($color->getName(), new ColorSet($color));
            $this->set($light->getName(), new ColorSet($light));
        }
    }
}
