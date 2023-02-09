<?php

namespace Rafinita;

require 'RafinitaApiClient.php';

class RafinitaApi
{
    private $rafinitaApiClient;

    public function __construct()
    {
        $this->rafinitaApiClient = new RafinitaApiClient();
    }

    public function sale(array $data): string
    {
        $url = $_ENV['RAFINITA_API_URL'] . '/post';
        $response = $this->rafinitaApiClient->post($url, $data);
        return json_encode($response);
    }
}
