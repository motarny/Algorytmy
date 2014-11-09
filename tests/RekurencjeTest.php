<?php

class RekurencjeTest extends PHPUnit_Framework_TestCase
{

    public function setUp ()
    {
        loadClass('Rekurencje');
        $this->rekurencje = new Rekurencje();
    }

    /**
     * @dataProvider fibonacciArray
     */
    public function testFibonacci ($pos, $result)
    {
        $this->assertEquals($result, $this->rekurencje->fibonacci($pos));
    }

    /**
     * @dataProvider reverseArray
     */
    public function testReverse ($input, $result)
    {
        $reversed = $this->rekurencje->reverse($input);
        $this->assertEquals($result, $reversed);
    }


    /**
    * @dataProvider binaryTreeArray
    */
    public function testBinaryTree ($haystack, $needle, $result)
    {
        $hasNeedle = $this->rekurencje->binaryTreeSearch($haystack, $needle);
        $this->assertEquals($hasNeedle, $result);
    }
    

    
    // DATA PROVIDERS
    
    
    public function binaryTreeArray()
    {
    return array(
            array(
                    array(
                            1,3,7,9,10,13,17,32,40
                    ),32, true
            ),
            array(
                    array(
                            1,3,7,9,10,13,17,32,40
                    ),33,false
            ),
            array(
                    array(
                            1,2,3,
                    ),1,true
            ),
            array(
                    array(
                            1,2,3
                    ),3,true
            )
        );
    }

    
    
    public function fibonacciArray ()
    {
        return array(
                array(
                        5,5
                ),array(
                        6,8
                )
        );
    }

    public function reverseArray ()
    {
        return array(
                array(
                        array(
                                1,2,5,8,10
                        ),array(
                                10,8,5,2,1
                        )
                ),
                array(
                        array(
                                9,8,7,6,5,4,3,2,1
                        ),array(
                                1,2,3,4,5,6,7,8,9
                        )
                ),
                array(
                        array(
                                'a', 'b', 'c', 'd', 'e', 'f'
                        ),array(
                                'f', 'e', 'd', 'c', 'b', 'a'
                        )
                ),
                array(
                        array(
                                'marcin', 'ola', 'adam', 'stefan'
                        ),array(
                                'stefan', 'adam', 'ola', 'marcin'
                        )
                )
        );
    }
}

?>
