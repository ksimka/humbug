<?php
/**
 * Humbug
 *
 * @category   Humbug
 * @package    Humbug
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2015 Pádraic Brady (http://blog.astrumfutura.com)
 * @license    https://github.com/padraic/humbug/blob/master/LICENSE New BSD License
 */

namespace Humbug\Test\Mutator\Boolean;

use Humbug\Mutator;

class TrueTest extends \PHPUnit_Framework_TestCase
{

    public function testReturnsTokenEquivalentToFalse()
    {
        $mutation = new Mutator\Boolean\True;
        $this->assertEquals(
            [
                10 => [
                    T_STRING, 'false'
                ]
            ],
            $mutation->getMutation([], 10)
        );
    }

    public function testMutatesTrueToFalse()
    {
        $tokens = [10 => [T_STRING, 'TRUE']];

        $this->assertTrue(Mutator\Boolean\True::mutates($tokens, 10));

        $tokens = [11 => [T_STRING, 'FALSE']];

        $this->assertFalse(Mutator\Boolean\True::mutates($tokens, 11));
    }
}
