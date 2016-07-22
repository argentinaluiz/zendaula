<?php

namespace App\Application\Action;

use Interop\Container\ContainerInterface;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;
use Doctrine\ORM\EntityManager;
use App\Domain\Persistence\RepositoryInterface;

class ContatoPageFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $router   = $container->get(RouterInterface::class);
        $template = ($container->has(TemplateRendererInterface::class))
            ? $container->get(TemplateRendererInterface::class)
            : null;

        return new ContatoPageAction($container->get(CustomerRepositoryInterface::class), $template); //$router,
    }
}

