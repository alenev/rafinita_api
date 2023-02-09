<?php

namespace Rafinita;

require 'vendor/autoload.php';

class RafinitaApiClient
{
    public function post(string $url, array $data): array
    {
        $client = new \GuzzleHttp\Client();
        if ($client) {
            $client = new \GuzzleHttp\Client(['http_errors' => false]);
            $response = $client->post($url, $data);
            $response_status = $response->getStatusCode();
            $response_data = json_decode($response->getBody());
            $response_data->url = $url;

            if ($response_status == 200) {
                $output_data = [
                    'data' => $response_data
                ];
            } else {
                $output_data = [
                    'error' => $response_data->error_message
                ];
            }
        } else {
            $output_data = [
                'error' => 'Guzzle http client error'
            ];
        }

        return $output_data;
    }
}
