<?php
/**
 * Humbug
 *
 * @category   Humbug
 * @package    Humbug
 * @copyright  Copyright (c) 2015 Pádraic Brady (http://blog.astrumfutura.com)
 * @license    https://github.com/padraic/humbug/blob/master/LICENSE New BSD License
 */

namespace Humbug\Mutator\Boolean;

use Humbug\Mutator\MutatorAbstract;

class LogicalOr extends MutatorAbstract
{
    /**
     * Replace T_BOOLEAN_OR (||) with T_BOOLEAN_AND (&&) 
     *
     * @param array $tokens
     * @param int $index
     * @return array
     */
    public static function getMutation(array &$tokens, $index)
    {
        $tokens[$index] = [
            T_BOOLEAN_AND,
            '&&'
        ];
    }

    public static function mutates(array &$tokens, $index)
    {
        $t = $tokens[$index];
        if (is_array($t) && $t[0] == T_BOOLEAN_OR) {
            return true;
        }
        return false;
    }

}
