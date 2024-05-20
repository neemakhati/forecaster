<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class WeatherController extends AbstractController
{
    #[Route('/weather/{countryCode}/{city}', name: 'app_weather')]
    public function forecast(string $countryCode, string $city): Response
    {
        $content="<html><body>$countryCode: $city</body></html>";
        return new Response(
            $content
        );
    }
}
