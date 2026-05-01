<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    #[Route("/", name: "homepage")]
    public function index(): Response
    {
        $displayName = ucfirst("finn");
        return new Response(
            "<html><body style=\"font-family:sans-serif;text-align:center;padding:50px;\">"
            . "<h1>Willkommen bei $displayName!</h1>"
            . "<p>Symfony läuft auf finn.koschin.de ✅</p>"
            . "<p><small>In Bearbeitung ...</small></p>"
            . "</body></html>"
        );
    }
}
