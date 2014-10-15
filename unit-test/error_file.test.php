<?php

class ErrorFileTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers Validator::getErrors
     */
    public function testDefaultErrorFileInCurrentDirectory()
    {
        $inputs = array();
        $rules  = array(
            'name' => array('required')
        );
        $expected = array('name field is required');

        $validation_result = SimpleValidator\Validator::validate($inputs, $rules);

        $this->assertEquals($expected, $validation_result->getErrors());
    }

    /**
     * @covers Validator::getErrors
     */
    public function testDefaultErrorFileInALevelAboveDirectory()
    {
        $inputs = array();
        $rules  = array(
            'name' => array('required')
        );
        $expected = array('name field is required');

        chdir("..");
        $validation_result = SimpleValidator\Validator::validate($inputs, $rules);

        $this->assertEquals(array('name field is required'), $validation_result->getErrors());
    }
}
