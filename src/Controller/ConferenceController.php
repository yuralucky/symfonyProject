<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/home/{name}", name="homepage")
     */
    public function index(string $name = ''): Response
    {

        $name = sprintf('<h2>Hello %s!</h2>', htmlspecialchars($name));

        return new Response(<<<EOF
    <html >
        <body>
        <h1>$name</h1>
        <img src="/images/test.jpeg" alt="">
</body>
        </html >
EOF
        );

    }
}
