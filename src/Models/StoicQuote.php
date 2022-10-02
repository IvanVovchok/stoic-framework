<?php

namespace Models;

use GuzzleHttp\Client;
use Stoic\Facades\View;

class StoicQuote
{
    private string $stoicApiPath = 'https://stoicquotesapi.com/v1/api/quotes/random';


    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Exception
     */
    public function get(): mixed
    {
        $client = new Client([
            'base_uri' => $this->stoicApiPath,
            'timeout' => 10.0
        ]);

        $response = $client->request('GET')->getBody();

        $quoteData = json_decode($response);

        return $quoteData;
    }
}