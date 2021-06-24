<?php
namespace HumanWay;

use GuzzleHttp\ClientInterface;

class CamundaClient {
    private array $settings;
    private ClientInterface $client;

    public const GET = "GET";
    public const POST = "POST";
    public const PUT = "PUT";
    public const DELETE = "DELETE";

    public function __construct(array $settings, ClientInterface $client) {
        $this->settings = $settings;
        $this->client = $client;
    }

    public function request(string $method, array $path, array $query = [], array $data = []) : array {

        $response = $this->client->request($method, implode('/', $path));

        $data = json_decode($response->getBody(), true);

        return $data;
    }
}
