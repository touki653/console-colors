<?php

namespace Touki\ConsoleColors;

/**
 * Base interface for variators
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
interface VariatorInterface
{
    /**
     * Proccesses the visitor
     *
     * @param VarationVisitor $visitor Variation Visitor
     */
    public function process(VariationVisitor $visitor);
}
