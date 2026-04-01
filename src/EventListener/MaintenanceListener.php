<?php

namespace App\EventListener;

use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Twig\Environment;

final class MaintenanceListener
{
    public function __construct(
        private readonly Environment $twig,
        private readonly string $maintenanceMode, # autowiring nommé pour récupérer le service $maintenanceMode
    )
    {
    }

    #[AsEventListener(priority: 2000)]
    public function onRequestEvent(RequestEvent $event): void
    {
        if ("on" === $this->maintenanceMode) {
            $response = new Response($this->twig->render('maintenance.html.twig'));

            $event->setResponse($response);
        }
    }
}
