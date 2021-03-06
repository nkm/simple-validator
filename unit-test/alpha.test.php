<?php

class AlphaTest extends PHPUnit_Framework_TestCase
{
    public function alphaInputProvider()
    {
        return array(
            array(array('test' => null),          true),
            array(array('test' => ''),            true),
            array(array('test' => 'ABCDE'),       true),
            array(array('test' => 'ABCDE123'),    false),
            array(array('test' => 'ABCDE123?!@'), false),
        );
    }

    /**
     * @covers Validator::alpha
     * @dataProvider alphaInputProvider
     */
    public function testAlpha($inputs, $expected)
    {
        $rules  = array(
            'test' => array('alpha')
        );

        $validation_result = SimpleValidator\Validator::validate($inputs, $rules);

        $this->assertEquals($expected, $validation_result->isSuccess());
    }
}
