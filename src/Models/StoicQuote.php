<?php

namespace Models;

use GuzzleHttp\Client;

class StoicQuote
{
    private string $stoicApiPath = 'https://stoicquotesapi.com/v1/api/quotes/random';

    public function get(): string
    {
        $client = new Client([
            'base_uri' => $this->stoicApiPath,
            'timeout' => 10.0
        ]);

        $response = $client->request('GET')->getBody();

        $quoteData = json_decode($response);

        return '"' . $quoteData->body . '" - ' . $quoteData ->author;
    }
}