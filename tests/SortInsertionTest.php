<?php
require_once __DIR__ . '/../vendor/autoload.php';

class SortInsertionTest extends PHPUnit_Framework_TestCase
{
    function testSort()
    {
        $oSortInsertion = new \Algorithm\SortInsertion();
        $result = $oSortInsertion->sort([10, 8, 6, 4, 2, 1]);
        $this->assertEquals([1, 2, 4, 6, 8, 10], $result);
    }
}
