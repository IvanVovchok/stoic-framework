<?php

namespace Controllers;

use Models\StoicQuote;
use Stoic\Facades\View;

class WelcomeController
{
    public function index(): string
    {
        $stoicQuote = new StoicQuote();
        $quoteData = $stoicQuote->get();

        $template = new View(__DIR__ . '/../resources/views/');

        return $template->render('welcome.view.php', ['quoteData' => $quoteData]);
    }
}