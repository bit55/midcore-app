<?php

namespace App\Middleware;

use Psr\Container\ContainerInterface;

class NotFoundHandlerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new NotFoundHandler($container);
    }
}
