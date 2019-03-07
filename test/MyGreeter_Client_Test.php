<?php
include_once __DIR__.'/../lib/Client.php'; 
class MyGreeter_Client_Test extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->greeter = new \MyGreeter\Client();
    }

    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }

    public function test_getGreeting()
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );

        // $this->assertEquals('Good afternoon', $this->greeter->getGreeting());
        fwrite(STDERR, print_r($this->greeter->getGreeting(), TRUE));
    }
}
