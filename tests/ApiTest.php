<?php

/**
 * This file is part of SSLLabs-PHP.
 *
 * (c) Andy <info@andyfront.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Andyftw\SSLLabs\Test;

use \Andyftw\SSLLabs\Api;

class ApiTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Andyftw\SSLLabs\Api
     */
    protected $api = null;

    public function setUp()
    {
        $this->api = new Api();
    }

    public function tearDown()
    {
        unset($this->api);
    }

    public function testInfo()
    {
        $info = $this->api->info();
        $this->assertNotNull($info);
    }
}
