<?php

class Rekurencje
{

    public function fibonacci ($n)
    {
        if ($n == 0)
            return 0;
        if ($n == 1) {
            return 1;
        }
        
        $fib2 = $this->fibonacci($n - 2);
        $fib1 = $this->fibonacci($n - 1);
        
        return $fib1 + $fib2;
    }

    public function reverse ($input)
    {
        $last = $input[count($input) - 1];
        $slice = array_slice($input, 0, count($input) - 1);
        
        if (count($slice) < 1)
            return $input;
        
        $revSlice = $this->reverse($slice);
        array_unshift($revSlice, $last);
        
        return $revSlice;
    }

    public function binaryTreeSearch ($haystack, $needle)
    {
        $middleIndex = floor(count($haystack) / 2);
        $middleValue = $haystack[$middleIndex];
        
        if ($middleValue == $needle)
            return true;
        if (count($haystack) == 1)
            return false;
        
        if ($middleValue > $needle) {
            $slice = array_slice($haystack, 0, $middleIndex);
            return $this->binaryTreeSearch($slice, $needle);
        }
        if ($middleValue < $needle) {
            $slice = array_slice($haystack, $middleIndex);
            return $this->binaryTreeSearch($slice, $needle);
        }
    }
}

?>
