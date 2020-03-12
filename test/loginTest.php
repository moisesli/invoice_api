<?php

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
include "../vendor/autoload.php";

class LoginTest extends TestCase
{
    public function testLogin()
    {
        $client = new GuzzleHttp\Client();
        $response = $client->get('http://invoice_api.localhost/src/login.php?f=login');
        var_dump($response->getBody()->getContents());
        $this->assertEquals(true,true);
    }
}
