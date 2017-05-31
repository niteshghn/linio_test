<?php

require 'Linio.php';

class LinioTest extends PHPUnit_Framework_TestCase
{
    private $linio;

    protected function setUp()
    {
        $this->linio = new Linio();
    }

    protected function tearDown()
    {
        $this->linio = NULL;
    }

    public function testPrintMulti()
    {
        $n = 100;
        $n1 = 3;
        $n2 = 5;
        $result = $this->linio->printMulti($n, $n1, $n2);
        $expected = $this->makeExArray($n, $n1, $n2);
        $this->assertTrue($this->arrays_same($expected,$result));
    }

    private function makeExArray($n, $n1, $n2)
    {
        $arr = [];
        $n3 = $n1*$n2;
        for ($i = 1; $i < $n; $i++) {
            if ($i % $n3 == 0) {
                $arr[$i] = 'Linianos';
            } else if ($i % $n1 == 0) {
                $arr[$i] = 'Linio';
            } else if ($i % $n2 == 0) {
                $arr[$i] = 'IT';
            } else {
                $arr[$i] = $i;
            }
        }
        return $arr;
    }

    private function arrays_same($a, $b)
    {
        // if the indexes don't match, return immediately
        if (count(array_diff_assoc($a, $b))) {
            return false;
        }
        // we know that the indexes, but maybe not values, match.
        // compare the values between the two arrays
        foreach ($a as $k => $v) {
            echo $v.PHP_EOL;
            if ($v !== $b[$k]) {
                return false;
            }
        }
        // we have identical indexes, and no unequal values
        return true;
    }
}
