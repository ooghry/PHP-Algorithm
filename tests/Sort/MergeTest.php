<?php

namespace PhoghryTest\Algorithm;

use Phoghry\Sort\Merge;
use PHPUnit\Framework\TestCase;

class MergeTest extends TestCase
{
    function testSort()
    {
        $oSortMerge = new Merge();
        $result = $oSortMerge->sort([3, 2, 1, 4]);
        $this->assertEquals([1, 2, 3, 4], $result);
    }
}
