<?php

namespace PhoghryTest\Algorithm;

use Phoghry\Sort\Bubble;
use PHPUnit\Framework\TestCase;

class BubbleTest extends TestCase
{
    function testSort()
    {
        $oSortBubble = new Bubble();
        $result = $oSortBubble->sort([10, 8, 6, 4, 2, 1]);
        $this->assertEquals([1, 2, 4, 6, 8, 10], $result);
    }
}
