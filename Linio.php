<?php

class Linio
{
    public function printMulti($n, $n1, $n2)
    {

        // n1 & n2 are not divisble by each other , i,e are prime
        $step[0] = $n1;
        $step[1] = $n2;
        $step[2] = $n1 * $n2;
// Array of all numbers
        for ($i = 1; $i <= $n; $i++) {
            $theList[$i] = $i;
        }
// mark n1 multiples
        for ($i = $step[0]; $i <= $n; $i = $i + $step[0]) {
            $theList[$i] = "Linio";

        }
// Mark n2 multiples
        for ($i = $step[1]; $i <= $n; $i = $i + $step[1]) {
            $theList[$i] = "IT";
        }

// Mark n3 multiples
        for ($i = $step[2]; $i <= $n; $i = $i + $step[2]) {
            $theList[$i] = "Linianos";
        }
        return $theList;
    }
}
