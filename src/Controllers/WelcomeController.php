<?php

namespace Controllers;

use Models\StoicQuote;

class WelcomeController
{
    public function index(): string
    {
        $stoicQuote = new StoicQuote();

        return $stoicQuote->get();
    }
}