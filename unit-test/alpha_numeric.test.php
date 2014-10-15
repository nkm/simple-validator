<?php

class AlphaNumericTest extends PHPUnit_Framework_TestCase
{
    public function alphaNumericInputProvider()
    {
        return array(
            array(array('test' => null),          true),
            array(array('test' => ''),            true),
            array(array('test' => 123),           true),
            array(array('test' => '123'),         true),
            array(array('test' => 'ABCDE'),       true),
            array(array('test' => 'ABCDE123'),    true),
            array(array('test' => 'ABCDE123?!@'), false),
        );
    }

    /**
     * @covers Validator::alpha_numeric
     * @dataProvider alphaNumericInputProvider
     */
    public function testAlphaNumeric($inputs, $expected)
    {
        $rules  = array(
            'test' => array('alpha_numeric')
        );

        $validation_result = SimpleValidator\Validator::validate($inputs, $rules);

        $this->assertEquals($expected, $validation_result->isSuccess());
    }
}
