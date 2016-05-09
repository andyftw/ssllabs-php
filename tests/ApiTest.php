<?php

namespace Andyftw\SSLLabs\Test;

class ApiTest extends \PHPUnit_Framework_TestCase
{
    protected $api = null;

    public function setUp()
    {
        $this->api = new \Andyftw\SSLLabs\Api();
    }

    public function tearDown()
    {
        unset($this->api);
    }
}
