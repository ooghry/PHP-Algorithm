<?php

namespace PhoghryTest\Algorithm;

use Phoghry\Sort\Insertion;
use PHPUnit\Framework\TestCase;

class InsertionTest extends TestCase
{
    function testSort()
    {
        $oSortInsertion = new Insertion();
        $result = $oSortInsertion->sort([10, 6, 8, 4, 2, 1]);
        $this->assertEquals([1, 2, 4, 6, 8, 10], $result);
    }
}
