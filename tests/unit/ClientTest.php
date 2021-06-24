<?php

namespace HumanWay\Tests\unit;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;

class ClientTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testClassShoulExists()
    {
        $this->assertTrue(class_exists('\HumanWay\CamundaClient'));
    }

    public function testShouldMakeRequest() {

        $httpClient = $this->getHttpClientMock(['status'=>'ok'], 200);

        $client = new \HumanWay\CamundaClient(
            [
                'url'=>'http://localhost/engine-rest'
            ],
            $httpClient
        );

        $tasks = $client->request(\HumanWay\CamundaClient::GET, ['tasks']);
        $this->assertNotEmpty($tasks);
    }

    public function getHttpClientMock($responseData, $statusCode) : ClientInterface {
        $headers = ['Content-Type' => 'application/json'];
        $body = json_encode($responseData);

        $response = new Response($statusCode, $headers, $body);

        $mock = new MockHandler([
            $response
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);
        return $client;
    }
}
