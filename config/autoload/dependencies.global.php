<?php
use App\Domain\Service\FlashMessageInterface;
use App\Infrastructure\Service\FlashMessageFactory;
use Aura\Session\Session;
use DaMess\Factory\AuraSessionFactory;
use Zend\Expressive\Application;
use Zend\Expressive\Container\ApplicationFactory;
use Zend\Expressive\Helper;
use App\Infrastructure\Persistence\Doctrine\Repository\CustomerRepositoryFactory;
use App\Domain\Persistence\CustomerRepositoryInterface;
use Zend\Expressive\Helper\ServerUrlHelper;
use Zend\Expressive\Helper\UrlHelper;
use Zend\Expressive\Helper\UrlHelperFactory;

return [
    // Provides application-wide services.
    // We recommend using fully-qualified class names whenever possible as
    // service names.
    'dependencies' => [
        // Use 'invokables' for constructor-less services, or services that do
        // not require arguments to the constructor. Map a service name to the
        // class name.
        'invokables' => [
            // Fully\Qualified\InterfaceName::class => Fully\Qualified\ClassName::class,
            ServerUrlHelper::class => ServerUrlHelper::class,
        ],
        // Use 'factories' for services provided by callbacks/factory classes.
        'factories' => [
            Application::class => ApplicationFactory::class,
            UrlHelper::class => UrlHelperFactory::class,
            CustomerRepositoryInterface::class => CustomerRepositoryFactory::class,
            Session::class => AuraSessionFactory::class,
            FlashMessageInterface::class => FlashMessageFactory::class,
        ],
        'aliases' => [
            'configuration' => 'config', //Doctrine needs a service called Configuration
        ],
    ],
];



