<?php

/*
 * This file is part of the KtwFvd package.
 *
 * (c) Kevin T. Weber <https://github.com/kevintweber/KtwFvd/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace kevintweber\KtwFvd\Tests;

use kevintweber\KtwFvd\Fvd;

class FvdTest extends \PHPUnit_Framework_TestCase
{
    public function testCompact()
    {
        $this->assertEquals('n4', Fvd::Compact('font-style:normal;font-weight:400;'));
        $this->assertEquals('i4', Fvd::Compact('font-style:italic;font-weight:400;'));
        $this->assertEquals('o4', Fvd::Compact('font-style:oblique;font-weight:400;'));
        $this->assertEquals('n6', Fvd::Compact('font-style:normal;font-weight:600;'));
        $this->assertEquals('i7', Fvd::Compact('font-style:italic;font-weight:700;'));
        $this->assertEquals('i4', Fvd::Compact('font-style:italic;'));
        $this->assertEquals('n7', Fvd::Compact('font-weight:700;'));
        $this->assertEquals('i4', Fvd::Compact('font-style:italic;font-weight:normal;'));
        $this->assertEquals('n7', Fvd::Compact('font-weight:bold;'));
    }

    public function testExpand()
    {
        $this->assertEquals('font-style:normal;font-weight:400;',Fvd::Expand('n4'));
        $this->assertEquals('font-style:italic;font-weight:400;',Fvd::Expand('i4'));
        $this->assertEquals('font-style:oblique;font-weight:400;',Fvd::Expand('o4'));
        $this->assertEquals('font-style:normal;font-weight:600;',Fvd::Expand('n6'));
        $this->assertEquals('font-style:italic;font-weight:700;',Fvd::Expand('i7'));
    }

    public function testParse()
    {
        $this->assertEquals(array('font-style' => 'normal', 'font-weight' => 400),
                            Fvd::Parse('n4'));
        $this->assertEquals(array('font-style' => 'italic', 'font-weight' => 400),
                            Fvd::Parse('i4'));
        $this->assertEquals(array('font-style' => 'oblique', 'font-weight' => 400),
                            Fvd::Parse('o4'));
        $this->assertEquals(array('font-style' => 'normal', 'font-weight' => 600),
                            Fvd::Parse('n6'));
        $this->assertEquals(array('font-style' => 'italic', 'font-weight' => 700),
                            Fvd::Parse('i7'));
    }
}