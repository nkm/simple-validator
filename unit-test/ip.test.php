<?php

class IPTest extends PHPUnit_Framework_TestCase
{
    public function ipInputProvider()
    {
        return array(
            array(array('test' => null),                              true),
            array(array('test' => ''),                                true),
            array(array('test' => "89.250.130.65"),                   true),
            array(array('test' => "89.300.130.65"),                   false),
            array(array('test' => "2a03:2880:10:1f02:face:b00c::25"), true),
            array(array('test' => "Simple Validator"),                false),
        );
    }

    /**
     * @covers Validator::ip
     * @dataProvider ipInputProvider
     */
    public function testIp($inputs, $expected)
    {
        $rules  = array(
            'test' => array('ip')
        );

        $validation_result = SimpleValidator\Validator::validate($inputs, $rules);

        $this->assertEquals($expected, $validation_result->isSuccess());
    }
}
