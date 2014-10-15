<?php

class UrlTest extends PHPUnit_Framework_TestCase
{
    public function urlInputProvider()
    {
        return array(
            array(array('test' => "http://www.google.com"),                          true),
            array(array('test' => "https://www.google.com"),                         true),
            array(array('test' => "mailto:geliscan@gmail.com"),                      true),
            array(array('test' => "www.google.com"),                                 false),
            array(array('test' => "geliscan@gmail.com"),                             false),
            array(array('test' => "ftp://ftp.is.co.za.example.org/rfc/rfc1808.txt"), true),
            array(array('test' => "telnet://melvyl.ucop.example.edu/"),              true),
            array(array('test' => "ldap://[2001:db8::7]/c=GB?objectClass?one"),      true),
            array(array('test' => "simple validator"),                               false),
        );
    }

    /**
     * @covers Validator::url
     * @dataProvider urlInputProvider
     */
    public function testUrl($inputs, $expected)
    {
        $rules  = array(
            'test' => array('url')
        );

        $validation_result = SimpleValidator\Validator::validate($inputs, $rules);

        $this->assertEquals($expected, $validation_result->isSuccess());
    }
}
