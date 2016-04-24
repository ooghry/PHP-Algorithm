<?php
require_once __DIR__ . '/../vendor/autoload.php';

class SortMergeTest extends PHPUnit_Framework_TestCase
{
    function testSort()
    {
        $oSortMerge = new \Algorithm\SortMerge();
        $result = $oSortMerge->sort([3, 2, 1, 4]);
        $this->assertEquals([1, 2, 3, 4], $result);
    }
}
