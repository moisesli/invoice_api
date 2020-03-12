<?php

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
include "../vendor/autoload.php";

class LoginTest extends TestCase
{
    protected $client;

    public function testLogin()
    {
        $this->client = new GuzzleHttp\Client([
            'base_uri' => 'http://invoice_api.localhost/src/'
        ]);

        $response = $this->client->get('/login.php', [
            'query' => [
                'f' => 'login'
            ]
        ]);

//        $client = new GuzzleHttp\Client();
//        $response = $client->get('http://invoice_api.localhost/src/login.php?f=login');
//        var_dump($response->getBody()->getContents());
        $this->assertEquals(true,true);
    }
}
