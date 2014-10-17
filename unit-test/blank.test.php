<?php

class BlankTest extends PHPUnit_Framework_TestCase
{
    public function blankInputProvider()
    {
        return array(
            array(null,                     true),
            array(array(),                  true),
            array(array('test' => null),    true),
            array(array('test' => 'null'),  false),

            array(array('test' => ''),      true),
            array(array('test' => ' '),     true),
            array(array('test' => "\t"),    true),
            array(array('test' => "\n"),    true),
            array(array('test' => "\r"),    true),
            array(array('test' => ' '),     false), // non-breaking space

            array(array('test' => 0),       false),
            array(array('test' => 0.0),     false),
            array(array('test' => .0),      false),
            array(array('test' => 0.),      false),
            array(array('test' => '0'),     false),
            array(array('test' => '0.0'),   false),
            array(array('test' => '.0'),    false),
            array(array('test' => '0.'),    false),

            array(array('test' => true),    false),
            array(array('test' => false),   false),
            array(array('test' => 'true'),  false),
            array(array('test' => 'false'), false),

            array(array('test' => array()),      false),
            array(array('test' => '[]'),    false),
            array(array('test' => '{}'),    false),
        );
    }

    /**
     * @covers Validator::blank
     * @dataProvider blankInputProvider
     */
    public function testBlank($inputs, $expected)
    {
        $rules  = array(
            'test' => array('blank')
        );

        $validation_result = SimpleValidator\Validator::validate($inputs, $rules);

        $this->assertEquals($expected, $validation_result->isSuccess());
    }
}
